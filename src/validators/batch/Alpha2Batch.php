<?php

namespace rocketfellows\ISOStandard3166Validation\validators\batch;

use rocketfellows\ISOStandard3166Validation\BatchValidatorInterface;
use rocketfellows\ISOStandard3166Validation\ValidatorInterface;
use rocketfellows\ISOStandard3166Validation\validators\Alpha2;

class Alpha2Batch implements BatchValidatorInterface
{
    private $validator;

    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    public static function create(): BatchValidatorInterface
    {
        return new self(Alpha2::create());
    }

    public function getInvalidValues(array $values): ?array
    {
        $invalidValues = [];

        foreach ($values as $value) {
            if ($this->validator->isValid($value)) {
                continue;
            }

            $invalidValues[] = $value;
        }

        return !empty($invalidValues) ? $invalidValues : null;
    }
}

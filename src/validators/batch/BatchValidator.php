<?php

namespace rocketfellows\ISOStandard3166Validation\validators\batch;

use rocketfellows\ISOStandard3166Validation\BatchValidatorInterface;
use rocketfellows\ISOStandard3166Validation\ValidatorInterface;

abstract class BatchValidator implements BatchValidatorInterface
{
    private $validator;

    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    public function getInvalidValues(array $values): ?array
    {
        $validator = $this->validator;
        $invalidValues = array_filter(
            $values,
            static function (string $value) use ($validator): bool {
                return !$validator->isValid($value);
            }
        );

        return !empty($invalidValues) ? array_values($invalidValues) : null;
    }
}

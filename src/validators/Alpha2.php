<?php

namespace rocketfellows\ISOStandard3166Validation\validators;

use arslanimamutdinov\ISOStandard3166\ISO3166;
use rocketfellows\ISOStandard3166Validation\ValidatorInterface;

class Alpha2 implements ValidatorInterface
{
    public function isValid(string $value): bool
    {
        return !is_null(ISO3166::getByAlpha2(strtoupper($value)));
    }

    public static function create(): ValidatorInterface
    {
        return new self();
    }
}

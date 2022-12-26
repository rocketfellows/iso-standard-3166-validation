<?php

namespace rocketfellows\ISOStandard3166Validation\validators;

use arslanimamutdinov\ISOStandard3166\ISO3166;
use rocketfellows\ISOStandard3166Validation\ValidatorInterface;

class Name implements ValidatorInterface
{
    public function isValid(string $value): bool
    {
        return !empty(ISO3166::getAllByNames([$value]));
    }

    public static function create(): ValidatorInterface
    {
        return new self();
    }
}

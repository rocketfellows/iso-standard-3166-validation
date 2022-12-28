<?php

namespace rocketfellows\ISOStandard3166Validation\validators\batch;

use rocketfellows\ISOStandard3166Validation\BatchValidatorInterface;
use rocketfellows\ISOStandard3166Validation\validators\Name;

class NameBatch extends BatchValidator
{
    public static function create(): BatchValidatorInterface
    {
        return new self(Name::create());
    }
}

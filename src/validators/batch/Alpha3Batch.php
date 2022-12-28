<?php

namespace rocketfellows\ISOStandard3166Validation\validators\batch;

use rocketfellows\ISOStandard3166Validation\BatchValidatorInterface;
use rocketfellows\ISOStandard3166Validation\validators\Alpha3;

class Alpha3Batch extends BatchValidator
{
    public static function create(): BatchValidatorInterface
    {
        return new self(Alpha3::create());
    }
}

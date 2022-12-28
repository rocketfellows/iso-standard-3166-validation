<?php

namespace rocketfellows\ISOStandard3166Validation\validators\batch;

use rocketfellows\ISOStandard3166Validation\BatchValidatorInterface;
use rocketfellows\ISOStandard3166Validation\validators\Alpha2;

class Alpha2Batch extends BatchValidator
{
    public static function create(): BatchValidatorInterface
    {
        return new self(Alpha2::create());
    }
}

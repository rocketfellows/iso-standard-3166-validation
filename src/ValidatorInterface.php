<?php

namespace rocketfellows\ISOStandard3166Validation;

interface ValidatorInterface
{
    public static function create(): self;
    public function isValid(string $value): bool;
}

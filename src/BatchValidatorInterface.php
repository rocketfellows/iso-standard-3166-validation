<?php

namespace rocketfellows\ISOStandard3166Validation;

interface BatchValidatorInterface
{
    public static function create(): self;

    /**
     * @param string[] $values
     * @return string[]|null
     */
    public function getInvalidValues(array $values): ?array;
}

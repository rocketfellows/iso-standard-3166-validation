<?php

namespace rocketfellows\ISOStandard3166Validation\tests\unit\validators;

use rocketfellows\ISOStandard3166Validation\validators\NumericCode;

/**
 * @group validators
 */
class NumericCodeTest extends ValidatorTest
{
    public function getAssertionData(): array
    {
        return [
            'valid Russian Federation numeric code' => [
                'value' => '643',
                'isValid' => true,
            ],
            'valid Germany numeric code' => [
                'value' => '276',
                'isValid' => true,
            ],
            'invalid numeric code' => [
                'value' => '000',
                'isValid' => false,
            ],
        ];
    }

    protected function getValidatorClass(): string
    {
        return NumericCode::class;
    }
}

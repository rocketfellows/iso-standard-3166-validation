<?php

namespace rocketfellows\ISOStandard3166Validation\tests\unit\validators;

use rocketfellows\ISOStandard3166Validation\validators\Alpha2;

/**
 * @group validators
 */
class Alpha2Test extends ValidatorTest
{
    public function getAssertionData(): array
    {
        return [
            'valid RU alpha2 code' => [
                'value' => 'RU',
                'isValid' => true,
            ],
            'valid DE alpha2 code' => [
                'value' => 'DE',
                'isValid' => true,
            ],
            'invalid PP code' => [
                'value' => 'PP',
                'isValid' => false,
            ],
            'invalid RUS code' => [
                'value' => 'RUS',
                'isValid' => false,
            ],
        ];
    }

    protected function getValidatorClass(): string
    {
        return Alpha2::class;
    }
}

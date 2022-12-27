<?php

namespace rocketfellows\ISOStandard3166Validation\tests\unit\validators;

use rocketfellows\ISOStandard3166Validation\validators\Alpha3;

/**
 * @group validators
 */
class Alpha3Test extends ValidatorTest
{
    public function getAssertionData(): array
    {
        return [
            'valid RUS alpha3 code' => [
                'value' => 'RUS',
                'isValid' => true,
            ],
            'valid DEU alpha3 code' => [
                'value' => 'DEU',
                'isValid' => true,
            ],
            'invalid DE alpha3 code' => [
                'value' => 'DE',
                'isValid' => false,
            ],
            'invalid RU alpha3 code' => [
                'value' => 'RU',
                'isValid' => false,
            ],
        ];
    }

    protected function getValidatorClass(): string
    {
        return Alpha3::class;
    }
}

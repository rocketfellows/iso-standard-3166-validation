<?php

namespace rocketfellows\ISOStandard3166Validation\tests\unit\validators;

use rocketfellows\ISOStandard3166Validation\validators\Name;

/**
 * @group validators
 */
class NameTest extends ValidatorTest
{
    public function getAssertionData(): array
    {
        return [
            'valid Russian Federation country name' => [
                'value' => 'Russian Federation',
                'isValid' => true,
            ],
            'valid Germany country name' => [
                'value' => 'Germany',
                'isValid' => true,
            ],
            'invalid German country name' => [
                'value' => 'German',
                'isValid' => false,
            ],
        ];
    }

    protected function getValidatorClass(): string
    {
        return Name::class;
    }
}

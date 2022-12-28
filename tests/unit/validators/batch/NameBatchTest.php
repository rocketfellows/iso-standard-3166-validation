<?php

namespace rocketfellows\ISOStandard3166Validation\tests\unit\validators\batch;

/**
 * @group batch-validators
 */
class NameBatchTest extends BatchValidatorTest
{
    protected function getValidatorClassName(): string
    {
        return NameBatch::class;
    }

    public function getAssertionData(): array
    {
        return [
            'all values valid' => [
                'values' => [
                    'United Kingdom of Great Britain and Northern Ireland',
                    'United States of America',
                    'Uzbekistan',
                ],
                'expectedResult' => null,
            ],
            'one value invalid' => [
                'values' => [
                    'United Kingdom of Great Britain and Northern Ireland',
                    'United States of America',
                    'Uzbekistan',
                    'foo',
                ],
                'expectedResult' => ['foo',],
            ],
            'multiple values invalid' => [
                'values' => [
                    'United Kingdom of Great Britain and Northern Ireland',
                    'United States of America',
                    'Uzbekistan',
                    'foo',
                    'bar',
                ],
                'expectedResult' => ['foo', 'bar'],
            ],
            'nothing to validate' => [
                'values' => [],
                'expectedResult' => null,
            ],
        ];
    }
}

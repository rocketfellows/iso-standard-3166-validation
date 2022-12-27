<?php

namespace rocketfellows\ISOStandard3166Validation\tests\unit\validators\batch;

use rocketfellows\ISOStandard3166Validation\validators\batch\Alpha2Batch;

/**
 * @group batch-validators
 */
class Alpha2BatchTest extends BatchValidatorTest
{
    protected function getValidatorClassName(): string
    {
        return Alpha2Batch::class;
    }

    public function getAssertionData(): array
    {
        return [
            'one value invalid' => [
                'values' => ['RU', 'DE', 'foo',],
                'expectedResult' => ['foo',],
            ],
            'multiple values invalid' => [
                'values' => ['RU', 'DE', 'foo', 'bar',],
                'expectedResult' => ['foo', 'bar'],
            ],
            'nothing to validate' => [
                'values' => [],
                'expectedResult' => null,
            ],
        ];
    }
}

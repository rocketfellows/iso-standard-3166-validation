<?php

namespace rocketfellows\ISOStandard3166Validation\tests\unit\validators\batch;

use rocketfellows\ISOStandard3166Validation\validators\batch\Alpha3Batch;

/**
 * @group batch-validators
 */
class Alpha3BatchTest extends BatchValidatorTest
{
    protected function getValidatorClassName(): string
    {
        return Alpha3Batch::class;
    }

    public function getAssertionData(): array
    {
        return [
            'all values valid (upper case)' => [
                'values' => ['RUS', 'DEU', 'GBR',],
                'expectedResult' => null,
            ],
            'all values valid (lower case)' => [
                'values' => ['rus', 'deu', 'gbr',],
                'expectedResult' => null,
            ],
            'one value invalid' => [
                'values' => ['RUS', 'DEU', 'foo',],
                'expectedResult' => ['foo',],
            ],
            'multiple values invalid' => [
                'values' => ['RUS', 'DEU', 'foo', 'bar',],
                'expectedResult' => ['foo', 'bar'],
            ],
            'nothing to validate' => [
                'values' => [],
                'expectedResult' => null,
            ],
        ];
    }
}

<?php

namespace rocketfellows\ISOStandard3166Validation\tests\unit\validators\batch;

use rocketfellows\ISOStandard3166Validation\validators\batch\NumericCodeBatch;

/**
 * @group batch-validators
 */
class NumericCodeBatchTest extends BatchValidatorTest
{
    protected function getValidatorClassName(): string
    {
        return NumericCodeBatch::class;
    }

    public function getAssertionData(): array
    {
        return [
            'all values valid' => [
                'values' => ['643', '276', '826',],
                'expectedResult' => null,
            ],
            'one value invalid' => [
                'values' => ['643', '276', '826', '000'],
                'expectedResult' => ['000',],
            ],
            'multiple values invalid' => [
                'values' => ['643', '276', '826', '000', '1000'],
                'expectedResult' => ['000', '1000'],
            ],
            'nothing to validate' => [
                'values' => [],
                'expectedResult' => null,
            ],
        ];
    }
}

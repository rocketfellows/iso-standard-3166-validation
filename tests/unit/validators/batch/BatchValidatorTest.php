<?php

namespace rocketfellows\ISOStandard3166Validation\tests\unit\validators\batch;

use PHPUnit\Framework\TestCase;
use rocketfellows\ISOStandard3166Validation\BatchValidatorInterface;
use rocketfellows\ISOStandard3166Validation\ValidatorInterface;

abstract class BatchValidatorTest extends TestCase
{
    public function testSuccessCreateInstance(): void
    {
        $validatorClass = $this->getValidatorClassName();

        $this->assertInstanceOf(
            BatchValidatorInterface::class,
            (new $validatorClass($this->createMock(ValidatorInterface::class)))
        );
    }

    public function testSuccessCreateInstanceViaStaticFunction(): void
    {
        $validatorClass = $this->getValidatorClassName();

        $this->assertInstanceOf(BatchValidatorInterface::class, $validatorClass::create());
    }

    /**
     * @dataProvider getAssertionData
     */
    public function testCorrectBatchValidation(array $values, ?array $expectedResult): void
    {
        $validatorClass = $this->getValidatorClassName();

        $this->assertEquals($expectedResult, $validatorClass::create()->getInvalidValues($values));
    }

    abstract public function getAssertionData(): array;
    abstract protected  function getValidatorClassName(): string;
}

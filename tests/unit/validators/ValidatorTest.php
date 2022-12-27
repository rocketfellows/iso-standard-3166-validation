<?php

namespace rocketfellows\ISOStandard3166Validation\tests\unit\validators;

use PHPUnit\Framework\TestCase;
use rocketfellows\ISOStandard3166Validation\ValidatorInterface;

abstract class ValidatorTest extends TestCase
{
    public function testSuccessDirectCreateValidator(): void
    {
        $validatorClassName = $this->getValidatorClass();
        $validator = new $validatorClassName();
        $this->assertInstanceOf($validatorClassName, $validator);
        $this->assertInstanceOf(ValidatorInterface::class, $validator);
    }

    public function testSuccessStaticCreateValidator(): void
    {
        $validatorClassName = $this->getValidatorClass();
        $validator = $validatorClassName::create();
        $this->assertInstanceOf($validatorClassName, $validator);
        $this->assertInstanceOf(ValidatorInterface::class, $validator);
    }

    /**
     * @dataProvider getAssertionData
     */
    public function testCorrectValidation(
        string $value,
        bool $isValid
    ): void {
        $this->assertEquals($isValid, $this->getValidator()->isValid($value));
    }

    abstract public function getAssertionData(): array;
    abstract protected function getValidatorClass(): string;

    private function getValidator(): ValidatorInterface
    {
        $validatorClassName = $this->getValidatorClass();
        return $validatorClassName::create();
    }
}

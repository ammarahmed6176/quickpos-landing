<?php
use PHPUnit\Framework\TestCase;

class AvailabilityTest extends TestCase
{
    public function testValidationFunctionsExist()
    {
        require_once __DIR__ . '/../includes/validation.php';
        
        $this->assertTrue(function_exists('validateName'), "validateName function should exist");
        $this->assertTrue(function_exists('validateEmail'), "validateEmail function should exist");
        $this->assertTrue(function_exists('validateMessage'), "validateMessage function should exist");
    }

    public function testIndexPhpExists()
    {
        $this->assertFileExists(__DIR__ . '/../index.php', "index.php should exist in the project root");
    }
}

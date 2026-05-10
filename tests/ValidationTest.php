<?php
// tests/ValidationTest.php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../includes/validation.php';

class ValidationTest extends TestCase
{
    public function testEmptyName()
    {
        $this->assertFalse(validateName(""));
        $this->assertFalse(validateName("   "));
    }

    public function testValidName()
    {
        $this->assertTrue(validateName("John Doe"));
    }

    public function testInvalidEmail()
    {
        $this->assertFalse(validateEmail("invalid-email"));
        $this->assertFalse(validateEmail("test@"));
        $this->assertFalse(validateEmail(""));
    }

    public function testValidEmail()
    {
        $this->assertTrue(validateEmail("test@example.com"));
    }

    public function testEmptyMessage()
    {
        $this->assertFalse(validateMessage(""));
        $this->assertFalse(validateMessage("   "));
    }

    public function testValidMessage()
    {
        $this->assertTrue(validateMessage("Hello, I have a question about QuickPOS."));
    }
}

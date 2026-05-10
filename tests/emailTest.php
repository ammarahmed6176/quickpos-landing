<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../includes/validation.php';

class EmailTest extends TestCase
{
    public function testValidEmailIsAccepted()
    {
        $this->assertTrue(validateEmail("user@example.com"));
    }

    public function testInvalidEmailIsRejected()
    {
        $this->assertFalse(validateEmail("invalid-email-format"));
        $this->assertFalse(validateEmail("user@.com"));
        $this->assertFalse(validateEmail("user@domain"));
    }

    public function testEmptyEmailIsRejected()
    {
        $this->assertFalse(validateEmail(""));
    }
}

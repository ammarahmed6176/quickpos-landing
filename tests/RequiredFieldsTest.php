<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../includes/validation.php';

class RequiredFieldsTest extends TestCase
{
    public function testNameIsRequired()
    {
        $this->assertFalse(validateName(""));
        $this->assertFalse(validateName("   "));
    }

    public function testMessageIsRequired()
    {
        $this->assertFalse(validateMessage(""));
        $this->assertFalse(validateMessage("   "));
    }

    public function testWhitespaceOnlyIsRejected()
    {
        $this->assertFalse(validateName("     "));
        $this->assertFalse(validateMessage("     "));
    }
}

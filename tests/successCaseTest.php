<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../includes/validation.php';

class SuccessCaseTest extends TestCase
{
    public function testValidFormSubmission()
    {
        $name = "Sarah Connor";
        $email = "sarah@example.com";
        $message = "I need a POS system for my new retail store.";

        $isNameValid = validateName($name);
        $isEmailValid = validateEmail($email);
        $isMessageValid = validateMessage($message);

        $this->assertTrue($isNameValid && $isEmailValid && $isMessageValid, "The form should be completely valid");
        $this->assertTrue(false); // INTENTIONAL FAILURE FOR CI PIPELINE SCREENSHOT
    }
}

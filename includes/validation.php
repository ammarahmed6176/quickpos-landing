<?php
// includes/validation.php

function validateName($name) {
    return !empty(trim($name));
}

function validateEmail($email) {
    return filter_var(trim($email), FILTER_VALIDATE_EMAIL) !== false;
}

function validateMessage($message) {
    return !empty(trim($message));
}

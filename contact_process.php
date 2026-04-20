<?php
// contact_process.php

// Check if request is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitize and get inputs
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));
    
    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        // Redirect back with error
        header("Location: index.php?error=" . urlencode("All fields are required. Please fill in the form completely.") . "#contact");
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?error=" . urlencode("Please provide a valid email address.") . "#contact");
        exit;
    }

    // Simulate backend processing (e.g., saving to DB or sending email)
    // sleep(1); // Optional delay to simulate network request
    
    // On success, redirect to thank you page
    header("Location: thank-you.html");
    exit;
} else {
    // If someone tries to access this script directly without POSTing
    header("Location: index.php");
    exit;
}
?>

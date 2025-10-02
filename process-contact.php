<?php
// Include database connection
require_once 'database/connection.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data and sanitize
    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $subject = sanitize_input($_POST['subject']);
    $message = sanitize_input($_POST['message']);
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: contact.php?error=invalid_email');
        exit();
    }
    
    // Insert into database
    $sql = "INSERT INTO contact_messages (name, email, subject, message) 
            VALUES ('$name', '$email', '$subject', '$message')";
    
    if (execute_query($sql)) {
        // Success - redirect with success message
        header('Location: contact.php?success=1');
    } else {
        // Error - redirect with error message
        header('Location: contact.php?error=database');
    }
} else {
    // If not POST request, redirect to contact page
    header('Location: contact.php');
}
exit();
?>

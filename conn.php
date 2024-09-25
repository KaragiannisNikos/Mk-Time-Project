<?php
#   Form 
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Display submitted data
    echo "<h2>Form Submission Successful</h2>";
    echo "<p>FirstName: $firstName</p>";
    echo "<p>LastName: $lastName</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Password: $password</p>";
    // Additional processing (e.g., saving to a database)
    // Your code here...
} else {
    // If accessed directly, redirect back to the form
    header("Location: form.html");
    exit();
}

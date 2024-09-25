<?php
#   Form 
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];

//  Database Connection
$conn = new mysqli('localhost', 'root', '', 'mk_time');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $smt = $conn->prepare("insert into register(firstName, lastName, email, password) values(?, ?, ?)");
    $smt->bind_param("ssss", $firstName, $lastName, $email, $password);
    $stmt->execute();
    echo "registration Successfully...";
    $stmt->close();
    $link->close();
}

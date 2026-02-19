<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>

        .success-message {
            color: #28a745; 
            background-color: #d4edda; 
            border: 1px solid #c3e6cb; 
            padding: 10px;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            font-size: 16px;
            text-align: center;
            margin: 10px 0;
        }

        .error-message {
            color: #dc3545; 
            background-color: #f8d7da; 
            border: 1px solid #f5c6cb; 
            padding: 10px;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            font-size: 16px;
            text-align: center;
            margin: 10px 0;
        }
    </style>
</head>
<body>

<?php
$servername = "localhost:3306"; 
$username = "root"; 
$password = ""; 
$dbname = "wonder_park"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<p class='success-message'>Your message has been sent successfully.</p>";
    } else {
        echo "<p class='error-message'>Error: " . $conn->error . "</p>";
    }
}

$conn->close();
?>
</body>
</html>

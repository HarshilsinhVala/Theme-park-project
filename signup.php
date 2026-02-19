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
    $username = $_POST['fname']; 
    $password = $_POST['password'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password, city, phone) VALUES ('$username', '$email', '$hashedPassword', '$city', '$phone')";

    if ($conn->query($sql) === TRUE) {
        header("Location: main.html");
        exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

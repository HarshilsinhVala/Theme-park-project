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
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $visit_date = $_POST['visit-date'];
    $park = $_POST['park'];
    $option_selected = $_POST['option'];

    $sql = "INSERT INTO bookings (name, mobile, email, visit_date, park, option_selected)
            VALUES ('$name', '$mobile', '$email', '$visit_date', '$park', '$option_selected')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking successfully stored in the database.";
        header("Location: confirmation.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_subscriber";


$subscriber_name = $_POST['subscriber_name'];
$subscriber_email = $_POST['subscriber_email'];
$subscriber_message = $_POST['subscriber_message'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO subscriber_details (subscriber_name,subscriber_email,subscriber_message)
VALUES ('$subscriber_name','$subscriber_email','$subscriber_message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "payment_integration";

$payment_id=$_POST['payment_id'];
$amt=$_POST['amt'];
$name=$_POST['name'];
$payment_status="complete";
$added_on=date('Y-m-d h:i:s');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO payment(name,amount,payment_status,payment_id,added_on)"
VALUES ('$name','$amt','$payment_id','$payment_status','$added_on')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
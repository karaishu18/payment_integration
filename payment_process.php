<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "payment_integration";

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['payment_id']) && isset($_POST['amt']) && isset($_POST['name'])){
    $payment_id=$_POST['payment_id'];
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $payment_status="complete";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($conn,"INSERT INTO payment(name,amount,payment_status,payment_id,added_on) values('$name','$amt','$payment_status','$payment_id','$added_on')");
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
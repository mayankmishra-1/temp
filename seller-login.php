<?php
$mail = $_POST['identifier'];
$password = $_POST['password'];
$con = new mysqli("localhost","root", "Eniac@123", "temp");
if($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sql = "select * from seller where mail='$mail' AND password='$password'";
$result = $con->query($sql);
if($result->num_rows>0) {
    header("location:add-products.html");
} else {
    echo "Invalid User Id/Password";
}

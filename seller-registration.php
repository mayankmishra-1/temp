<?php
$fname = $_POST['fname'];
$number = $_POST['number'];
$email = $_POST['mail'];
$password = $_POST['password'];


$con = new mysqli("localhost", "mayank", "eniac", "temp");
if($con->connect_error) {
    die($con->connect_error);
}

$sql = "INSERT INTO seller(f_name, number, mail, password) VALUES('$fname','$number', '$email', '$password')";
if($con->query($sql)) {
    echo "Your registration is successfull";
} else {
    echo $con->error;
}
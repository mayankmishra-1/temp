<?php
$pname=$_POST['pname'];
$unit=$_POST['unit'];
$desc=$_POST['desc'];
$image=$_POST['image'];
$category=$_POST['category'];

$con = new mysqli("localhost", "mayank", "eniac", "temp");
if($con->connect_error) {
    die($con->connect_error);
}

$sql = "INSERT INTO product(p_name, unit, p_desc,p_image,category) VALUES('$pname','$unit', '$desc', '$image', '$category')";
if($con->query($sql)) {
    echo "Product added.";
} else {
    echo $con->error;
}
<?php 

include "employeedbcon.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

// echo $id, $name, $email, $phone, $password;

$update = "update employeetable SET name = '$name', email = '$email', phone = '$phone', password = '$password' where id = $id";

mysqli_query($employeedbcon,$update);
header('location: employeedisplay.php');
?>
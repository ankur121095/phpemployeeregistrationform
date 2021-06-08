<?php 

include "employeedbcon.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];


$employeedata = "insert into employeetable(name,email,phone,password)value('$name','$email','$phone','$password')";
mysqli_query($employeedbcon,$employeedata);


?>
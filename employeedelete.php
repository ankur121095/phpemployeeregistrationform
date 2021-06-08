<?php 

include "employeedbcon.php";

$id = $_GET['i'];
$delete = "delete from employeetable where id = $id";

mysqli_query($employeedbcon,$delete);
header('location: employeedisplay.php');
?>
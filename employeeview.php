<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data Display View</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<style>
	.heading{
		background: black;
		color: white;
		font-family: 'Brush Script MT', cursive;
	}
	.heading:hover{
		background: #5d5858;
		color: white;
	}
	td:hover{
		background: black;
		color: white;
	}
    </style>
</head>
<body>
	<div class="container">
		<center><h1 class="heading">View Data</h1></center>
		<table class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Password</th>
			</tr>
			<?php
			include "employeedbcon.php";
			$id = $_GET['v'];
			$b = "select * from employeetable where id = $id";
			$c = mysqli_query($employeedbcon,$b);
			$d = mysqli_fetch_array($c);
			?>
			<tr>
				<td><?php echo $d['id'] ?></td>
				<td><?php echo $d['name'] ?></td>
				<td><?php echo $d['email'] ?></td>
				<td><?php echo $d['phone'] ?></td>
				<td><?php echo $d['password'] ?></td>
			</tr>
		</table>
	</div>
</body>
</html>
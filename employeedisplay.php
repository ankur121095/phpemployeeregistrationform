<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data Display</title>
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
		<center><h1 class="heading">Data Display</h1></center>
		<table class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
			<?php
			include "employeedbcon.php";
			$a = "select * from employeetable";
			$result = mysqli_query($employeedbcon,$a);
			while ($f = mysqli_fetch_array($result)) {
			?>
			<tr>
				<td><?php echo $f['id'] ?></td>
				<td><?php echo $f['name'] ?></td>
				<td><?php echo $f['email'] ?></td>
				<td>
					<a href="employeeview.php?v=<?php echo $f['id'] ?>" class="btn btn-info">View</a>
					<a href="employeeedit.php?a=<?php echo $f['id'] ?>" class="btn btn-info">Edit</a>
					<a href="employeedelete.php?i=<?php echo $f['id'] ?>" class="btn btn-info">Delete</a>
				</td>
			</tr>
			<?php 
	        }
	        ?>
		</table>
	</div>

</body>
</html>
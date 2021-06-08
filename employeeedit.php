<?php

include "employeedbcon.php";
$id = $_GET['a'];
$a = "select * from employeetable where id=$id";
$b = mysqli_query($employeedbcon,$a);
$c = mysqli_fetch_array($b);

// echo "<pre>";
// print_r($c);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Employee Registration Form</title>
	<style>
	*{
		margin: 0px;
		padding: 0px;
	}
	.outerdiv{
		background: url("https://i.ytimg.com/vi/pn0V7GWYePc/maxresdefault.jpg");
		/*border: 2px solid;*/
		/*width: 100%;*/
		/*height: 1000%;*/
	}
	.container{
		width: 34%;
        height: 400px;
        margin: auto;
        margin-top: 159px;
        /*border: 2px solid;*/
        background: url("https://ncprinting.com/wp-content/uploads/revslider/slider_8/video-bg.jpg");
	}
	.container h1{
		text-align: center;
		font-size: 50px;
		font-family: 'Brush Script MT', cursive;
		color: white;
	}
	form{
		/*border: 2px solid;*/
		margin: auto;
        width: 70%;
        margin-top: 20px;
        padding-left: 105px;
	}
	.label{
		font-size: 25px;
		font-family: 'Brush Script MT', cursive;
		color: white;
	}
	.input{
		width: 70%;
		height: 30px;
		border-radius: 0 25px;
	}
	.submit{
		width: 70%;
		height: 32px;
		font-weight: bold;
		font-size: 20px;
		font-family: cursive;
		border-radius: 5px;
		background: black;
		color: white;
	}
	.submit:hover{
		background: white;
		color: black;
	}
    </style>
</head>
<body>
	<div class="outerdiv">
	<div class="container">
		<h1>Registration Form</h1>
	<form method="post" action="employeeupdate.php">
		<input type="text" name="id" value="<?php echo $c['id'] ?>">
		<br>
		<label class="label">Name:</label><br>
		<input type="text" name="name" value="<?php echo $c['name'] ?>" class="input" placeholder="Enter Your Name">
		<br>
		<label class="label">Email:</label><br>
		<input type="text" name="email" value="<?php echo $c['email'] ?>" class="input" placeholder="Enter Your Email">
		<br>
		<label class="label">Phone:</label><br>
		<input type="text" name="phone" value="<?php echo $c['phone'] ?>" class="input" placeholder="Enter Phone">
		<br>
		<label class="label">Password:</label><br>
		<input type="password" name="password" value="<?php echo $c['password'] ?>" class="input" placeholder="Enter Password">
		<br><br>
		<input type="submit" value="Submit" class="submit">
	</form>
    </div>
</div>
</body>
</html>
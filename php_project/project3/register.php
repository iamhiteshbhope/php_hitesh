<?php

$connect = mysqli_connect("localhost","root", "","project3db");

if(isset($_POST["register_button"]))
{
$un = $_POST["username"];	//no
$pwd = $_POST["password"]; //no
$cont = $_POST["contact"]; //no

$qry = "INSERT INTO `register`(`id`, `username`, `password`, `contact`) VALUES (NULL,'$un','$pwd','$cont')";

$result = mysqli_query($connect, $qry);

if($result)
{
	?> <script> alert("Registration Successfull"); </script> <?php
}
else
{
	?> <script> alert("Something went wrong, try again later"); </script> <?php
}
}


?>








<!DOCTYPE html>
<html>
<head>
	<title> Register | Project </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="css/style.css" rel="stylesheet">
	<style>
		.row {
			height: 100vh;
			align-items: center;
		}
	</style>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<div class="card" >
					<div class="card-header bg-success text-light">
				<h3> Register Form </h3></div>
				<div class="card-body">
				 <form method="post" >
					<div class="form-group">
						<label>Username</label>
					<input type="text" name="username" class="form-control">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
					<label>Contact</label>
					<input type="tel" name="contact" class="form-control">
					</div>
					<button type="submit" class="btn btn-success" id="btnsubmit" name="register_button"> Register </button>
					
				
				</form>
			</div>
			</div>
			</div>
		</div>
	</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
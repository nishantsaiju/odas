<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<style>
		.error {color: #FF0000;}

	</style>
	<!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <title>DAS:Doctor appointment system </title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap"
      rel="stylesheet"
    />
</head>
<body>


<?php
		if($_SESSION['adminstatus'] == ""){
			header("location:adminlogin.php");
		}
	 ?>


<div class="container-fluid">
		<div class="header_top">
			<span style="font-size:50px;color:#2c2f84;font-weight:bolder;margin-left:15px;">Doctor Appoinment System</span>
		</div>

	<!-- 	this is for menu -->
	<div class="navbar navbar-default nav">
		<nav class="menu">
			<ul>
				
				
				
				<li><a href="addDoctor2.php">Add Doctor</a></li>
				<li><a href="college.php">Add College</a></li>
				<li><a href="viewcollege.php">View College</a></li>
				<li><a href="viewDoctor.php">View Doctor</a></li>
				<li><a href="viewCustomer.php">View Patient</a></li>
				<li><a href="viewAppoinment.php">View Appoinment</a></li>
				<li><a href="viewFeedback.php">View Feedback</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
	

<?php

session_start();
if(!isset($_SESSION['isLoggedIn'])){
     header("Location: login.php");
 }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
	<section id="sidebar">
		<?php include('include/sidebar.php'); ?> 
	</section>		

	<section id="header"> 
		 <?php include('include/header.php'); ?>
	</section>
	 
	<section id="body-section">
	 	<div class="card-box">
	 		<i class="far fa-user fa-3x"></i>
	 		<h3>My Profile</h3>
	 		<a href="#">Update Profile</a>
	 	</div>	

	 	<div class="card-box">
	 		<i class="fas fa-clipboard-list fa-3x"></i>
	 		<h3>My Appointments</h3>
	 		<a href="#">View Appointments History</a>
	 	</div>	

	 	<div class="card-box">
	 		<i class="fas fa-folder-plus fa-3x"></i>
	 		<h3>Book My Appointments</h3>
	 		<a href="#">Book Appointments</a>
	 	</div>	
	 </section>

</body>
</html>
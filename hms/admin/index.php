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
	 		<a href="#"><h3>Manage Patients</h3> </a>
	 		 
	 	</div>	

	 	<div class="card-box">
	 		<i class="fas fa-clipboard-list fa-3x"></i>
	 		<a href="manage-doctors.php"><h3>Manage Doctors</h3> </a>
	 	</div>	

	 	<div class="card-box">
	 		<i class="fas fa-folder-plus fa-3x"></i>
	 		<a href="#"><h3>Manage Appointments</h3> </a>
	 	</div>	
	 </section>


</body>
</html>
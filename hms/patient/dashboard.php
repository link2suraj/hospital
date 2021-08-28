<!DOCTYPE html>
<html>
<head>
  <title>USER DASHBOARD</title>
  
  <link rel="stylesheet" type="text/css" href="../../style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../css/all.css">


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
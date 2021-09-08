<?php

session_start();
if(!isset($_SESSION['isLoggedIn'])){
     header("Location: login.php");
 }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Doctor Panel</title>
</head>
<body>
	<section id="sidebar">
		<?php include('include/sidebar.php'); ?> 
	</section>		

	<section id="header"> 
		 <?php include('include/header.php'); ?>
	</section>

 <section id="body-section">

 							   <?php

									require_once "../dbcon.php";
									$selectquery = "SELECT * FROM doctors";
									$query = mysqli_query($con, $selectquery);
									$num = mysqli_num_rows($query);

									$res = mysqli_fetch_array($query);

								?>

	 	<div class="card-box">
	 		<i class="far fa-user fa-3x"></i>
	 		<h3>My Profile</h3>
	 		<a href="update.php?id=<?php echo $res['id'];?>">Update Profile</a>
	 	</div>	

	 	
	 	<div class="card-box">
	 		<i class="fas fa-folder-plus fa-3x"></i>
	 		<h3>My Appointments</h3>
	 		<a href="#">View Appointments History</a>
	 	</div>	
	 </section>
	 


</body>
</html>
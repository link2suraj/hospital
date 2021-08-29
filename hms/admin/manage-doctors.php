
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>

	<link rel="stylesheet" type="text/css" href="../../css/all.css">

<style>
table, td, th {
  border: 1px solid black;
  padding: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>

</head>
<body>
	<section id="sidebar">
		<?php include('include/sidebar.php'); ?> 
	</section>		

	<section id="header"> 
		 <?php include('include/header.php'); ?>
	</section>

	 <section id="body-section">
	 	
	 	<div class="main-div">
	 		<br> <h1> ADMIN | MANAGE DOCTORS</h1> <br><br>
	 		
	 		<div class="center-div">

	 			<div class="table-responsive">
	 				<table>
	 					<thead>
	 						<tr>
	 							<th>Id</th>
	 							<th>Specilization</th>
	 							<th>Doctor Name</th>
	 							<th>Address</th>
	 							<th>Email</th>
	 							<th colspan="2">Operation</th>
	 							
	 						</tr>
	 					</thead>

	 					<tbody>

	 							<?php

									require_once "../dbcon.php";
									$selectquery = "SELECT * FROM doctors";
									$query = mysqli_query($con, $selectquery);
									$num = mysqli_num_rows($query);

									while($res = mysqli_fetch_array($query)) {

								?>

									<tr>
	 							<td> <?php echo $res['id']; ?> </td>
	 							<td><?php echo $res['specilization']; ?></td>
	 							<td><?php echo $res['doctorName']; ?></td>
	 							<td><?php echo $res['address']; ?></td>
	 							<td><?php echo $res['docEmail']; ?></td>
	 							<td><i class="fa fa-edit"></i>&nbsp &nbsp &nbsp &nbsp<i class="fa fa-trash"></i></td>
	 							
	 						</tr>	

	 						<?php

	 							}
	 						?>	

								 
	 						 						
	 					</tbody>

	 				</table>	


	 			</div>
	 			
	 		</div>

	 	</div>

	 </section>


</body>
</html>
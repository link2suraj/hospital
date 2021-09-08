
<!DOCTYPE html>
<html>
<head>
    <title>Doctor Panel</title>

<style>

* {box-sizing: border-box;


  }

/* Add padding to containers */
.container {
  padding: 16px;
  width: 100%;
  margin-left: 15%;

}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
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

  <form name="register" id="register" action="#" method="POST" onSubmit="return valid();">
  <div class="container">
    <center><h1>Edit Profile</h1></center> <br>
    

    <?php
    require_once "../dbcon.php";
    // $ids = $_GET['id'];
    $ids = $_GET['id'];

    $showquery = "SELECT * FROM doctors where id=$ids";

    $showdata = mysqli_query($con, $showquery);

    $arrdata = mysqli_fetch_array($showdata);


    if(isset($_POST['update'])){

      $idupdate = $_GET['id'];


   
   
    $doctorName           = $_POST['doctorName'];
    $address            = $_POST['address'];
    $docfees               = $_POST['docfees'];
    $contactno          = $_POST['contactno'];
    $docEmail              = $_POST['docEmail'];
    

    
    $query = "UPDATE doctors set id=$ids, doctorName='$doctorName', docfees='$docfees', address='$address', docEmail='$docEmail' where id=$idupdate";  

       
    $stmtupdate = $con->query($query);
    if($stmtupdate){
        echo '<script>alert("Profile Updated Successfully")</script>';
    }else {
        echo "there were error";
    }
    }

 ?>

    <h3><?php echo $arrdata['doctorName']; ?>'s Profle</h3> <br>
    <!-- <p><span style="font-weight: bold;">Registration Date: </span><?php echo $arrdata['regDate']; ?><p> -->
    <hr>
    <label for="doctorName"><b>Full Name</b></label>
    <input type="text" placeholder="Full Name" value="<?php echo $arrdata['doctorName']; ?>" name="doctorName" id="doctorName" required>

  
    <label for="address"><b>Address</b></label>
    <input type="text" value="<?php echo $arrdata['address']; ?>" name="address" id="address" required>

    <label for="docfees"><b>Doctor Consultancy Fees</b></label>
    <input type="number" value="<?php echo $arrdata['docfees']; ?>" name="docfees" id="docfees" required>

    <label for="contactno"><b>Doctor Contact no</b></label>
    <input type="number" value="<?php echo $arrdata['contactno']; ?>" name="contactno" id="contactno" required>

    <label for="docEmail"><b>Doctor Email</b></label>
    <input type="text" value="<?php echo $arrdata['docEmail']; ?>" name="docEmail" id="docEmail" required>

  
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button name="update" type="submit" class="registerbtn">Update</button>
  </div>


</form>
   
</section>
</body>
</html>
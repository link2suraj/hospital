
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>

     <script type="text/javascript">
function valid()
{
 if(document.add.password.value!= document.add.cpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.add.cpassword.focus();
return false;
}
return true;
}
</script>

<style>
input[type=text] {
   padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  height: 42px;
  

}

input[type=number] {
   padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  height: 42px;
  }

input[type=password], select {

  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
 

}


input[type=submit] {
   background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
button{
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 15px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;

}

button:hover {
  background-color: green;
}


.doctor-form{
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 100%;
}
</style>

</head>
<body>
    <section id="s15idebar">
        <?php include('include/sidebar.php'); ?> 
    </section>      

    <section id="header"> 
         <?php include('include/header.php'); ?>
    </section>

     <section id="body-section">
        
<div class="doctor-form">

        <h2 style="text-align: center;">Add Doctor</h2> <br><br>
        <p><span style="color: red">* </span>All fields are Mandatory.</p> <br>
  <form name="update" id="update" action="" method="POST" onSubmit="return valid();">
      <?php
    require_once "../dbcon.php";

    $ids = $_GET['id'];

    $showquery = "SELECT * FROM doctors where id=$ids";

    $showdata = mysqli_query($con, $showquery);

    $arrdata = mysqli_fetch_array($showdata);


    if(isset($_POST['update'])){

      $idupdate = $_GET['id'];
   
    $specilization      = $_POST['specilization'];
    $doctorName         = $_POST['doctorName'];
    $address            = $_POST['address'];
    $docfees            = $_POST['docfees'];
    $contactno          = $_POST['contactno'];
    $docEmail           = $_POST['docEmail'];
    $password           = $_POST['password'];

    // $sql = "INSERT INTO doctors (specilization, doctorName, address, docfees, contactno, docEmail, password) VALUES('$specilization', '$doctorName', '$address', '$docfees', '$contactno', '$docEmail', '$password')";


    $query = "UPDATE doctors set id=$ids, specilization='$specilization', doctorName='$doctorName', address='$address', docfees='$docfees', contactno='$contactno', docEmail='$docEmail', password='$password' where id=$idupdate";  

       
    $stmtupdate = $con->query($query);
    if($stmtupdate){
        echo '<script>alert("Doctor Updated Successfully")</script>';
    }else {
        echo "there were error";
    }
    }
 ?>

    <label for="specilization">Doctor specilization</label>
    <select id="specilization" name="specilization" required>
  <option >Select Specialization</option>  
  <option >General Physician</option>
  <option >Cardiologist</option>
  <option >Dermatologist</option>
  <option >Gynecologist</option>
    </select>

    <label for="doctorName">Doctor Name</label>
    <input type="text" id="doctorName" name="doctorName" placeholder="Docor Name.." value="<?php echo $arrdata['doctorName']; ?>" style="width: 100%" required>

    <label for="address">Doctor Address</label>
    <input type="text" id="address" name="address" placeholder="Enter Docor Name.." style="width: 100%" value="<?php echo $arrdata['address']; ?>" required>

    <label for="docfees">Doctor Consultancy Fees</label>
    <input type="number" id="docfees" name="docfees" placeholder="Enter Doctor Consultancy Fees.." style="width: 100%" value="<?php echo $arrdata['docfees']; ?>" required>

    <label for="contactno">Doctor Contact No.</label>
    <input type="number" id="contactno" name="contactno" placeholder="Enter Doctor Contact No..." style="width: 100%" value="<?php echo $arrdata['contactno']; ?>"  required>

    <label for="docEmail">Doctor Email</label>
    <input type="text" id="docEmail" name="docEmail" placeholder="Enter Doctor Email.." style="width: 100%" value="<?php echo $arrdata['docEmail']; ?>" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="New Password.." style="width: 100%" value="<?php echo $arrdata['password']; ?>"  required>
    <!-- An element to toggle between password visibility -->
    <input type="checkbox" onclick="myFunction()">&nbsp; Show Password <br> <br>
         
    <button type="submit" name="update">Update</button>
  </form>
</div>


    </section>
 <script>
   function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

 </script>   

</body>
</html>
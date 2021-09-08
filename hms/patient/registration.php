<?php
    require_once "../dbcon.php";
    if(isset($_POST['register'])){
   
    $fullName           = $_POST['fullName'];
    $address            = $_POST['address'];
    $city               = $_POST['city'];
    $gender             = @$_POST['gender'];
    $email              = $_POST['email'];
    $password           = $_POST['password'];

    
    $sql = "INSERT INTO users (fullName, city, address, gender, email, password) VALUES('$fullName', '$city', '$address', '$gender', '$email', '$password')";
    $stmtinsert = $con->query($sql);
    if($stmtinsert){
        echo '<script>alert("Patient Registration Successfully");
        window.open("login.php", "_SELF");
        </script>';
       
    }else {
        echo '<script> alert("Email address already exists.") </script>';
    }
    }
 ?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>

     <script type="text/javascript">
function valid()
{
 if(document.register.password.value!= document.register.cpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.register.cpassword.focus();
return false;
}
return true;
}
</script>




<style>

* {box-sizing: border-box;


  }

/* Add padding to containers */
.container {
  padding: 16px;
  width: 50%;
  margin-left: 30%;

}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email]{
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

  <form name="register" id="register" action="#" method="POST" onSubmit="return valid();">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="fullName"><b>Full Name</b></label>
    <input type="text" placeholder="Full Name" name="fullName" id="fullName" required>

    <input type="radio" name="gender" value="Male"> <span style="font-weight: bold">Male</span>
    <input type="radio" name="gender" value="Female"> <span style="font-weight: bold"> Female </span><br> <br>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" id="address" required>

    <label for="city"><b>City</b></label>
    <input type="text" placeholder="Enter City Name" name="city" id="city" required>


    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="sassword" required>

    <label for="cpassword"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="cpassword" id="cPassword" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button name="register" type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>    
  </div>
</form>
   

</body>
</html>
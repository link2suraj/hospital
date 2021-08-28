<?php
  //this script will handle the login.
include("dbcon.php");
 ?>
 
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="stylel.css">
  <link rel="shortcut icon" type="image/png" href="img/icons8-login-64.png">
</head>
<body>
  <div>
  <?php

      if(isset($_POST['email'])){
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        $errmsg ="Invaid Username or Password";
        

        $sql = "SELECT * FROM regis WHERE email ='$email' AND password='$password'";

        $stmtlogin = $con->query($sql);
    if(mysqli_num_rows($stmtlogin)){
          echo "Have successfully login in";
          header("Location: index.php");
        }
        else {
         echo "Invalid username or password";
         $errmsg ="Invaid Username or Password";
          exit();
        }
        }

   
    ?>
 </div>
   <div class="form-box">
    <h2>Login Here</h2> <br>
    
         <form action="" method="POST">
        <div class="input-group">
        
        <label>Email</label>
        <input type="text" name="email" required>
        </div>
        <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" required>
        </div>
        <button name type="submit">Sign in</button>
        </form>
        <p><a href="sign-up.php"> Dont have an account. Sign up</a></p>


  </div> 

</body>
</html>
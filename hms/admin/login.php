<?php
  //this script will handle the login.
require_once "../dbcon.php";
session_start();
if(isset($_SESSION['isLoggedIn'])){
     // header("Location: index.php");
}
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

      if(isset($_POST['login'])){
        $username      = $_POST['username'];
        $password   = $_POST['password'];
        

        $sql = "SELECT * FROM admin WHERE username ='$username' AND password='$password'";
        $query = mysqli_query($con, $sql);
        if(mysqli_num_rows($query)){
          $_SESSION['isLoggedIn']=true;
          header("Location: index.php");
        }
        else {
           $errmsg ="Invaid Username or Password";
        }
    }

   
    ?>
 </div>
   <div class="form-box">
    <h2>Login Here</h2> <br>
        <p style="color: red"><?php echo @$errmsg ?>
         <form action="" method="POST">
        <div>
          <label>Username</label>
          <input type="text" name="username" required>
        </div>
        <div>
          <label>Password</label>
          <input type="password" name="password" required>
        </div>
        <button name="login" type="submit">Sign in</button>
        </form>


  </div> 

</body>
</html>
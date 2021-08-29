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
  <!-- <link rel="stylesheet" type="text/css" href="../../css/style.css"> -->
  <link rel="shortcut icon" type="image/png" href="img/icons8-login-64.png">

<style>
  /* Bordered form */
form {
/*  border: 3px solid #f1f1f1;*/
  width: 40%;
  padding: 7%;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 10px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 10px;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 15%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}

</style>


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

 <center>

  <form action="" method="post">
    <h2>Admin Login Here</h2>
        <p style="color: red"><?php echo @$errmsg ?>
  <div class="imgcontainer">
    <img src="img_avatar2.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button name="login" type="submit">Login</button>
  </div>
    <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
  </div>
</form>
</center>


 <!--    <div class="form-box">
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
 -->

</body>
</html>
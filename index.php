
<!DOCTYPE html>
<html>
<head>
  <title>Hospital Management System</title>
  <link rel="stylesheet" type="text/css" href="css/all.css">
  <link rel="shortcut icon" type="image/png" href="img/icons8-hospital-48.png">

<style>
  
*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body{
  background-image: url(img/pills.jpg);
  background-size: cover;
  /*background-position: center;*/
  font-family: sans-serif;
}
.menu-bar{
  background: rgb(0,100,0);
  text-align: center;
}
.left-menu {
  width: 25%;
  height: 10px; 
}
.left-menu h2{
  color: white;
  /*text-align: center;*/
  /*width: 120px;
  margin: 15px;*/

}
}
.right-menu{
  width: 75%;
  height: 75px;
}
.right-menu ul{
  display: inline-flex;
  list-style: none;
  color: blue;
  margin-left: 40%;
}
.right-menu ul li{
  width: 120px;
  margin: 15px;
  padding: 15px;
}
.right-menu ul li a{
  text-decoration: none;
  color: #fff;
}
.active, .right-menu ul li:hover{
  background: #2bab0d;
  border-radius: 3px;
}

</style>

</head>
<body>
<div class="menu-bar">
    <div class="left-menu"><h2>HOSPITAL MS</h2></div>
  <div class="right-menu">
      <ul>
      <li class="active"><a href="#"><i class="fas fa-clinic-medical"></i> Home</a></li>
      <li><a href="#"><i class="fas fa-hospital"></i> About Us</a></li>
      <li><a href="#"><i class="fab fa-servicestack"></i> Services</a></li>
      <li><a href="#"><i class="fas fa-phone-alt"></i> Contact</a></li>
      <li><a href="registration.php"><i class="fas fa-user-plus"></i> Register</a></li>
      <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
    </ul>
  </div>
</div>
</body>
</html>

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
  padding-top: 30px;
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

/* For Cards*/

.card-box{
  display: flex;
  flex-direction: column;
  justify-content: space;
  align-items: center;
  padding: 20px;
  width: 22%;
  margin-top: 120px;
  background-color: #063146;
  border-radius: 20px;
  color: white;
}
.card-box a{
  margin-top: 10px;
  font-size: 13px;
  text-decoration: none;
  color: white;
  padding: 8px 15px;
  border: 1px solid #fff;
  border-radius: 20px;

}
.card-box h2{
  margin-bottom: 10px;
}
.card-box i{
  margin-bottom: 10px;
}
#body-section{
  width: 100%;
 
  display: flex;
  justify-content: space-around;

}


/* For Cards*/

</style>

</head>
<body>
<div class="menu-bar">
    <div class="left-menu"><h2><i class="fas fa-hospital"></i>  HOSPITAL MS</h2></div>
  <div class="right-menu">
      <ul>
      <li class="active"><a href="#"><i class="fas fa-clinic-medical"></i> Home</a></li>
      <li><a href="#"><i class="fas fa-hospital"></i> About Us</a></li>
      <li><a href="#"><i class="fab fa-servicestack"></i> Services</a></li>
      <li><a href="#"><i class="fas fa-phone-alt"></i> Contact</a></li>
    </ul>
  </div>
</div>
  <!-- Cards -->
    <section id="body-section">
               <div class="card-box">
                <i class="far fa-user fa-3x"></i>
                <h2>Patients</h2>
                <a href="hms/patient/login.php">Register and Book Appointment</a>
              </div>  

              <div class="card-box">
                <i class="fas fa-clipboard-list fa-3x"></i>
                <h2>Doctor Login</h2>
                <a href="hms/doctor/login.php">Click Here to Login</a>
              </div>  

              <div class="card-box">
                <i class="fas fa-folder-plus fa-3x"></i>
                <h2>Admin Login</h2>
                <a href="hms/admin/login.php">Click Here to Login</a>
              </div>  
        </section>
    <!-- Cards -->

</body>
</html>
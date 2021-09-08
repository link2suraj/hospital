<?php
    require_once "../dbcon.php";
    if(isset($_POST['create'])){
    $name       =   $_POST['name'];
    $email      = $_POST['email'];
    $address   = $_POST['address'];
    $password   = $_POST['password'];
    $repassword   = $_POST['repassword'];

    
    $sql = "INSERT INTO tblpatient (name, email, address, password) VALUES('$name', '$email', '$address', '$password')";
    $stmtinsert = $con->query($sql);
    if($stmtinsert){
        echo "Successfully inserted";
    }else {
        echo "there were error";
    }
    }
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Create an account</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" type="image/png" href="img/icons8-user-engagement-male-64.png">

  <script type="text/javascript">
function valid()
{
 if(document.registration.password.value!= document.registration.repassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.registration.repassword.focus();
return false;
}
return true;
}
</script>
        

</head>
<body>

 <div class="form-box">
    <h2>Sign up</h2>
      <form name="registration" id="registration" action="" method="POST" onSubmit="return valid();">
        <div class="input-group">
        <label>Full name</label>
        <input type="text" name="name" required>
        </div>
        <div class="input-group">
         <label>Email</label>
        <input type="text" name="email" required>
        </div>
        <div class="input-group">
        <label>Address</label>
        <input type="text" name="address" required>
        <label>Password</label>
        <input type="password" name="password" required>
        </div>

        <label>Confirm Password</label>
        <input type="password" name="repassword" required>
        </div>
        <button type="submit" name="create">Sign Up</button>
        <p><a href="login.php">Already have an account. Sign in</a></p>
        </form> 


 </div> 

</body>
</html>
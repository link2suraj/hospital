<!-- <?php
    // require_once('dbcon.php');
    // if(isset($_POST['create'])){
    // $doctorSpecialization        = $_POST['doctorSpecialization'];
    // $doctorId                    = $_POST['doctorId'];
    // $userid                      = $_POST['userid'];
    // $consultancyFees             = $_POST['consultancyFees'];
    // $appointmentDate             = $_POST['appointmentDate'];
    // $appointmentTime             = $_POST['appointmentTime'];
    // $userStatus                  = 1;
    // $doctorStatus                = 1;

    
    // $sql = "INSERT INTO regis (doctorSpecialization, doctorId, userid, consultancyFees, appointmentDate, appointmentTime, userStatus, doctorStatus) VALUES('$doctorSpecialization', '$doctorId', '$userid', '$consultancyFees', $appointmentDate, $appointmentTime, $userStatus, $doctorStatu)";
    // $stmtinsert = $con->query($sql);
    // if($stmtinsert){
    //     echo "Successfully inserted";
    // }else {
    //     echo "there were error";
    
 ?> -->

<!DOCTYPE html>
<html>
<head>
  <title>Book Appointment</title>
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/all.css">
  <link rel="shortcut icon" type="image/png" href="img/icons8-user-engagement-male-64.png">
    

</head>
<body>

 <div class="form-box">
    <h2>Book Appointment</h2>
      <form name="book" id="book" action="" method="POST" >
        <div class="input-group">
        <label for="doctorSpecialization">Doctor Speciialization</label>
        <input type="text" name="doctorSpecialization" required>
        </div>
        <div class="input-group">
         <label for="doctorId ">Doctors</label>
        <input type="text" name="doctorId" required>
        </div>
        <div class="input-group">
        <label for="consultancyFees">Consultancy Fees</label>
        <input type="text" name="consultancyFees" required>
        </div>
        <div class="input-group">
        <label for="appointmentDate" >Date</label>
        <input type="appointmentDate" name="appointmentDate" required>
        </div>
        <div class="input-group">
        <label>Confirm Password</label>
        <input type="password" name="repassword" required>
        </div>
        <button type="submit" name="create">Sign Up</button>
        <p><a href="login.php">Already have an account. Sign in</a></p>
        </form> 


 </div> 

</body>
</html>
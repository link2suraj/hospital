


<?php

session_start();

    require_once "../dbcon.php";
    if(isset($_POST['submit'])){
   
    $specilization     = $_POST['Doctorspecialization'];
    $doctorid         = $_POST['doctor'];
    $userid           = $_SESSION['id'];
    $fees            = $_POST['fees'];
    $appdate          = $_POST['appdate'];
    $apptime           = $_POST['apptime'];
    
    
    $sql = "INSERT INTO appointment (doctorSpecialization, userId, doctorId, consultancyFees, appointmentDate, appointmentTime) VALUES('$specilization', '$doctorid', '$userid', '$fees', '$appdate', '$apptime')";
    $stmtinsert = $con->query($sql);
    if($stmtinsert){
        echo '<script>alert("Doctors Added Successfully")</script>';
    }else {
        echo "there were error";
    }
    }
 ?>


<!DOCTYPE html>
<html>
<head>
    <title>User  | Book Appointment</title>

    

   <script>
function getdoctor(val) {
    $.ajax({
    type: "POST",
    url: "get_doctor.php",
    data:'specilizationid='+val,
    success: function(data){
        $("#doctor").html(data);
    }
    });
}
</script>   
<script>
function getfee(val) {
  $.ajax({
  type: "POST",
  url: "get_doctor.php",
  data:'doctor='+val,
  success: function(data){
    $("#fees").html(data);
  }
  });
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
input[type=date], [type=time]  {
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

        <h2 style="text-align: center;">Book Appointment</h2> <br><br>
        <p><span style="color: red">* </span>All fields are Mandatory.</p> <br>
        <hr> <br> <br>
  <form name="add" id="add" action="#" method="POST" onSubmit="return valid();">
    

    <label for="Doctorspecialization">Doctor Specialization</label>
    <select name="Doctorspecialization"  onChange="getdoctor(this.value);" required="true">
            <option value="">Select Specialization</option>
            <?php $ret=mysqli_query($con,"select * from doctorspecilization");
            while($row=mysqli_fetch_array($ret))
            {
            ?>
            <option value="<?php echo $row['specilization'];?>">
            <?php echo htmlentities($row['specilization']);?>
            </option>
            <?php } ?>                                                                
            </select>

    <label for="doctor">Doctors</label>
    <select name="doctor" id="doctor" onChange="getfee(this.value);" required="required">
                        <option value="">Select Doctor</option>
                        </select>
                                                     
    
                              <label for="consultancyfees">
                                Consultancy Fees
                              </label>
          <select name="fees" class="form-control" id="fees"  readonly> </select>
          <BR>

    <label for="AppointmentDate">Date</label> <BR>
    <input name="appdate" type="date" 
        placeholder="dd-mm-yyyy" value=""
        min="2021-09-07" max="2030-12-31"> 

<BR>
    <label for="AppointmentTime">Time</label><BR>
    <input name="apptime" type="time" id="appt"
       min="09:00" max="18:00" required> <br>eg : 10:00 <Br>
       <BR>

     
    <button type="submit" name="submit">Submit</button>
  </form>
</div>


    </section>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

</body>
</html>
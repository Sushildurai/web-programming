<!-- book appointment page. which authenticates the previous login page -->


<!DOCTYPE html>
<html>
<head>
<title>Book Appointment</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://localhost/Heart_Hospital/sub_dir/style.css">
<script type="text/javascript" src="http://localhost/Heart_Hospital/sub_dir/appointment_validation.js"></script>

</head>
<body>

<div class="header">
  <h1 align="middle"><img src="https://dejpknyizje2n.cloudfront.net/svgcustom/clipart/preview/clipart-11644-26958-300x300.png" align="left" style="height: 130px;width: 160px">LifeLine Hospital </h1>
  <p>Saving lives since 1973</p>
</div>

<div class="navbar" >
  <a href="http://localhost/Heart_Hospital/home_page.html" >Home</a>
  <a href="#">About Us</a>
  <a href="http://localhost/Heart_Hospital/sub_dir/login_page.html" class="right">Login</a>
</div>



  

  <div class="main" align="center">
    <h2>
      Book an Appointment
    </h2>

    </form>
    <p style="font-size: 18px"> <b>Please fill the form below for booking appointments</b> </p>
    <div class="container">
    <form id ="form" name="form" action="http://localhost/Heart_Hospital/sub_dir/insert.php" method='post' onsubmit="return validateForm()">

  <label for="name" style="font-size: 18px"><b>Name:</b></label>
  <input type="text" id="name" name="name"><br>
  <p></p>

  <label for="email" style="font-size: 18px"><b>Email Id:</b></label>
  <input type="text" id="email" name="email"><br>
  <p></p>

  <label for="phone" style="font-size: 18px"><b>Contact:</b></label>
  <input type="number" id="phone" name="phone" required="number">
  <p></p>

<label for="dept" style="font-size: 18px"><b>Department</b></label>
  <input list="dept" name="dept">
  <datalist id="dept">
    <option value="Cardiology Department" style="font-size: 17px"></option>
    <option value="Cardiothoracic & Vascular Surgery (CTVS)" style="font-size: 17px"></option>
    <option value="Endocrinology & Metabolism" style="font-size: 17px"></option>
    <option value="Central Sterile Supply Department (CSSD)" style="font-size: 17px"></option>
  </datalist>
<p>
</p>
  <label for="City" style="font-size: 18px"><b> LifeLine Branch</b></label>
  <input list="City" name="City">
  <datalist id="City">
    <option value="Delhi" style="font-size: 17px"></option>
    <option value="Chennai" style="font-size: 17px"></option>
    <option value="Mumbai" style="font-size: 17px"></option>
  </datalist>
<p></p>

  <label for="dates" style="font-size: 20px"><b>Appointment Date:</b></label>
  <input type="date" id="dates" name="dates">

  <p></p>
  
  <input id ="click_submit" type="submit"  value="Book Appointment" style="font-size: 17px">

  <!-- PHP login connection  -->
<?php  
 require('db_connect.php');

if (isset($_POST['email']) and isset($_POST['pwd'])){
	
$username = $_POST['email'];
$password = $_POST['pwd'];

$query = "SELECT * FROM `user_login` WHERE username='$username' and password='$password'";
$result = mysqli_query($connection, $query);
$count = mysqli_num_rows($result);

if ($count == 1){

echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
}

else
{
  echo "<script type='text/javascript'>alert('Invalid Login Credentials') </script>";
  header("Location: http://localhost/Heart_Hospital/sub_dir/login_page.html");
}
}
?>
  <!-- End of PHP login connection -->
  

</form>
    
  </div>
</div>

<div class="footer">
  <h2>© 2020 LifeLine Hospital. All Rights Reserved.</h2>
</div>

</body>
</html>


<!-- inserting new user credentials to database -->
<!DOCTYPE html>
<html>
<head>
<title>LifeLine Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://localhost/Heart_Hospital/sub_dir/style.css">

</head>

<!-- PHP script insert into new_user table -->

<?php
 
// Create connection
$conn = new mysqli('127.0.0.1:3308','root','');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "New User Successfully created";
 
mysqli_select_db($conn,"login_sample");
 
// echo "\n";
 
 
 
$sql="INSERT INTO new_user (username,email,password,password2) VALUES ('$_POST[username]','$_POST[email]','$_POST[password]','$_POST[password2]')";


 $sql2="INSERT INTO user_login(username,Password) VALUES ('$_POST[username]','$_POST[password]')";


if ($conn->query($sql) === TRUE and $conn->query($sql2)==TRUE) 
{
  echo "<script type='text/javascript'>alert('New User Created and updated')</script>";

}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($conn);
?>

<!-- end of PHP script -->

<body>

<div class="header">
  <h1 align="middle"><img src="https://dejpknyizje2n.cloudfront.net/svgcustom/clipart/preview/clipart-11644-26958-300x300.png" align="left" style="height: 130px;width: 160px">LifeLine Hospital </h1>
  <p>Saving lives since 1973</p>
</div>

<div class="navbar" >
  <a href="http://localhost/Heart_Hospital/home_page.html" >Home</a>
  <a href="http://localhost/Heart_Hospital/sub_dir/about_us_page.html">About Us</a>
  <a href="http://localhost/Heart_Hospital/sub_dir/book_apointment_page.html">Book Apointment</a>
  
</div>


  
  <div class="main" align="center">
    <h2>
      Login Page
    </h2>

    <p><b> For checking Appointments and for LifeLine's Heart Disease Detector, please login </b></p>
<div>
    <p> New Users, Kindly create an account.</p>
    <button class="button"> <a href="http://localhost/Heart_Hospital/sub_dir/create_account_page.html"><h3><b>Create Account</b></h3></a></button>
</div>    

<p>
  </p>
      <form id ="form_1" action="http://localhost/Heart_Hospital/sub_dir/authen_login.php" method='post'>
  <p> <b> Existing User, Please Login</b> </p>
  <label for="email" style="font-size: 18px"> <b>Email: </b></label>
  <input type="text" id="email" name="email">
  <p></p>
  <label for="pwd" style="font-size: 18px"><b> Password: </b></label>
  <input type="password" id="pwd" name="pwd" minlength="8">
  <p></p>
  <input id ="click_submit" type="Submit" value="Sign In" style="font-size: 17px">
    <p></p> 

  </form>

  </div>
</div>

<div class="footer">
  <h2>© 2020 LifeLine Hospital. All Rights Reserved.</h2>
</div>

</body>
</html>


<!-- Booking appointment page with DBMS connected -->
<!DOCTYPE html>
<html>
<head>
<title>Heart Disease Detector</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://localhost/Heart_Hospital/sub_dir/style.css">

</head>


<?php
 
// Create connection
$conn = new mysqli('127.0.0.1:3308','root','');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "DB Connected successfully";
 
// this will select the Database sample_db
mysqli_select_db($conn,"login_sample");
 
echo "\n DB is updated successfully";
 
// create INSERT query
 
 
$sql="INSERT INTO sample_table (name,email,phone,dept,City,dates) VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[dept]','$_POST[City]','$_POST[dates]')";

if ($conn->query($sql) === TRUE) 
{
  echo "<script type='text/javascript'>alert('Appointment Booked Successfully!')</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($conn);
?>

<body>

<div class="header">
  <h1 align="middle"><img src="https://dejpknyizje2n.cloudfront.net/svgcustom/clipart/preview/clipart-11644-26958-300x300.png" align="left" style="height: 130px;width: 160px">LifeLine Hospital </h1>
  <p>Saving lives since 1973</p>
</div>

<div class="navbar" >
  <a href="http://localhost/Heart_Hospital/home_page.html" >Home</a>
  <a href="http://localhost/Heart_Hospital/sub_dir/about_us.html">About Us</a>
  <a href="http://localhost/Heart_Hospital/sub_dir/book_apointment_page.html">Book Apointment</a>
  <a href="http://localhost/Heart_Hospital/sub_dir/login_page.html" class="right">Login</a>
</div>



  <div class="main" align="center">
    <h2>
      Appointment booked!
    </h2>

    <body>
      <button type="button" onclick="loadXMLDoc()">Get Heart Info</button>
<br><br>
<p id="textbox"></p>
<table id="demo"></table>

<script>
function loadXMLDoc() {
  var xhttp;
  if (window.XMLHttpRequest) {
    xhttp = new XMLHttpRequest();
  } 
  else {
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xhttp.open("GET", "kaggle_heart.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Name</th>  <th>Data Entry</th></tr>";
  var x = xmlDoc.getElementsByTagName("data");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("entry")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>
</body>
    <p>
      would you like to check if you have heart disease?
    </p>
    <a href="https://heart-disease-detector.herokuapp.com" > <button type="button" ><h2>Yes </h2></button>
    </a>

    <a href="http://localhost/Heart_Hospital/home_page.html" > <button type="button" ><h2>No </h2></button>
    </a>
  </div>

<div class="footer">
  <h2>© 2020 LifeLine Hospital. All Rights Reserved.</h2>
</div>

</body>

</html>
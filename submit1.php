<?php 
include("Connection.php");
if (isset($_POST['Back'])) {
 header("location: page1.php");
}
if (isset($_POST['Save'])) {
  $Name = $_POST["name"];
  $Surname = $_POST['surname'];
  $Contact = $_POST['contact'];
  $Attending = $_POST['attending'];
  $sql = ("UPDATE service1 SET Name = '$Name',Surname = '$Surname',Contact = '$Contact',Attending = '$Attending' WHERE SeatID='" . $_GET["id"] . "'");
  $results = mysqli_query($con,$sql);

 if ($results) {
   header("location: page1.php");

 }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Raising Hope Ministries Service 1</title>
<link href="Css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.google.com/specimen/Montserrat"type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
</head> 
<body>
<div class="Content1">
<div id="topnav">
<div class="topnav" id="myTopnav">
  <div><a href="https://www.raisinghopeministries.co.za" class="active" style="padding-top:30px;padding-bottom:30px;padding-left:20%;font-size: 10px;">RHM</a></div>
  <div style="float: right;padding-right: 10%;">
  <a href="#church" style="font-size: 10px;padding-top:30px;padding-bottom:30px;color: black;">Home</a>
  <a href="#services" style="font-size: 10px;padding-top:30px;padding-bottom:30px;color: black;">Services</a>
  <a href="https://raisinghopeministries.co.za/about/" style="font-size: 10px;padding-top:30px;padding-bottom:30px;color: black;">About Us</a>
  <a href="#services" style="font-size: 10px;padding-top:30px;padding-bottom:30px;color: black;">Leadership</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
    <i class="fa fa-bars"></i>
    </div>
  </a>
</div>
</div>
<div class="services" id="services" style="margin-top:100px;">
	<center>
  <section class="submit" style="padding-top: 150px;padding-bottom: 150px;">
  	<?php
  	 echo '<div><h3>Fill in :</h3>
 <br>
 <br>
';
$sql1 = ("SELECT * FROM service1 WHERE SeatID='" . $_GET["id"] . "'");
$result = $con->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row}
 while($row = $result->fetch_assoc()) {
$name =$row['Name'];
$surname =$row['Surname'];
$contact =$row['Contact'];
$attending =$row['Attending'];
echo '
<i class="fa fa-user" style="font-size:40px;"></i>
<br>
<br>
<form action="" method="post" enctype="multipart/form-data" >
Name : <input type="text" name="name" value="'.$name.'" style="width:auto; color:#524719;">
    <br>
Surname : <input type="text" name="surname" value="'.$surname.'" style="width:auto; color:#524719;">
    <br>
Contact : <input type="text" name="contact" value="'.$contact.'" style="width:auto; color:#524719;">
    <br>
Attending : <select id ="attending" name="attending">
            <option value ="NO">NO</option>
            <option value ="YES">YES</option>
            </select>
    <br>
    <br>
  <input style="color: black;" type="submit" name="Back" value="Back">
  <input style="color: black;" type="submit" name="Save" value="Save">
</form>
';
}
}
?>
</section>
</center>
</div>
</div>
<hr style="width: 90%;border: none;">
<section id="footer" style="text-align: center;">
	<div style="font-size: 35px;padding-top: 100px;color: white;"><b>R H M</b></div>
	<br>
	<div style="font-size: 10px;">
		<p>XXXXXXXXXXXXXXX XXXXXXXXXXXX XXXXXXXXXXXXXX</p>
		<p>XXXXXXXXXXXXXXX XXXXXXXXXXXX XXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXX</p>
		<p>XXXXXXXXXXXXXXX XXXXXXXXXXXX XXXXXXXXXXXXXX</p>
	</div>
	<br>
	<div style="float: left;width: 40%;color: white;text-align: right;">
		<i class="fa fa-envelope" > </i><div style="font-size: 12px;display: inline;"> &nbsp ADMIN@RAISINGHOPEMINISTRIES.CO.ZA</div>
	</div>
	<div style="float: right;width: 40%;color: white;text-align: left;">
		<i class="fa fa-map-marker"></i><div style="font-size: 12px;display: inline;"> &nbsp 1 HEADLAND AVENUE SILVERGLEN CHATSWORTH</div>
	</div>
	<br><br>
	<div style="font-size: 12px;color: white">
		<i class="fa fa-copyright"></i><div style="font-size: 12px;display: inline;"> &nbsp 2020 RHM</div>
	</div>
	<br><br>
	<div style="color: white">
		<i class="fa fa-facebook"> &nbsp </i><i class="fa fa-twitter"></i> &nbsp <i class="fa fa-instagram"></i> &nbsp <i class="fa fa-google-plus"></i>
		 &nbsp <i class="fa fa-linkedin"></i> &nbsp <i class="fa fa-youtube-play"></i>
	</div>
	
</section>
<hr style="width: 90%;">
<br>
<center>
	<a href="login.php" style="text-decoration: none;">onegig</a>
	<br>
</center>
<br>
</div>
<script>
window.onscroll = function() {myFunction()};

var topnav = document.getElementById("topnav");
var sticky = topnav.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    topnav.classList.add("sticky")
  } else {
    topnav.classList.remove("sticky");
  }
}
</script>
<script>
function myFunction1() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</body>
<script src="java/jquery-1.11.0.js"></script>
<script src="java/effects.js"></script>
</html>
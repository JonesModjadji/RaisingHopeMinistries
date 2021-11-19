<?php 
include("Connection.php");
	$sql1 = ("SELECT * FROM misc");
$result = $con->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row}
 while($row = $result->fetch_assoc()) {
$Date1 =$row['Date1'];
$Date2 =$row['Date2'];
$Date3 =$row['Date3'];
$Service1 =$row['Service1'];
$Service2 =$row['Service2'];
$Service3 =$row['Service3'];
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
<title>Raising Hope Ministries</title>
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
<section class="parallax"></section>
<div class="services" id="services">
<?php
$sql1 = ("SELECT * FROM Misc WHERE Service2 ='Yes'");
$result = $con->query($sql1);
if ($result->num_rows > 0) {
?>
  <section class="left" id="border">
  	<center>
		<div>
<h1>Sunday Morning Service</h1>
<p><?php  echo $Date2;?></p>
  		<p>Reserve A Seat</p>
  		<?php
  		$sql1 = ("SELECT * FROM service2 WHERE Attending LIKE '%NO%' LIMIT 1");
$result = $con->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row}
 while($row = $result->fetch_assoc()) {
$id1 =$row['SeatID'];
$rows1 = mysqli_num_rows($result);
echo '
<center><a href="submit2.php?id='.$id1.'"><i class="fa fa-user" style="font-size:40px;"></i></a></center>
';
}
}
else
 {
   echo "No Seats Available";
   
 }
  		?>
  	</div>
  	<?php
  	 echo '<div>
  	 <h1>Sunday Morning Seats</h1>
 <br>
 <br>
';
  $sql3 = ("SELECT * FROM service2 WHERE Attending LIKE '%NO%'");
$result = $con->query($sql3);
if ($result->num_rows > 0) {
    // output data of each row}
 while($row = $result->fetch_assoc()) {
$id2 =$row['SeatID'];
$rows2 = mysqli_num_rows($result);
echo '
<i class="fa fa-user" style="font-size:40px;"></i>
';
}
 $sql4= ("SELECT * FROM service2 WHERE Attending LIKE '%YES%' ");
$result = $con->query($sql4);
if ($result->num_rows > 0) {
    // output data of each row}
 while($row = $result->fetch_assoc()) {
 	$id2 =$row['SeatID'];
echo '
<i class="fa fa-user" style="font-size:40px;color:grey;"></i>
';
}
}
echo ' <h3>Available Seats</h3>
<br>
<div>'.$rows2.'</div>';
}
?>
</center>
</section>
<?php
}
?>
<?php
$sql1 = ("SELECT * FROM Misc WHERE Service1 ='Yes'");
$result = $con->query($sql1);
if ($result->num_rows > 0) {
?>
<section class="right" id="border">
<center>
  		<div>
  			<h1>Tuesday Service</h1>
  			<p><?php  echo $Date1;?></p>
  		<p>Reserve A Seat</p>
  		<?php
  		$sql1 = ("SELECT * FROM service1 WHERE Attending LIKE '%NO%' LIMIT 1");
$result = $con->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row}
 while($row = $result->fetch_assoc()) {
$id1 =$row['SeatID'];
$rows1 = mysqli_num_rows($result);
echo '
<center><a href="submit1.php?id='.$id1.'"><i class="fa fa-user" style="font-size:40px;"></i></a></center>
';
}
}
else
 {
   echo "No Seats Available";
   
 }
  		?>
  	</div>
  	<?php
  	 echo '<div>
  	 <h1>Midweek Seats</h1>
 <br>
 <br>
';
  $sql1 = ("SELECT * FROM service1 WHERE Attending LIKE '%NO%'");
$result = $con->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row}
 while($row = $result->fetch_assoc()) {
$id1 =$row['SeatID'];
$rows1 = mysqli_num_rows($result);
echo '
<i class="fa fa-user" style="font-size:40px;"></i>
';
}
 $sql2 = ("SELECT * FROM service1 WHERE Attending LIKE '%YES%' ");
$result = $con->query($sql2);
if ($result->num_rows > 0) {
    // output data of each row}
 while($row = $result->fetch_assoc()) {
echo '
<i class="fa fa-user" style="font-size:40px;color:grey;"></i>
';
}
}
echo '<h3>Available Seats</h3>
<br>
<div>'.$rows1.'</div>';
}
?>
</center>	
</section>
<?php
}
?>
<?php
$sql1 = ("SELECT * FROM Misc WHERE Service3 ='Yes'");
$result = $con->query($sql1);
if ($result->num_rows > 0) {
?>
 <section class="left" id="border" >
  	<center>
  		<div>
  			<h1>Thursday Service</h1>
  			<p><?php  echo $Date2;?></p>
  		<p>Reserve A Seat</p>
  		<?php
  		$sql1 = ("SELECT * FROM service3 WHERE Attending LIKE '%NO%' LIMIT 1");
$result = $con->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row}
 while($row = $result->fetch_assoc()) {
$id1 =$row['SeatID'];
$rows1 = mysqli_num_rows($result);
echo '
<center><a href="submit3.php?id='.$id1.'"><i class="fa fa-user" style="font-size:40px;"></i></a></center>
';
}
}
else
 {
   echo "No Seats Available";
   
 }
  		?>
  	</div>
  	<?php
  	 echo '<div>
  	 <h1>Midweek Seats</h1>
 <br>
 <br>
';
  $sql1 = ("SELECT * FROM service3 WHERE Attending LIKE '%NO%'");
$result = $con->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row}
 while($row = $result->fetch_assoc()) {
$id1 =$row['SeatID'];
$rows1 = mysqli_num_rows($result);
echo '
<i class="fa fa-user" style="font-size:40px;"></i>
';
}
 $sql2 = ("SELECT * FROM service3 WHERE Attending LIKE '%YES%' ");
$result = $con->query($sql2);
if ($result->num_rows > 0) {
    // output data of each row}
 while($row = $result->fetch_assoc()) {
echo '
<i class="fa fa-user" style="font-size:40px;color:grey;"></i>
';
}
}
echo '<h3>Available Seats</h3>
<br>
<div>'.$rows1.'</div>';
}
?>
</center>
</section>
<?php
}
?>
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
	<div style="float: left;width: 40%;color: white;text-align: right;" id="small1">
		<i class="fa fa-envelope" > </i><div style="font-size: 12px;display: inline;"> &nbsp ADMIN@RAISINGHOPEMINISTRIES.CO.ZA</div>
	</div>
	<div style="float: right;width: 40%;color: white;text-align: left;" id="small2">
		<i class="fa fa-map-marker"></i><div style="font-size: 12px;display: inline;"> &nbsp 1 HEADLAND AVENUE SILVERGLEN CHATSWORTH</div>
	</div>
	<br><br>
	<div style="font-size: 12px;color: white" id="small3">
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
<script>
function Hide() {
  var x = document.getElementById("Hide");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function HideThis() {
  var x = document.getElementById("HideThis");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
</body>
<script src="java/jquery-1.11.0.js"></script>
<script src="java/effects.js"></script>
</html>
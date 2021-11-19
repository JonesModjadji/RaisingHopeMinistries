<?php 
include("Connection.php");
if (isset($_POST['Back'])) {
 header("location: page1.php");
}
if (isset($_POST['Clear1'])) {
  $Name = "";
  $Surname = "";
  $Contact = "";
  $Attending = "NO";
  $sql = ("UPDATE service1 SET Name = '$Name',Surname = '$Surname',Contact = '$Contact',Attending = '$Attending'");
  $results = mysqli_query($con,$sql);
}
if (isset($_POST['Clear2'])) {
  $Name = "";
  $Surname = "";
  $Contact = "";
  $Attending = "NO";
  $sql = ("UPDATE service2 SET Name = '$Name',Surname = '$Surname',Contact = '$Contact',Attending = '$Attending'");
  $results = mysqli_query($con,$sql);
}
if (isset($_POST['Clear3'])) {
  $Name = "";
  $Surname = "";
  $Contact = "";
  $Attending = "NO";
  $sql = ("UPDATE service3 SET Name = '$Name',Surname = '$Surname',Contact = '$Contact',Attending = '$Attending'");
  $results = mysqli_query($con,$sql);
}
if (isset($_POST['Clear4'])) {
  $ID=$_POST["Clear4"];
  $Name = "";
  $Surname = "";
  $Contact = "";
  $Attending = "NO";
  $sql = ("UPDATE service1 SET Name = '$Name',Surname = '$Surname',Contact = '$Contact',Attending = '$Attending' WHERE SeatID='$ID'");
  $results = mysqli_query($con,$sql);
}
if (isset($_POST['Clear5'])) {
  $ID=$_POST["Clear5"];
  $Name = "";
  $Surname = "";
  $Contact = "";
  $Attending = "NO";
  $sql = ("UPDATE service2 SET Name = '$Name',Surname = '$Surname',Contact = '$Contact',Attending = '$Attending' WHERE SeatID='$ID'");
  $results = mysqli_query($con,$sql);
}
if (isset($_POST['Clear6'])) {
  $ID=$_POST["Clear6"];
  $NAME = $_POST["name0"];
  $SURNAME = $_POST["surname0"];
  $CONTACT = $_POST["contact0"];
  $Name = "";
  $Surname = "";
  $Contact = "";
  $Attending = "NO";
  $sql = ("UPDATE service3 SET Name = '$Name',Surname = '$Surname',Contact = '$Contact',Attending = '$Attending' WHERE SeatID='$ID'");
  $results = mysqli_query($con,$sql);
}
if (isset($_POST['Misc1'])) {
  $Date1 = $_POST["Date1"];
  $Service1 = $_POST["Service1"];
  $sql = ("UPDATE misc SET Date1 = '$Date1',Service1 = '$Service1'");
  $results = mysqli_query($con,$sql);
}
if (isset($_POST['Misc2'])) {
  $Date2 = $_POST["Date2"];
  $Service2 = $_POST["Service2"];
  $sql = ("UPDATE misc SET Date2 = '$Date2',Service2 = '$Service2'");
  $results = mysqli_query($con,$sql);
}
if (isset($_POST['Misc3'])) {
  $Date3 = $_POST["Date3"];
  $Service3 = $_POST["Service3"];
  $sql = ("UPDATE misc SET Date3 = '$Date3',Service3 = '$Service3'");
  $results = mysqli_query($con,$sql);
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
<title>Raising Hope Ministries Admin</title>
<script type="text/javascript">
  function swapCss1() {
    document.getElementById('printCss1').href = 'Css/print1.css';
}
  function swapCss2() {
    document.getElementById('printCss2').href = 'Css/print2.css';
}

function pri(){
  window.print();
}
</script>
<link href="Css/style.css" rel="stylesheet" type="text/css">
<link href="Css/print1.css" rel="stylesheet" type="text/css" id="printCss1" media="print">
<link href="Css/print2.css" rel="stylesheet" type="text/css" id="printCss2" media="print">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
<div class="Misc" id="Misc" style="margin-top: 100px;">
    <center>
    <?php
     echo '<div>
     <h1>Tuesday Service Date</h1>
 <br>
 <br>
';
  $sql1 = ("SELECT * FROM misc");
$result = $con->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row}
 while($row = $result->fetch_assoc()) {
$Date1 =$row['Date1'];
$Service1 =$row['Service1'];
$rows3 = mysqli_num_rows($result);
echo '
<form action="" method="post" enctype="multipart/form-data">
<input style="color: black;" type="date" name="Date1" id="Date1" value="'.$Date1.'"><br><br>
Display Service 1 <br><br>
<select id ="Service1" name="Service1">
            <option value ="'.$Service1.'">'.$Service1.'</option>
            <option value ="NO">NO</option>
            <option value ="YES">YES</option>
            </select>
';
}
}
?>
<br>
<br>
<input style="color: black;" type="submit" name="Misc1" value="Save">
</form>
</center>
</div>
<div class="services" id="services">
  <br><br><br><br>
  <section id="border2" class="print1">
    <center>
    <?php
     echo '<div>
     <h1>Tuesday Service</h1>
 <br>
 <br>
 <table border="1" style="width:80%;font-size:14px;">
 <th>Seat</th>
<th>Name</th>
<th>Surname</th>
<th>Contacts</th>
<th>Attennding</th>

';
  $sql1 = ("SELECT * FROM service1");
$result = $con->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row}
 while($row = mysqli_fetch_array($result)) {
$id3 =$row['SeatID'];
$name =$row['Name'];
$surname =$row['Surname'];
$contact =$row['Contact'];
$attending=$row['Attending'];
$rows3 = mysqli_num_rows($result);
$formId = $id3; 
echo '
<form action="" method="post" enctype="multipart/form-data" id="<?php echo $formId;?>">
<tr>
<td><input type="text" name="id[]" value="'.$row['SeatID'].'" style="border:none;width:100%;" readonly></label></td>
<td><label name="name" value="'.$name.'">'.$name.'</label></td>
<td><label name="surname" value="'.$surname.'">'.$surname.'</label></td>
<td><label name="contact" value="'.$contact.'">'.$contact.'</label></td>
<td><label name="attending" value="'.$attending.'">'.$attending.'</label><button style="color: black;float:right;" type="submit" name="Clear4" value="'.$row['SeatID'].'">Clear</button></td>
</tr>
';
}
}
?>
</table>
<br>
<br>
<input style="color: black;" type="submit" name="Back" value="Back">
<input style="color: black;" type="button" value="Print" onclick="swapCss2();pri();"/>
<input style="color: black;" type="submit" name="Clear1" value="Clear">
</form>
</center>
</section>
<div class="Misc" id="Misc">
    <center>
    <?php
     echo '<div>
     <h1>Sunday Service Date</h1>
 <br>
 <br>
';
  $sql1 = ("SELECT * FROM misc");
$result = $con->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row}
 while($row = $result->fetch_assoc()) {
$Date2 =$row['Date2'];
$Service2 =$row['Service2'];
$rows3 = mysqli_num_rows($result);
echo '
<form action="" method="post" enctype="multipart/form-data">
<input style="color: black;" type="date" name="Date2" id="Date2" value="'.$Date2.'"><br><br>
Display Service 2 <br><br>
<select id ="Service2" name="Service2">
            <option value ="'.$Service2.'">'.$Service2.'</option>
            <option value ="NO">NO</option>
            <option value ="YES">YES</option>
            </select>
';
}
}
?>
<br>
<br>
<input style="color: black;" type="submit" name="Misc2" value="Save">
</form>
</center>
</div>
<section id="border2" class="print2">
  <center>
    <?php
     echo '<div>
     <h1>Sunday Service</h1>
 <br>
 <br>
 <table border="1" style="width:80%;font-size:14px;">
 <th>Seat</th>
<th>Name</th>
<th>Surname</th>
<th>Contacts</th>
<th>Attennding</th>
';
  $sql1 = ("SELECT * FROM service2");
$result = $con->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row}
 while($row = $result->fetch_assoc()) {
$id4 =$row['SeatID'];
$name =$row['Name'];
$surname =$row['Surname'];
$contact =$row['Contact'];
$attending=$row['Attending'];
$rows3 = mysqli_num_rows($result);
echo '
<form action="" method="post" enctype="multipart/form-data">

<tr>
<td><input type="text" name="id[]" value="'.$row['SeatID'].'" style="border:none;width:100%;" readonly></label></td>
<td><label name="name" value="'.$name.'">'.$name.'</label></td>
<td><label name="surname" value="'.$surname.'">'.$surname.'</label></td>
<td><label name="contact" value="'.$contact.'">'.$contact.'</label></td>
<td><label name="attending" value="'.$attending.'">'.$attending.'</label><button style="color: black;float:right;" type="submit" name="Clear5" value="'.$row['SeatID'].'">Clear</button></td>
</tr>
';
}
}
?>
</table>
<br>
<br>
<input style="color: black;" type="submit" name="Back" value="Back">
<input style="color: black;" type="button" value="Print" name="Send" onclick="swapCss1();pri();"/>
<input style="color: black;" type="submit" name="Clear2" value="Clear">
</form>
</center>
 <center>
    <?php
     echo '<div>
     <h1>Thursday Service Date</h1>
 <br>
 <br>
';
  $sql1 = ("SELECT * FROM misc");
$result = $con->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row}
 while($row = $result->fetch_assoc()) {
$Date3 =$row['Date3'];
$Service3 =$row['Service3'];
$rows3 = mysqli_num_rows($result);
echo '
<form action="" method="post" enctype="multipart/form-data">
<input style="color: black;" type="date" name="Date3" id="Date3" value="'.$Date3.'"><br><br>
Display Service 3 <br><br>
<select id ="Service1" name="Service3">
            <option value ="'.$Service3.'">'.$Service3.'</option>
            <option value ="NO">NO</option>
            <option value ="YES">YES</option>
            </select>
';
}
}
?>
<br>
<br>
<input style="color: black;" type="submit" name="Misc3" value="Save">
</form>
</center>
<center>
    <?php
     echo '<div>
     <h1>Thursday Service</h1>
 <br>
 <br>
 <table border="1" style="width:80%;font-size:14px;">
 <th>Seat</th>
<th>Name</th>
<th>Surname</th>
<th>Contacts</th>
<th>Attennding</th>
';
  $sql1 = ("SELECT * FROM service3");
$result = $con->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row}
 while($row = $result->fetch_assoc()) {
$id4 =$row['SeatID'];
$name =$row['Name'];
$surname =$row['Surname'];
$contact =$row['Contact'];
$attending=$row['Attending'];
$rows3 = mysqli_num_rows($result);
echo '
<form action="" method="post" enctype="multipart/form-data">

<tr>
<td><input type="text" name="id[]" value="'.$row['SeatID'].'" style="border:none;width:100%;" readonly></label></td>
<td><label name="name" value="'.$name.'">'.$name.'</label></td>
<td><label name="surname" value="'.$surname.'">'.$surname.'</label></td>
<td><label name="contact" value="'.$contact.'">'.$contact.'</label></td>
<td><label name="attending" value="'.$attending.'">'.$attending.'</label><button style="color: black;float:right;" type="submit" name="Clear6" value="'.$row['SeatID'].'">Clear</button></td>
</tr>
';
}
}
?>
</table>
<br>
<br>
<input style="color: black;" type="submit" name="Back" value="Back">
<input style="color: black;" type="button" value="Print" name="Send" onclick="swapCss1();pri();"/>
<input style="color: black;" type="submit" name="Clear3" value="Clear">
</form>
</center>
</section>
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
<script>
  function printPageArea(){
    var printContent = document.getElementById("right");
    var WinPrint = window.open('', '', 'width=900,height=650');
    WinPrint.document.write(printContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
  }
</script>
</body>
<script src="java/jquery-1.11.0.js"></script>
<script src="java/effects.js"></script>
</html>
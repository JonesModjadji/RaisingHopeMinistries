<?php
include('Connection.php');
if (isset($_POST['Login'])) {
	$Username = $_POST['username'];
	$Password = $_POST['password'];
	//search for email ans password
	$query = "SELECT * FROM user WHERE UserName ='$Username'and Password='$Password'";
	$results = mysqli_query($con , $query);
	$row = mysqli_fetch_array($results,MYSQLI_ASSOC);
    $count = mysqli_num_rows($results);
	    if($count == 1) {
          header("location: admin.php");
	}
	else{
		echo "<script>alert('username or password incorrect')</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Raising Hope Ministries Login</title>
	<link rel="stylesheet" href="https://fonts.google.com/specimen/Montserrat"type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>
<body>
	<center>
	<section class="login" >
<form action="" method="post"style="width: 30%;margin-top: 10%;">
	<table>
		<th><h1>Login</h1>
		<tr>
			<td><label>USER ID :</label></td>
			<td><input type="text" name="username" required=""></td>
		</tr>
		<tr>
			<td><label>PASSWORD :</label></td>
			<td><input type="password" name="password" required=""></td>
		</tr>
		<tr>
			<td><input type="submit" name="Login" value="Login"></td>
		</tr>
		</th>
	</table>
</form>
</section>
</center>
</body>
</html>
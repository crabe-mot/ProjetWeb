<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);
include "database/db.php";
$database = new DBConnect;

if(!(empty($_POST['lastname']) || empty($_POST['firstname']) || empty($_POST['address']) || empty($_POST['city']) || empty($_POST['state']) || empty($_POST['zip']) || empty($_POST['email']) || empty($_POST['password'])|| empty($_POST['country']) || $_POST['password']!=$_POST['password_confirmation']))
{
	$database->getInstance()->query("INSERT INTO customers(lastname,firstname,email,role,password,address,city,state,zip,country) VALUES ('".$_POST['lastname'] . "', '" . $_POST['firstname']."', '" . 
	$_POST['email'] ."', NULL, '". $_POST['password']. "', '" . $_POST['address'] ."', '". $_POST['city'] ."', '". $_POST['state']."', '" . $_POST['zip'] ."', '". $_POST['country'] . "');");
	$database->closeInstance();
	header('location:index.php');
}
?>
<html>
<head>
	<link rel="stylesheet"  href="css/style.css">
</head>
<body>

<div>
	<h1>Register on E-Mall</h1>
	<form action="register.php" method="post">
		<input type="text" placeholder="Last Name" name="lastname"/></br>
		<input type="text" placeholder="First Name" name="firstname"/></br>
		<input type="text" placeholder="Address" name="address"/></br>
		<input type="text" placeholder="City" name="city"/></br>
		<input type="text" placeholder="State" name="state"/></br>
		<input type="text" placeholder="Country" name="country"/></br>
		<input type="text" placeholder="ZIP" name="zip"/></br>
		<input type="text" placeholder="Username" name="username"/></br>
		<input type="email" placeholder="Email" name="email"/></br>
		<input type="password" placeholder="Password" name="password"/></br>
		<input type="password" placeholder="Password Confirmation" name="password_confirmation"/></br>
		<input type="submit" value="Sign Up"/>
	</form> 
</div>
</body>
</html>


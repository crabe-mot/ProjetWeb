<html>
<head>
	<link rel="stylesheet"  href="css/style.css">
</head>
<body>

<div>
	<h1>Register on E-Mall</h1>
	<form method="post">
		<input type="text" placeholder="Last Name" name="lastname"/></br>
		<input type="text" placeholder="First Name" name="firstname"/></br>
		<input type="text" placeholder="Address" name="address"/></br>
		<input type="text" placeholder="City" name="city"/></br>
		<input type="text" placeholder="State" name="state"/></br>
		<input type="text" placeholder="ZIP" name="zip"/></br>
		<input type="text" placeholder="Username" name="username"/></br>
		<input type="email" placeholder="Email" name="email"/></br>
		<input type="password" placeholder="Password" name="password"/></br>
		<input type="password" placeholder="Password Confirmation" name="password_confirmation"/></br>
		<input type="submit" value="Sign Up"/>
	</form>
</div>
<? php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);
require_once "database/db.php";
$database = DBConnect::getInstance();
if(isset($_SESSION["error_pwd"]) && $_SESSION["error_pwd"])
{
	echo 'Error : Wrong password confirmation';
}

if(password!=password_confirmation)
{
    echo('password not equals')
	//$_SESSION["error_pwd"]=true;
	header('location:register.php?error_pwd=true';
}
else{
    echo('pwrite in db')
	$database::query("INSERT INTO customer(lastname,firstname,email,role,password,address,city,state,zip,country) VALUES ".lastname . " " . firstname." " .
	email ." NULL ". password. " " . address ." ". city ." ". state." " . zip ." ". country . ";");
	header('location:index.php');
}

?>

</body>
</html>

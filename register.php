<?php include('include/header.php');?>
<?php 
echo "<a href='login.php'><b><i>Log Out!</i></b></a>";?><br />
<?php echo "<a href='registerForm.php'><b><i>Registration Forms!</i></b></a>"; ?>
<!DOCTYPE html>
<head><title>User registration</title></head>
<body>
<div class="container">
<?php 
 

$con = @mysql_connect("localhost","root",""); 
if (!$con) { echo ('Could not connect: ' . mysql_error()); }
mysql_select_db("firozshah", $con);
if(isset($_GET['username'])){
	$username=mysql_real_escape_string($_GET['username']);
	$password=mysql_real_escape_string($_GET['password']);
	$password2=mysql_real_escape_string($_GET['password']);
	$email=mysql_real_escape_string($_GET['email']);
	
	if($password==!$password2){
		echo "Your password does not match!";
		}else{
		$password=md5($password);


$sql="INSERT INTO users (username,password,email)VALUES('$username','$password','$email')";
if (!mysql_query($sql,$con)){ die('Error: ' . mysql_error()); } 
echo "1 record added";
mysql_close($con);
}}
	
?>
	<form method='GET' action='register.php'>
<table>
	<tr>
	<td>Username:</td>
	<td><input type='text' name='username'></td>
	</tr>		
	<tr>
	<td>Password:</td>
	<td><input type='password' name='password'></td>
	</tr>
	<tr>
	<td>Confirm Password:</td>
	<td><input type='password' name='password2 '></td>
	</tr>
		<tr>
		<td>Email:</td>
		<td><input type='email' name='email'></td>
		</tr>
		<tr>
			<td></td>
			<td align='right'><input type='submit' value='Register me'></td>
			</tr>
		</table>
	</form>   	

</div>
</body>
</html>
<?php include('include/footer.php');?>
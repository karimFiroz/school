<?php include('include/header.php')?>

<p><h3 align="center"><?php echo "<span style='color:green;'>Please insert your username and Password!</span>"?></h3></P>

<?php


if(isset($_POST['user'])){
$user=$_POST['user'];
$pass=md5($_POST['pass']);


if($user && $pass){
	$con = mysql_connect("localhost","root","")
or
die('Could not connect: ' . mysql_error()); 

mysql_select_db("firozshah",$con)
or
die('Database is not selected: ' . mysql_error());
$query=mysql_query("SELECT * FROM users WHERE username='$user'AND password='$pass'");
$numrows=mysql_num_rows($query);
if($numrows!==0){
		while($row=mysql_fetch_assoc($query))
	{
		
		$dbuser=$row['username'];
		$dbpass=$row['password'];
	
		
	}
	if($user==$dbuser && md5($pass==$dbpass))
	{
		echo "<h2>Congratulation! You are looged in as<b></h2>".$user."</b>"."<br />"."<br />"."<br />";
	
?>

<?php
echo "<a href='registerForm.php'><h3>Registration forms here!</h3></a>"."<br />";

		
		
		
		
		$_SESSION['user']=$row['username'];
		
	}
	else
		echo "Your password is incorrect!";
}
else
	die("That user does not exists!");		
}
else{
	die("Please insert your username and Password!");
}

mysql_close($con);


}

echo "
<table cellpadding='5' cellspacing='10' align='center'>
<form  method='POST' action='login.php'/>
<input type='hidden' name='user' value='true'/>
<tr><th>Username:</th><td><input required='required' type='text' name='user'/></td></tr>
<tr><th>Password:</th><td><input required='required' type='password' name='pass'/></td></tr>
<tr><td colspan='2' align='right'><input type='submit' name='login' value='Log in!'/></td></tr>
</form>
</table>
";
?>

<?php include('include/footer.php')?>
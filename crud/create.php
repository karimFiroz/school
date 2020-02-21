<?php include('include/header.php');?>
<?php include('config.php');?>
<?php include('database.php');?>
<!---------------------------------------------------------------------------------------------->
<?php
$db= new Database();

if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($db->link,$_POST['name']);
$address=mysqli_real_escape_string($db->link,$_POST['address']);
$email=mysqli_real_escape_string($db->link,$_POST['email']);
if($name=='' || $address=='' || $email==''){
	
$error="Field must not be empty!!";	
}else{
	
	$query="INSERT INTO contact(name,address,email)values('$name','$address','$email')";
	$create=$db->insert($query);
}
}
?>


<?php

if(isset($error)){
	
	echo "<span style='color:red'>".$error."</span>";
}

?>
<a href="index.php">Home</a>

<form action="create.php" method="POST"/>
<table class="tblone">

	<tr>
	<td>name</td>
	<td><input type="text" name="name" placeholder="Enter your name"/></td>
	</tr>

	<tr>
	<td>address</td>
	<td><input type="text" name="address" placeholder="Enter your address"/></td>
	</tr>
	<tr>
	<td>email</td>
	<td><input type="text" name="email" placeholder="Enter your phone/email"/></td>
	</tr>
	<tr>
	
	<td><input type="submit" name="submit" value="Submit"/></td><br />
	<td><input type="reset" value="Cancel"/></td>
	</tr>
	
</tr>

</table>
</form>


















<!--------------------------------------------------------------------------------------------->
<?php include('include/footer.php');?>
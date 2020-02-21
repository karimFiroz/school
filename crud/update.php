<?php include('include/header.php');?>
<?php include('config.php');?>
<?php include('database.php');?>
<!---------------------------------------------------------------------------------------------->

<?php
$id=$_GET['id'];
$db= new Database();

$query="SELECT * FROM contact WHERE id=$id";
$getData= $db->select($query);


$query="SELECT * FROM contact WHERE id =$id";
$getData= $db->select($query)->fetch_assoc();




if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($db->link,$_POST['name']);
$address=mysqli_real_escape_string($db->link,$_POST['address']);
$email=mysqli_real_escape_string($db->link,$_POST['email']);
if($name=='' || $address=='' || $email==''){
	
$error="Field must not be empty!!";	
}else{
	
	$query="UPDATE contact
	SET
	name='$name',
	address='$address',
	email='$email'

	Where id = $id";
	
	$update=$db->update($query);
	
}
}

?>
<?php

if(isset($_POST['delete'])){
	
	$query="DELETE FROM contact WHERE id=$id";
	$deleteData = $db->delete($query);
}

?>

<?php

if(isset($error)){
	
	echo "<span style='color:red'>".$error."</span>";
}

?>

<a href="index.php">HOME</a>
<form action="update.php?id=<?php echo $id; ?>" method="POST"/>
<table class="tblone">

	<tr>
	<td>name</td>
	<td><input type="text" name="name" value="<?php echo $getData['name'];?>"/></td>
	</tr>

	<tr>
	<td>address</td>
	<td><input type="text" name="address" value="<?php echo $getData['address'];?>"/></td>
	</tr>
	<tr>
	<td>email</td>
	<td><input type="text" name="email" value="<?php echo $getData['email'];?>"/></td>
	</tr>
	<tr>
	
	<td><input type="submit" name="submit" value="Update"/></td>
	<td><input type="reset" value="Cancel"/></td></td>
	<td><input type="submit"name="delete" value="Delete"/></td>
	</tr>
	
</tr>

</table>
</form>


















<!--------------------------------------------------------------------------------------------->
<?php include('include/footer.php');?>
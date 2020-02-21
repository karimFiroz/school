<?php include('include/header.php');?>
<?php include('config.php');?>
<?php include('database.php');?>
<!---------------------------------------------------------------------------------------------->
<?php
$db= new Database();

$query="SELECT * FROM contact";
$read= $db->select($query);
?>
<!Doctype html>
<html>
<head></head>
<body>
<a class="btn btn-info btn-sm" href="https://rohanpur.000webhostapp.com/about_us.php"><img src="../img/home.png"height="30px"width="30px"></a>
<div class="container">
<a href="create.php">Add new contact</a>
<table class="tblone">

<tr>
	<th></th>
	
	<th width="20%">Name</th>
	<th width="30%">Address</th>
	<th width="45%">email/Phone</th>
	<th width="5%">Action</th>
</tr>
<?php  if($read) {?>

<?php 
$i=1;
while($row=$read->fetch_assoc()){
	?>
<tr>
	<td><?php $i++ ?></td>
	<td width="20%"><?php echo $row['name'];?></td>
	<td width="30%"><?php echo $row['address'];?></td>
	<td width="45%"><?php echo $row['email'];?></td>
	<td width="5%"><a href="update.php?id=<?php echo urlencode($row['id']);?>">Edit</a></td>
</tr>
<?php } ?>
<?php }else{ ?>

<p>Data is not available!!</p>

<?php } ?>
</table>


</div>
</body>
</html>
















<!--------------------------------------------------------------------------------------------->
<?php include('include/footer.php');?>
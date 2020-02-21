<?php 
include('include/class.php');
include('include/header.php');
?>
<div class="col-12 pt-5">
<h2>Student Information</h2>
<?php

$myclass=new MyClass;
$sql="SELECT * FROM student";
$result=$myclass->query($sql);
?>
<table class="table">

	<tr>
		<th>Roll</th>
		<th>Name</th> 
		<th>Gender</th>
		<th>Age</th>
		<th>Action</th>
	</tr>
	<?php 
while($data=$result->fetch_object()){?>
	<tr>
		<td><?php echo $data->roll ?></td>
		<td><?php echo $data->name ?></td>
		<td><?php echo $data->gender ?></td>
		<td><?php echo $data->age ?></td>
		<td> 
		<a class="btn btn-info btn-sm" href="#">Edit</a>
		<a class="btn btn-danger btn-sm" href="#">Delete</a>
		</td>
	</tr>
<?php } ?>

</table>

<?php include('include/footer.php');?>
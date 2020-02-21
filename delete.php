


<?php
	$sn= $_GET['SN'];
$conn=mysqli_connect('localhost','root','','firozshah');//ok
	$sql="DELETE FROM stdsalary WHERE SN=$sn;";//ok
		if(mysqli_query($conn,$sql)){
			header("location:stdsalary.php");
		}else{
			echo "Not Deleted";
		}

?>	



 


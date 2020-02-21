<?php
	$sn= $_GET['SN'];
	
	$SN=$_GET['SN'];
	$date=$_POST['date'];
	$id=$_POST['id'];
	$stdName=$_POST['stdName'];
	$fName=$_POST['fName'];
	$mName=$_POST['mName'];
	$section=$_POST['section'];
	$receiptNo=$_POST['receiptNo'];
	$roll=$_POST['roll'];
	$months=$_POST['months'];
	$re_admission=$_POST['re_admission'];
	$guide=$_POST['guide'];
	$red_crecent=$_POST['red_crecent'];
	$current=$_POST['current'];
	$dues=$_POST['dues'];
	$advance=$_POST['advance'];
	$examFee=$_POST['examFee'];
	$others=$_POST['others'];
	$school=$_POST['school'];
	$ccc=$_POST['ccc'];
	$admitcard=$_POST['admitcard'];
	$syllebus=$_POST['syllebus'];
	$total=$_POST['total'];
	$pic=$_POST['pic'];
	$phone=$_POST['phone'];

$conn=mysqli_connect('localhost','root','','firozshah');//ok
	$sql="UPDATE stdsalary SET 
	SN='$SN',
	date='$date', 
	id='$id', 
	stdName='$stdName', 
	fName='$fName', 
	mName='$mName', 
	section='$section', 
	receiptNo='$receiptNo', 
	roll='$roll', 
	months='$months',
	re_admission='$re_admission', 
	guide='$guide', 
	red_crecent='$red_crecent', 
	current='$current', 
	dues='$dues', 
	advance='$advance', 
	examFee='$examFee',
	others='$others', 
	school='$school', 
	ccc='$ccc', 
	admitcard='$admitcard', 
	syllebus='$syllebus',
	total='$total',
	pic='$pic',
	phone='$phone'
	WHERE SN=$sn;";//ok
				

		if(mysqli_query($conn,$sql)){
			header("location:stdsalary.php");
		}else{
			echo "Not updated";
		}
?>
	
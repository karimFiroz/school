
<?php include('include/header.php');?>
<?php 
echo "<a href='http://localhost/firozshah/logout.php'><b><i>Log Out!</i></b></a>";?><br />
<?php echo "<a href='registerForm.php'><b><i>Registration Forms!</i></b></a>"; ?>

<!DOCTYPE html>
<head><title>Student Registration</title></head>
<body>
<div class="container">
<a class="btn btn-info" href="stdsalary.php">All Student List !</a><br /><br />

<?php 
 

$con = @mysql_connect("localhost","root",""); 
if (!$con) 
{ 
echo ('Could not connect: ' . mysql_error()); 
} 
mysql_select_db("firozshah", $con);
if(isset($_GET['roll'])){
	$SN=mysql_real_escape_string($_GET['SN']);
	$date=mysql_real_escape_string($_GET['date']);
	$id=mysql_real_escape_string($_GET['id']);
	
	$stdName=mysql_real_escape_string($_GET['stdName']);
	$fName=mysql_real_escape_string($_GET['fName']);
	$mName=mysql_real_escape_string($_GET['mName']);
	
	$section=mysql_real_escape_string($_GET['section']);
	$receiptNo=mysql_real_escape_string($_GET['receiptNo']);
	$roll=mysql_real_escape_string($_GET['roll']);
	
	$months=mysql_real_escape_string($_GET['months']);
	$re_admission=mysql_real_escape_string($_GET['re_admission']);
	$guide=mysql_real_escape_string($_GET['guide']);
	$red_crecent=mysql_real_escape_string($_GET['red_crecent']);
	
	$current=mysql_real_escape_string($_GET['current']);
	$dues=mysql_real_escape_string($_GET['dues']);
	$advance=mysql_real_escape_string($_GET['advance']);
	
	$examFee=mysql_real_escape_string($_GET['examFee']);
	$others=mysql_real_escape_string($_GET['others']);
	$school=mysql_real_escape_string($_GET['school']);
	$ccc=mysql_real_escape_string($_GET['ccc']);
	$admitcard=mysql_real_escape_string($_GET['admitcard']);
	
	$syllebus=mysql_real_escape_string($_GET['syllebus']);
	$total=mysql_real_escape_string($_GET['total']);
	$pic=mysql_real_escape_string($_GET['pic']);
	$phone=mysql_real_escape_string($_GET['phone']);
	
$sql="INSERT INTO stdsalary(
SN,date,id,
stdName,fName,mName,
section,receiptNo,roll,
months,re_admission,guide,red_crecent,
current,dues,advance,
examFee,others,school,
ccc,admitcard,
syllebus,total,pic,phone)
VALUES
('$SN','$date','$id',
'$stdName','$fName','$mName',
'$section','$receiptNo','$roll',
'$months','$re_admission','$guide','$red_crecent',
'$current','$dues','$advance',
'$examFee','$others','$school',
'$ccc','$admitcard',
'$syllebus','$total','$pic','$phone')";
if (!mysql_query($sql,$con)){ die('Error: ' . mysql_error()); } 
echo "<h2>1 record added successfuly!</h2>";
mysql_close($con);
}
	
?>
<div><h3><?php echo " SN =". $_GET['SN'];?></h3></div><br />
	<form method='GET' action='admission.php'>
<table>
	<tr>
	<td>Serial No:</td>
	<td><input required='required' type='text' name='SN'></td>
	</tr>
	<tr>
		<td>Date:</td>
		<td><input type='text' name='date'></td>
		</tr>
	<tr>
	<td>Student ID:</td>
	<td><input required='required' type='text' name='id'></td>
	</tr>
	<tr>
	<td>Student Name:</td>
	<td><input required='required' type='text' name='stdName'></td>
	</tr><tr>
	<tr>
	<td>Father's Name:</td>
	<td><input type='text' name='fName'></td>
	</tr>
	<tr>
	<td>Mother's Name:</td>
	<td><input type='text' name='mName'></td>
	</tr>
	<tr>
	<td>Section:</td>
	<td><input type='text' name='section'></td>
	</tr>
	<tr>
		<td>Receipt No:</td>
		<td><input type='text' name='receiptNo'></td>
		</tr>
	<tr>
	<td>Roll:</td>
	<td><input required='required' type='text' name='roll'></td>
	</tr>
		<tr>
		<td>Months:</td>
		<td><input type='text' name='months'></td>
		</tr>
	<tr>	
	<td>Re_admission:</td>
	<td><input type='text' name='re_admission'></td>
	</tr>
	
		<tr>
		<td>Guide:</td>
		<td><input type='text' name='guide'></td>
		</tr>
		<tr>
		<td>Red_Crecent:</td>
		<td><input type='text' name='red_crecent'></td>
		</tr>
		<tr>
		<td>Current:</td>
		<td><input type='text' name='current'></td>
		</tr>
		<tr>
		<td>Dues:</td>
		<td><input type='text' name='dues'></td>
		</tr>
		<tr>
		<td>Advance:</td>
		<td><input type='text' name='advance'></td>
		</tr>
		<tr>
		<td>ExamFee:</td>
		<td><input type='text' name='examFee'></td>
		</tr>
		<tr>
			<td>Others:</td>
		<td><input type='text' name='others'></td>
		</tr>
			<tr>
			<td>School:</td>
		<td><input type='text' name='school'></td>
		</tr>
			<tr>
			<td>CCC:</td>
		<td><input type='text' name='ccc'></td>
		</tr>
	<tr>	
	<td>Admit Card:</td>
	<td><input type='text' name='admitcard'></td>
	</tr>
		<tr>
		<td>Syllebus</td>
		<td><input type='text' name='syllebus'></td>
		</tr>
		<tr>
		<td>Total:</td>
		<td><input type='text' name='total'></td>
		</tr>
		<tr>
		<td>Picture:</td>
		<td><input type='text' name='pic'></td>
		</tr>
		<tr>
		<tr>
		<td>Phone:</td>
		<td><input type='text' name='phone'></td>
		</tr>
		<tr>
		
		<tr>
			<td></td>
			<td align='right'><input type='submit' value='Submit'></td>
			
		</table>
	</form>   	

</div>
	<h4>Picture: images/roll.jpg</h4>
</body>
</html>
<?php include('include/footer.php');?>
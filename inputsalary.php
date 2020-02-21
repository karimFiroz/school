
<?php include('include/header.php');?>
<div align="center">
<?php 
echo "<a href='http://localhost/firozshah/logout.php'><b><i>Log Out!</i></b></a>";?><br />
<?php echo "<a href='registerForm.php'><b><i>Registration Forms!</i></b></a>"; ?>
</div>
<!DOCTYPE html>
<head><title>Student Registration</title></head>
<body>
<h1 align="center">Tution fee Input  here!</h1>
<div class="container">

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

<div align="center"><h2><?php echo "Done SN =". $_GET['SN'];?></h2></div>
<div align="center">
	<form method='GET' action='inputsalary.php'>
<table class"table">
	<tr>
	<td>SN:</td>
	<td><input  required="required" type='text' name='SN'></td>
	</tr>
	<tr>
		<td>Date:</td>
		<td><input type='text' name='date'></td>
		</tr>
	
		<tr>
		<td>Receipt No:</td>
		<td><input type='text' name='receiptNo'></td>
		</tr>
				<tr>
	<td>ID:</td>
	<td><input required="required" type='text' name='id'></td>
	</tr>
		<tr>
		<td>Roll:</td>
		<td><input  required="required" type='text' name='roll'></td>
		</tr>
		<tr>
		<td>stdName:</td>
		<td><input  required="required" type='text' name='stdName'></td>
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
		<td>examFee:</td>
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
		<td>Admitcard:</td>
		<td><input type='text' name='admitcard'></td>
		</tr>
		<tr>
		<td>Total:</td>
		<td><input type='text' name='total'></td>
		</tr>
		
		<tr>
			<td></td>
			<td align='right'><input type='submit' value='Submit'></td>
			</tr>
			
		</table>
	</form>   	
</div>
</div>
<div align="center"><a class="btn btn-info btn-sm" href="stdsalary.php">All Student List!</a><br /></div><br /><br />
</body>
</html>
<?php include('include/footer.php');?>
<?php include('include/header.php');?>
<div align="center">
	<form action="others.php" method="GET"/>
Others:<input type="text" name="user_others">
<input type="submit" value="Surch">
</form>

</div>
<?php 

$con = mysql_connect("localhost","root",""); 
if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
} 
mysql_select_db("firozshah", $con); 
$z=$_GET['user_others'];
$result = mysql_query("SELECT * FROM stdsalary where others='$z'"); 

echo "<b><table border='1' align='center'><b></b><tr>  
<th>SN</th> 
<th>section</th> 
<th>date</th> 

<th>id</th> 
<th>receiptNo</th> 
<th>months</th> 
<th>examFee</th>
<th>others</th> 
<th>roll</th>
<th>stdName</th>  
</tr>"; 
while ($row = mysql_fetch_array($result)) 
{ 
echo "<tr>";   
echo "<td>" . $row['SN'] . "</td>"; 
echo "<td>" . $row['section'] . "</td>";  
echo "<td>" . $row['date'] . "</td>";

echo "<td>" . $row['id'] . "</td>";   
echo "<td>" . $row['receiptNo'] . "</td>"; 
echo "<td>" . $row['months'] . "</td>";  
  echo "<td>" . $row['examFee'] . "</td>";
echo "<td>" . $row['others'] . "</td>"; 
echo "<td>" . $row['roll'] . "</td>"; 
echo "<td>" . $row['stdName'] . "</td>"; 
echo "<td>";
	echo "<td>";
		?> 
		
		
		
		<?php 
		echo "</td>";
		
		
		
		echo "</tr>"; 		
		}
		echo "</table>";
		 
  
 

mysql_close($con); 
?>


<?php include('include/footer.php');?>


<?php include('include/header.php');?>
<div align="center">
	<form action="current_query.php" method="GET"/>
Query:<input type="text" name="user_query"><br />
<input type="submit" value="Exicute">
</form>
<?php 
$con = mysql_connect("localhost","root",""); 
if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
} 
mysql_select_db("firozshah", $con); 


 
class pen{
function PenType("user_query"){
	echo $price;
}
	}
$obj=new pen(); 
echo $obj->PenType('That the quick brown');   


$z=$_GET["user_query"];
$result = mysql_query("SELECT * FROM stdsalary 'echo $obj->PenType('')'"); 

echo "<b><table border='1' align='center'><b></b><tr>  
<th>SN</th> 
<th>id</th> 
<th>stdName</th> 
<th>section</th> 
<th>roll</th> 
<th>receiptNo</th> 
<th>etc</th> 
<th>month</th> 
<th>date</th> 
<th>fee</th>  
</tr>"; 
while ($row = mysql_fetch_array($result)) 
{ 
echo "<tr>";   
echo "<td>" . $row['SN'] . "</td>"; 
echo "<td>" . $row['id'] . "</td>"; 
echo "<td>" . $row['stdName'] . "</td>"; 
echo "<td>" . $row['section'] . "</td>";  
echo "<td>" . $row['roll'] . "</td>";  
echo "<td>" . $row['receiptNo'] . "</td>";  
echo "<td>" . $row['etc'] . "</td>";  
echo "<td>" . $row['month'] . "</td>";  
echo "<td>" . $row['date'] . "</td>";  
echo "<td>" . $row['fee'] . "</td>";  
echo "</tr>"; 
}
echo "</table>"; 

mysql_close($con); 
?>

<?php include('include/footer.php');?>

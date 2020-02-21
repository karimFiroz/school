<?php include('include/header.php');?>
<?php 
$con = mysql_connect("localhost","root",""); 
if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
} 
 ?>
 <?php
mysql_select_db("firozshah", $con); 

$result = mysql_query("SELECT * FROM stdsalary where receiptNo order by receiptNo asc");

echo "<b><table border='1' align='center'><b></b><tr>
<th>SN</th> 
<th>date</th> 
<th>id</th> 
<th>stdName</th> 
<th>section</th> 
<th>receiptNo</th>
<th>roll</th> 
<th>months</th> 
<th>others</th>  
<th>total</th>  
</tr>"; 
while ($row = mysql_fetch_array($result)) 
{ 
echo "<tr>"; 
echo "<td>" . $row['SN'] . "</td>";   
echo "<td>" . $row['date'] . "</td>";   
echo "<td>" . $row['id'] . "</td>"; 
echo "<td>" . $row['stdName'] . "</td>"; 
echo "<td>" . $row['section'] . "</td>";
echo "<td>" . $row['receiptNo'] . "</td>";  
echo "<td>" . $row['roll'] . "</td>";   
echo "<td>" . $row['months'] . "</td>";  
echo "<td>" . $row['others'] . "</td>";  
echo "<td>" . $row['total'] . "</td>";  
echo "</tr>"; 
}
echo "</table>"; 

mysql_close($con); 
?>



<?php include('include/footer.php');?>

<?php include('include/header.php');?>
<div align="center">
	<form action="roll.php" method="GET"/>
Roll:<input type="text" name="user_roll">
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
$x=$_GET['user_roll'];
$result = mysql_query("SELECT * FROM stdsalary where roll='$x'"); 

echo "<b><table border='1' align='center'><b></b><tr>  
<th>SN</th> 
<th>date</th> 
<th>stdId</th> 
<th>stdName</th>  
<th>receiptNo</th> 
<th>roll</th> 
<th>months</th>           
<th>ccc</th>      
<th>school</th>      
<th>guide</th>      
<th>red_crecent</th>      
<th>current</th>      
<th>dues</th>      
<th>advance</th>      
<th>others</th>         
<th>total</th>   
</tr>"; 
while ($row = mysql_fetch_array($result)) 
{ 
echo "<tr>";   
echo "<td>" . $row['SN'] . "</td>";
echo "<td>" . $row['date'] . "</td>"; 
echo "<td>" . $row['stdId'] . "</td>"; 
echo "<td>" . $row['stdName'] . "</td>"; 
echo "<td>" . $row['receiptNo'] . "</td>";  
echo "<td>" . $row['roll'] . "</td>";   
echo "<td>" . $row['months'] . "</td>";   
echo "<td>" . $row['ccc'] . "</td>";  
echo "<td>" . $row['school'] . "</td>";  
echo "<td>" . $row['guide'] . "</td>";  
echo "<td>" . $row['red_crecent'] . "</td>";  
echo "<td>" . $row['current'] . "</td>";  
echo "<td>" . $row['dues'] . "</td>";  
echo "<td>" . $row['advance'] . "</td>";  
echo "<td>" . $row['others'] . "</td>";    
echo "<td>" . $row['total'] . "</td>";    
echo "<td>";
	echo "<td>";
		?> 
		
		<img src="<?php echo $row["pic"];?>" height="100" width="100">
		
		<?php 
		echo "</td>";
		
		
		
		echo "</tr>"; 		
		}
		echo "</table>";
		 
  
 

mysql_close($con); 
?>


<?php include('include/footer.php');?>

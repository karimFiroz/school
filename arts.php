<?php include('include/header.php');?>
 <div align="center"><a class="btn btn-info" href="http://localhost/firozshah/">Home</a><br /></div>
<?php 
$con = mysql_connect("localhost","root",""); 
if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
} 
 ?>
 <?php
mysql_select_db("firozshah", $con); 

$result = mysql_query("SELECT * FROM stdsalary where section='humanities' order by id asc");

echo "<b><table border='1' align='center'class='tblone'><b></b><tr>
<th>SN</th> 
<th>section</th>
<th>date</th>  
<th>fName</th> 
<th>mName</th> 
<th>receiptNo</th> 
<th>months</th>
<th>school</th> 
<th>ccc</th> 
<th>others</th>  
<th>total</th>  
<th>phone</th> 
<th>id</th>
<th>roll</th> 
<th>stdName</th> 
</tr>"; 
while ($row = mysql_fetch_array($result)) 
{ 
echo "<tr>"; 
echo "<td>" . $row['SN'] . "</td>"; 
echo "<td>" . $row['section'] . "</td>";  
echo "<td>" . $row['date'] . "</td>";    
echo "<td>" . $row['fName'] . "</td>"; 
echo "<td>" . $row['mName'] . "</td>"; 
echo "<td>" . $row['receiptNo'] . "</td>"; 
echo "<td>" . $row['months'] . "</td>";  
echo "<td>" . $row['school'] . "</td>";  
echo "<td>" . $row['ccc'] . "</td>";  
echo "<td>" . $row['others'] . "</td>";  
echo "<td>" . $row['total'] . "</td>";  
echo "<td>" . $row['phone'] . "</td>";  
echo "<td>" . $row['id'] . "</td>"; 
echo "<td>" . $row['roll'] . "</td>"; 
echo "<td>" . $row['stdName'] . "</td>"; 
echo "<td>";
	echo "<td>";
		?> 
		
		<img src="<?php echo $row["pic"];?>" height="100" width="100">
		
		<?php 
		echo "</td>";
		
			echo "<td>";
		?> 
		<a class="btn btn-info" href="form_arts.php?id=<?php echo $row['id'] ?>">View</a>		
	
		<?php 
		echo "</td>";
		
		
		echo "</tr>"; 		
		}
		echo "</table>";
		 
  
 

mysql_close($con); 
?>


<?php include('include/footer.php');?>

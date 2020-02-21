<?php include('include/header.php');?>
<p><div align="center"><a class="btn btn-info btn-sm" href="registerForm.php">Registration Forms Here!</a><br /></div></p>
<div class="jump"></div>
<div id="sticker">
	<div class="stick">
	<table clas="tblone">
		<tr>
			<th>SN</th>
			<th>--</th>
			<th>section</th>
			<th>---</th>
			
			<th>date</th>
		
			<th>---</th>
			<th>id</th>
			
			<th>----</th>
			<th>receiptNo</th>
			
			<th>receiptNo</th>
			<th>--</th>
			<th>months</th>
			<th>-</th>
			<th>school</th>
			<th>-</th>
			<th>ccc</th>
			<th>-</th>
			<th>guide</th>
			<th>-</th>
			<th>red_crecent</th>
			<th>-</th>
			<th>current</th>
			<th>---</th>
			<th>due</th>
			<th>--</th>
			<th>advance</th>
			<th>-</th>
			<th>examFee</th>
			<th>--</th>
			<th>others</th>
			<th>--</th>
			<th>admitcard</th>
			<th>-----</th>
			<th>total</th>
			<th>---</th>
			<th>Phone</th>
			
			<th>---</th>
				<th>roll</th>
				<th>---</th>
		
		
			<th>stdName</th>
			</tr>
	</table>
	</div>

</div>
<?php 
$con = mysql_connect("localhost","root",""); 
if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
} 
mysql_select_db("firozshah", $con); 
$result = mysql_query("SELECT * FROM stdsalary  SN order by SN desc"); 

echo "<b><table  background_color='blue'bgcborder='10' border='1' cellpadding='10' cellspacing='10'align='center' class='tblone'><b></b><tr>  

<th>SN</th> 
<th>section</th> 
<th>date</th>

<th>id</th> 

<th>receiptNo</th>
<th>months</th>  
<th>school</th> 
<th>ccc</th> 
<th>guide</th> 
<th>red_crecent</th> 
 <th>current</th>
 <th>dues</th>
 <th>advance</th>
<th>examFee</th>  
<th>others</th>  
<th>admitcard</th>  
<th>total</th>   
<th>Phone</th> 
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
echo "<td>" . $row['school'] . "</td>";
echo "<td>" . $row['ccc'] . "</td>";
echo "<td>" . $row['guide'] . "</td>";
echo "<td>" . $row['red_crecent'] . "</td>";
echo "<td>" . $row['current'] . "</td>";  
echo "<td>" . $row['dues'] . "</td>";  
echo "<td>" . $row['advance'] . "</td>"; 
echo "<td>" . $row['examFee'] . "</td>";  
echo "<td>" . $row['others'] . "</td>";  
echo "<td>" . $row['admitcard'] . "</td>";  
echo "<td>" . $row['total'] . "</td>";      
echo "<td>" . $row['phone'] . "</td>";      
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
		<a class="btn btn-info btn-sm" href="form.php?id=<?php echo $row['id']; ?>">View</a>
		<a class="btn btn-warning btn-sm" href="edit.php?SN=<?php echo $row['SN']; ?>">Edit</a>
		<a class="btn btn-info btn-sm" href="inputsalary.php?SN=<?php echo $row['SN']; ?>">Insert</a>
		<!--<a class="btn btn-warning btn-sm" href="admission.php?SN=<?php echo $row['SN']; ?>">Admission</a>-->
		<a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete? ')" href="delete.php?SN=<?php echo $row['SN']; ?>">Delete</a>	
		
		<?php 
		echo "</td>";
		
		
		
		echo "</tr>"; 		
		}
		echo "</table>";
		 
  
 

mysql_close($con); 


?>

<a href="#">Go To Top</a>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	
<script type="text/javascript">
		$(document).ready(function() {
			var s = $("#sticker");
			var pos = s.position();					   
			$(window).scroll(function() {
				var windowpos = $(window).scrollTop();
				if (windowpos >= pos.top) {
					s.addClass("stick");
				} else {
					s.removeClass("stick");	
				}
			});
		});
</script> 

</body>
</html>


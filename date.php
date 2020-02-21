
<?php include('include/header.php');?>
<div align="center">
	<form action="date.php" method="GET"/>
Date:<input type="text" name="user_date">
<input type="submit" value="Surch">
</form>
<div id="sticker">
	<div class="stick">
	<table clas="tblone">
		<tr>
			<th>SN</th>
			<th>-</th>
			<th>date</th>
			<th>--</th>
			<th>---</th>
			<th>receiptNo</th>
			<th>-</th>
			<th>id</th>
			<th>-----</th>
			<th>roll</th>
			<th>-----</th>
			<th>stdName</th>
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
			<th>---</th>
			<th>total</th>
				
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
$y=$_GET['user_date'];
$result = mysql_query("SELECT * FROM stdsalary where date='$y'"); 

echo "<b><table border='1' align='center'><b></b><tr>  
<th>SN</th> 
<th>date</th> 
<th>section</th> 
<th>receiptNo</th>
<th>id</th> 
 <th>roll</th> 
 <th>stdName</th> 
<th>months</th>      
<th>guide</th>   
<th>red_crecent</th>   
<th>current</th>  
<th>dues</th>  
<th>advance</th>  
<th>examFee</th>  
<th>others</th>  
<th>total</th> 

</tr>"; 
while ($row = mysql_fetch_array($result)) 
{ 
echo "<tr>";   
echo "<td>" . $row['SN'] . "</td>"; 
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['section'] . "</td>";  
echo "<td>" . $row['receiptNo'] . "</td>"; 
echo "<td>" . $row['id'] . "</td>";    
 echo "<td>" . $row['roll'] . "</td>"; 
 echo "<td>" . $row['stdName'] . "</td>";  
echo "<td>" . $row['months'] . "</td>";    
echo "<td>" . $row['guide'] . "</td>";  
echo "<td>" . $row['red_crecent'] . "</td>";  
echo "<td>" . $row['current'] . "</td>";  
echo "<td>" . $row['dues'] . "</td>";  
echo "<td>" . $row['advance'] . "</td>";  
echo "<td>" . $row['examFee'] . "</td>";  
echo "<td>" . $row['others'] . "</td>"; 
echo "<td>" . $row['total'] . "</td>"; 
 
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
<?php include('include/footer.php');?>

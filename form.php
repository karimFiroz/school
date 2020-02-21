
<div align="center">
	<form action="form_result.php" method="GET">
	<fieldset>
	<legend></legend>
To see result input ID<input type="text" name="id">
<input type="submit" value="Surch">
</fieldset>
</form>
</div>
	
<?php 
$con = mysql_connect("localhost","root",""); 
if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
} 
mysql_select_db("firozshah", $con); 

$y=$_GET['id'];
$result = mysql_query("SELECT * FROM subject where id='$y'"); 
?>
<?php
	$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','firozshah');//ok
		$sql="select * from stdsalary where id=$id;";//ok
		$result=mysqli_query($conn,$sql);//ok
		$std=mysqli_fetch_assoc($result);//ok
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>view</title>
	<style>
	input[type=text]{
    width=150px;
    height:25px;
    border:1px solid #ff0000;
    border-radius:5px;
    color:#0000ff;
    font-weight:bold;
    font-family:arial;
}
textarea{
    color:#0000ff;
}
label{
    color:#ff0000;
}
input[type=submit]{
    width:80px;
    height:40px;
    color:#ff0000;
    padding:5px;
    border-radius:5px;
}

input[type=reset]{
    width:80px;
    height:40px;
    color:#ff0000;
    padding:5px;
    border-radius:5px;
}


	</style>
  </head>
  <body style="background:#E1E0E8;">
  
  
  <br /><br /><br /><br /><br />
 
   
   <div class="container">
   <h1 align="center"><strong>Firozshah City Corporation Girls' High School</strong></h1><br />
   
		<div class="row">
			<div class="col-md-0">
			
				<!--<a class="btn btn-info" href="#">Student List</a>-->
			</div>
			
			<div class="col-md-12">
			
			
			<h2 align="center">Student Information</h2><br />
	<div align="center"><img src="<?php echo $std["pic"];?>" height="200" width="200" /></div>
			<table class="table" align="center"border="0">
			
					<tr>
					<th width="100" class="text-left">Name:</th>
					<th width="100" class="text-left">Fname:</th>
					<th width="100" class="text-left">Mname:</th>
					<th width="100" class="text-left">ID:</th>
					<th width="100" class="text-left">roll:</th>
					<th width="100" class="text-left">Section:</th>
					<th width="100" class="text-left">Mobile:</th>
					</tr>
					<tr>
					<td class="text-left"><?php echo $std['stdName']; ?></td>
					<td class="text-left"><?php echo $std['fName']; ?></td>
					<td class="text-left"> <?php echo $std['mName']; ?></td>
					<td class="text-left"><?php echo $std['id']; ?></td>
					<td class="text-left"> <?php echo $std['roll']; ?></td>
					<td class="text-left"> <?php echo $std['section']; ?></td>
					<td class="text-left"> <?php echo $std['phone']; ?></td>
					</tr>
				
				</table>
			
			</div>
	   </div>
	</div>
	<br />

<?php 

$con = mysql_connect("localhost","root",""); 
if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
} 
mysql_select_db("firozshah", $con); 
$x=$_GET['id'];
$result = mysql_query("SELECT * FROM stdsalary where id='$x'"); 

echo "<b><table border='1' align='center'><b></b><tr>  
<th>SN</th> 
<th>date</th> 
<th>stdName</th>  
<th>receiptNo</th>
<th>id</th>  
<th>roll</th> 
<th>months</th>           
<th>ccc</th>      
<th>school</th>      
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
echo "<td>" . $row['stdName'] . "</td>"; 
echo "<td>" . $row['receiptNo'] . "</td>"; 
echo "<td>" . $row['id'] . "</td>"; 
echo "<td>" . $row['roll'] . "</td>";   
echo "<td>" . $row['months'] . "</td>";   
echo "<td>" . $row['ccc'] . "</td>";  
echo "<td>" . $row['school'] . "</td>";  
echo "<td>" . $row['guide'] . "</td>";  
echo "<td>" . $row['red_crecent'] . "</td>";  
echo "<td>" . $row['current'] . "</td>";  
echo "<td>" . $row['dues'] . "</td>";  
echo "<td>" . $row['advance'] . "</td>";  
echo "<td>" . $row['examFee'] . "</td>";  
echo "<td>" . $row['others'] . "</td>";    
echo "<td>" . $row['total'] . "</td>";    
echo "<td>";

		echo "</tr>"; 		
		}
		echo "</table>";
		
			  
?>
<br />
<br />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
	
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<div align="center"><a class="btn btn-info btn-sm" href="stdsalary.php">Student List!</a><br /></div><br /><br />
	 <div align="center"><a class="btn btn-info btn-sm" href="http://localhost/firozshah/"><img src="img/home.png"height="30px"width="30px"></a></div>
  </body>
</html>

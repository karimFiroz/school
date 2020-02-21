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
		$sql="SELECT * FROM stdsalary where id=$id;";//ok
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
	<link rel="stylesheet" type="text/css" href="style/style.css" />
  </head>
<body style="background:#E1E0E8;color:#000;">
  
  
   
   <div class="container" align="center">
   <h2 align="center"><strong>Firozshah City Corporation Girls' High School</strong></h2><br />
   
		<div class="row">
			<div class="col-md-0">
			
				<!--<a class="btn btn-info" href="#">Student List</a>-->
			</div>
			
			<div class="col-md-12">
			
			<h3 align="center">Prograsive Report Card</h3>
			<h4 align="center"> Student information </h4>
			<div align="center"><img src="<?php echo $std["pic"];?>" height="200" width="200" /></div>
		<table class="table" align="center"border="0">
			
					<tr>
					<th width="100" class="text-left">ID:</th>
					<th width="100" class="text-left">roll:</th>
					<th width="100" class="text-left">Name:</th>
					<th width="100" class="text-left">Fname:</th>
					<th width="100" class="text-left">Mname:</th>
					
					<th width="100" class="text-left">Section:</th>
					<th width="100" class="text-left">Mobile:</th>
					</tr>
					<tr>
					<td class="text-left"><?php echo $std['id']; ?></td>
					<td class="text-left"> <?php echo $std['roll']; ?></td>
					<td class="text-left"><?php echo $std['stdName']; ?></td>
					<td class="text-left"><?php echo $std['fName']; ?></td>
					<td class="text-left"> <?php echo $std['mName']; ?></td>
					
					<td class="text-left"> <?php echo $std['section']; ?></td>
					<td class="text-left"> <?php echo $std['phone']; ?></td>
					</tr>
				
				</table>
			</div>
	   </div>
	</div>
	
	
<?php
//including the database connection file
include_once("config.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM grade_point ORDER BY sn DESC"); // mysql_query is deprecated
 // using mysqli_query instead
?>
 
<!doctype html>

<?php
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','firozshah');//ok
		$sql="SELECT * FROM grade_point where id=$id;";//ok
		$result=mysqli_query($conn,$sql);//ok
	
		?>

  <head>
    <!-- Required meta tags -->

    <title>Result Page</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
  </head>
  <body background="#F2F2F2">

		  <div class="container" align="center">
		  
		   <h4>Pre-Test Examination-2019, Class Ten</h4>
		 	
			<table width='80%' border=0 class="tblone">
		
				<tr bgcolor='#CCCCCC'>
					
					<td>sn</td>
					<td>sid</td>
					<td>mcq_1st</td>
					<td>cq_1st</td>
					<td>mcq_2nd</td>
					<td>cq_2nd</td>
					<td>mcq</td>
					<td>cq</td>
					<td>pra</td>
					<td>ca</td>
					<td>tot</td>
					<td>gp</td>
					<td>lg</td>
					<td>Result:</td>
					<td>gpa</td>
					<td>grade</td>
					
			
				    
					
				</tr>
				<?php 
				//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
				while($res = mysqli_fetch_array($result)) {         
					echo "<tr>";
			
					echo "<td>".$res['sn']."</td>";
					echo "<td>".$res['sid']."</td>";
					echo "<td>".$res['mcq_1st']."</td>";
					echo "<td>".$res['cq_1st']."</td>";
					echo "<td>".$res['mcq_2nd']."</td>";
					echo "<td>".$res['cq_2nd']."</td>";
					echo "<td>".$res['mcq']."</td>";    
					echo "<td>".$res['cq']."</td>";    
					echo "<td>".$res['pra']."</td>";    
					echo "<td>".$res['ca']."</td>";    
					echo "<td>".$res['tot']."</td>";    
					echo "<td>".$res['gp']."</td>";    
					echo "<td>".$res['lg']."</td>";
					echo "<td>".$res['Result:']."</td>";					
					echo "<td>".$res['gpa']."</td>"; 
					echo "<td>".$res['grade']."</td>"; 
					 
				
					 
				}
				?>
			</table>
		<a class="btn btn-info btn-sm" href="science.php">Student science</a>
<a class="btn btn-info btn-sm" href="arts.php">Student arts</a>
<a class="btn btn-info btn-sm" href="commerce.php">Student commerce</a>
		 <!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		  </div>
		    
  </body>
</html>
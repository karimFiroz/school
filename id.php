

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Summary</title>
  </head>
  
  <body style="background:#E1E0E8;">
  <a class="btn btn-info btn-sm" href="http://localhost/firozshah/"><img src="img/home.png"height="30px"width="30px"></a>
<?php 
$con = mysql_connect("localhost","root",""); 
if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
} 
 ?>
   
 <?php
mysql_select_db("firozshah", $con); 

$result = mysql_query("SELECT * FROM stdsalary where id order by id asc");

echo "<b><table border='1' align='center'><b></b><tr>
<th>SN</th>
<th>date</th> 
<th>section</th> 
<th>roll</th> 
<th>stdName</th>  
<th>roll</th>
<th>id</th>
<th>total</th>
<th>months</th> 
<th>guide</th> 
<th>red_crecent</th>  
<th>current</th> 
<th>dues</th> 
<th>advance</th> 
<th>others</th>  
<th>phone</th>
<th>ccc</th>
<th>school</th>
</tr>"; 
while ($row = mysql_fetch_array($result)) 
{ 
echo "<tr>"; 
echo "<td>" . $row['SN'] . "</td>"; 
echo "<td>" . $row['date'] . "</td>";  
echo "<td>" . $row['section'] . "</td>";
echo "<td>" . $row['roll'] . "</td>";
echo "<td>" . $row['stdName'] . "</td>";    
echo "<td>" . $row['roll'] . "</td>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['total'] . "</td>"; 
echo "<td>" . $row['months'] . "</td>"; 
echo "<td>" . $row['guide'] . "</td>";  
echo "<td>" . $row['red_crecent'] . "</td>";    
echo "<td>" . $row['current'] . "</td>";  
echo "<td>" . $row['dues'] . "</td>";  
echo "<td>" . $row['advance'] . "</td>";  
echo "<td>" . $row['others'] . "</td>";  
echo "<td>" . $row['phone'] . "</td>"; 
echo "<td>" . $row['ccc'] . "</td>";
echo "<td>" . $row['school'] . "</td>";
echo "</tr>"; 
}


echo "</table>"; 

mysql_close($con); 
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

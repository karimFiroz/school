	
<?php
//including the database connection file
include_once("config.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM grade_point ORDER BY sn DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM grade_point ORDER BY sn ASC"); // using mysqli_query instead
?>
 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Result Page</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
  </head>
  <body>
  <div class="container"><br /><br />
    <a href="add.html"><h5><strong>Add Data</strong></h5></a>
 
    <table width='80%' border=0 class="tblone">
        <tr bgcolor='#CCCCCC'>
            <td>sn</td>
            <td>id</td>
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
            <td>gpa</td>
            <td>grade</td>
            <td>Update</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['sn']."</td>";
            echo "<td>".$res['id']."</td>";
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
            echo "<td>".$res['gpa']."</td>"; 
            echo "<td>".$res['grade']."</td>"; 
            echo "<td>
			<a href=\"edit.php?sn=$res[sn]\">Edit</a> | <a href=\"delete.php?sn=$res[sn]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
  <form action="excel.php" method="POST">
		<input type="submit" name="export_excel" class="btn btn-success" value="Export to excel">
		</form>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
  </body>
</html>
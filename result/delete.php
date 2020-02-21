

//including the database connection file
<?php include("config.php");

//getting id of the data from url
$sn = $_GET['sn'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM grade_point WHERE sn=$sn");

//redirecting to the display page (index.php in our case)
header("Location:index.php");

//including the database connection file
include("config.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM grade_point WHERE sn=$sn");
 
//redirecting to the display page (index.php in our case)
header("Location:index.php");?>
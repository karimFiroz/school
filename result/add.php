
<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $sn = $_POST['sn'];
    $id = $_POST['id'];
    $sid = $_POST['sid'];
    $mcq_1st = $_POST['mcq_1st'];
    $cq_1st = $_POST['cq_1st'];
    $mcq_2nd = $_POST['mcq_2nd'];
    $cq_2nd = $_POST['cq_2nd'];
    $mcq = $_POST['mcq'];
    $cq = $_POST['cq'];
    $pra = $_POST['pra'];
    $ca = $_POST['ca'];
    $tot = $_POST['tot'];
    $gp = $_POST['gp'];
    $lg = $_POST['lg'];
    $gpa = $_POST['gpa'];
    $grade = $_POST['grade'];
        
    // checking empty fields
    if(empty($sn) || empty($id)) {                
       
			   if(empty($sn)) {
            echo "<font color='red'>Serial number field is empty.</font><br/>";
        }
		
		 if(empty($id)) {
            echo "<font color='red'>id field is empty.</font><br/>";
        }
    
  
		
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO grade_point(sn,id,sid,mcq_1st,cq_1st,mcq_2nd,cq_2nd,mcq,cq,pra,ca,tot,gp,lg,gpa,grade) VALUES('$sn','$id','$sid','$mcq_1st','$cq_1st','$mcq_2nd','$cq_2nd','$mcq','$cq','$pra','$ca','$tot','$gp','$lg','$gpa','$grade')");
        
        //display success message
       // echo "<font color='green'>Data added successfully.";
        //echo "<br/><a href='index.php'>View Result</a>";
       header("location:index.php");
	
    }
}
?>

</body>
</html>

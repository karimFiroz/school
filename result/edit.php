	
<?php
$sn = $_GET['sn'];
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $sn = $_POST['sn'];
    $id = $_POST['id'];
    $sid =$_POST['sid'];
    $mcq_1st =$_POST['mcq_1st'];
    $cq_1st =$_POST['cq_1st'];
    $mcq_2nd =$_POST['mcq_2nd'];
    $cq_2nd =$_POST['cq_2nd'];
    $mcq =$_POST['mcq'];
    $cq =$_POST['cq'];    
    $pra=$_POST['pra'];    
    $ca =$_POST['ca'];    
    $tot =$_POST['tot'];    
    $gp =$_POST['gp'];    
    $lg=$_POST['lg'];    
    $gpa=$_POST['gpa'];    
    $grade=$_POST['grade'];    
    
    // checking empty fields
   if(empty($sn) || empty($id)) {                
       
			   if(empty($sn)) {
            echo "<font color='red'>Serial number field is empty.</font><br/>";
        }
		 if(empty($id)) {
            echo "<font color='red'>id field is empty.</font><br/>";
        }
    
     
		        
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE grade_point SET 
		sn='$sn',
		id='$id',
		sid='$sid',
		mcq_1st='$mcq_1st',
		cq_1st='$cq_1st',
		mcq_2nd='$mcq_2nd',
		cq_2nd='$cq_2nd',
		mcq='$mcq',
		cq='$cq',
		pra='$pra',
		ca='$ca',
		tot='$tot',
		gp='$gp',
		lg='$lg',
		gpa='$gpa',
		grade='$grade' 
		WHERE sn=$sn");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$sn = $_GET['sn'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM grade_point WHERE sn=$sn");
 
while($res = mysqli_fetch_array($result))
{
    $sn = $res['sn'];
    $id = $res['id'];
    $sid = $res['sid'];
    $mcq_1st = $res['mcq_1st'];
    $cq_1st = $res['cq_1st'];
    $mcq_2nd = $res['mcq_2nd'];
    $cq_2nd = $res['cq_2nd'];
    $mcq = $res['mcq'];
    $cq = $res['cq'];
    $pra = $res['pra'];
    $ca = $res['ca'];
    $tot = $res['tot'];
    $gp = $res['gp'];
    $lg = $res['lg'];
    $gpa = $res['gpa'];
    $grade = $res['grade'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
<div class="container">
    <a href="index.php"><strong><h3>Home</h3></strong></a>
    <br/><br/>
    
	<form name='form1'method='POST' action='edit.php?sn=<?php echo $sn ;?>' >
        <table border="0" class="tblone">
               <tr> 
                <td>SN</td>
                <td ><input type="text" name="sn" value="<?php echo $sn;?>"></td>
           </tr>
		   <tr>
                <td>ID</td>
                <td><input type="text" name="id"value="<?php echo $id;?>"></td>
            </tr>
		   <tr>
                <td>SID</td>
                <td><input type="text" name="sid"value="<?php echo $sid;?>"></td>
            </tr>
			  <tr>
                <td>mcq_1st</td>
                <td><input type="text" name="mcq_1st"value="<?php echo $mcq_1st;?>"></td>
            </tr>
			  <tr>
                <td>cq_1st</td>
                <td><input type="text" name="cq_1st"value="<?php echo $cq_1st;?>"></td>
            </tr>
			  <tr>
                <td>mcq_2nd</td>
                <td><input type="text" name="mcq_2nd"value="<?php echo $mcq_2nd;?>"></td>
            </tr>
			  <tr>
                <td>cq_2nd</td>
                <td><input type="text" name="cq_2nd"value="<?php echo $cq_2nd;?>"></td>
            </tr>
		   <tr>
                <td>MCQ</td>
                <td><input type="text" name="mcq"value="<?php echo $mcq;?>"></td>
            </tr>
		   <tr>
                <td>CQ</td>
                <td><input type="text" name="cq"value="<?php echo $cq;?>"></td>
            </tr>
		   <tr>
                <td>Pra</td>
                <td><input type="text" name="pra"value="<?php echo $pra;?>"></td>
           </tr>
		   <tr>
                <td>CA</td>
                <td><input type="text" name="ca"value="<?php echo $ca;?>"></td>
            </tr>
		   <tr>
                <td>Tot</td>
                <td><input type="text" name="tot"value="<?php echo $tot;?>"></td>
             </tr>
		   <tr>
                <td>GP</td>
                <td><input type="text" name="gp"value="<?php echo $gp;?>"></td>
            </tr>
		   <tr>
                <td>LG</td>
                <td><input type="text" name="lg"value="<?php echo $lg;?>"></td>
           </tr>
		   <tr>
                <td>GPA</td>
                <td><input type="text" name="gpa"value="<?php echo $gpa;?>"></td>
            </tr>
			 <tr>
                <td>Grade</td>
                <td><input type="text" name="grade"value="<?php echo $grade;?>"></td>
            </tr>
                <td><input type="hidden" name="sn" value=<?php echo $_GET['sn'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
	</div>
</body>
</html>
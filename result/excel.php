	
<?php
include_once("config.php");

 $output='';
 if(isset($_POST["export_excel"]))
 {

$result = mysqli_query($mysqli, "SELECT * FROM grade_point ORDER BY sn ASC");

 
 if(mysqli_num_rows($result)>0)
 {
	$output .='
    <table  bordered="1" class="table">
        <tr>
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
            <td>Result:</td>
            <td>gpa</td>
            <td>grade</td>
            <td>Update</td>
        </tr>'; 
        while($res = mysqli_fetch_array($result)) 
		{ 
			$output .='<tr>
            <td>'.$res["sn"].'</td>
            <td>'.$res["id"].'</td>
            <td>'.$res["sid"].'</td>
            <td>'.$res["mcq_1st"].'</td>
            <td>'.$res["cq_1st"].'</td>
            <td>'.$res["mcq_2nd"].'</td>
            <td>'.$res["cq_2nd"].'</td>
            <td>'.$res["mcq"].'</td>    
            <td>'.$res["cq"].'</td>   
            <td>'.$res["pra"].'</td>   
            <td>'.$res["ca"].'</td>    
            <td>'.$res["tot"].'</td>    
            <td>'.$res["gp"].'</td>   
            <td>'.$res["lg"].'</td>   
            <td>'.$res["Result:"].'</td>   
            <td>'.$res["gpa"].'</td>
            <td>'.$res["grade"].'</td>
            </tr>';     
        }
	
    $output .='</table>';
	//header("Content-Type: application/xls");
	//header("Content-Disposition:attachment;filename=download.xls");
	header('Content-Type: application/vnd.ms-excel'); //mime type
header('Content-Disposition: attachment;filename="result.xls"'); //tell browser what's the file name
header('Cache-Control: max-age=0'); //no cache
       echo $output;
	}
 }
 
?>
	



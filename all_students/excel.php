	
<?php
include_once("config.php");

 $output='';
 if(isset($_POST["export_excel"]))
 {

$result = mysqli_query($mysqli, "SELECT * FROM sfdata ORDER BY sn ASC");

 
 if(mysqli_num_rows($result)>0)
 {
	$output .='
    <table  bordered="0" class="table">
        <tr>
        <td>sn</td>
            <td>id</td>
            <td>snBn</td>
            <td>snEn</td>
            <td>sbrN</td>
            <td>sdob</td>
            <td>sbp</td>
            <td>sclass</td>
            <td>section</td>
            <td>roll</td>
            <td>religion</td>
            <td>bgroup</td>
            <td>mnid</td>
            <td>mbrN</td>
            <td>mdob</td>
            <td>mnBn</td>
            <td>mnEn</td>
            <td>mmob</td>
            <td>mocu</td>
            <td>mdoy</td>
			<td>fnid</td>
            <td>fbrN</td>
            <td>fdob</td>
            <td>fnBn</td>
            <td>fnEn</td>
            <td>fmob</td>
            <td>focu</td>
            <td>fdoy</td>
            <td>tdiv</td>
            <td>tdis</td>
            <td>tunion</td>
            <td>tpou</td>
            <td>tword</td>
            <td>tmoz</td>
            <td>trdN</td>
            <td>thN</td>
            <td>tpost</td>
            <td>tpcN</td>
			<td>pdiv</td>
			<td>pdis</td>
            <td>punion</td>
            <td>ppou</td>
            <td>pword</td>
            <td>pmoz</td>
            <td>prdN</td>
            <td>phN</td>
            <td>ppost</td>
            <td>ppcN</td>
            <td>gname</td>
            <td>gnid</td>
            <td>gocu</td>
            <td>grel</td>
            <td>gmob</td>
            <td>pic</td>
        </tr>'; 
        while($res = mysqli_fetch_array($result)) 
		{ 
			$output .='<tr>
            <td>'.$res["sn"].'</td>
		<td>'.$res["id"].'</td>
		<td>'.$res["snBn"].'</td>
		<td>'.$res["snEn"].'</td>
		<td>'.$res["sbrN"].'</td>
		<td>'.$res["sdob"].'</td>
		<td>'.$res["sbp"].'</td>
	
		
		<td>'.$res["sclass"].'</td>
		<td>'.$res["section"].'</td>
		 <td>'.$res["roll"].'</td>
		<td>'.$res["religion"].'</td>
		 <td>'.$res["bgroup"].'</td>
		<td>'.$res["mnid"].'</td>
		<td>'.$res["mbrN"].'</td>
		 <td>'. $res["mdob"].'</td>
		 <td>'.$res["mnBn"].'</td>
		 <td>'.$res["mnEn"].'</td>
		
		 <td>'.$res["mmob"].'</td>
		 <td>'.$res["mocu"].'</td>
		 <td>'.$res["mdoy"].'</td>
		 <td>'.$res["fnid"].'</td>
		 <td>'.$res["fbrN"].'</td>
		 <td>'.$res["fdob"].'</td>
		 <td>'.$res["fnBn"].'</td>
		 <td>'.$res["fnEn"].'</td>
		 <td>'.$res["fmob"].'</td>
		 <td>'.$res["focu"].'</td>
		<td>'.$res["fdoy"].'</td>
		 <td>'. $res["tdiv"].'</td>
		 <td>'.$res["tdis"].'</td>
		 <td>'.$res["tunion"].'</td>
		 <td>'.$res["tpou"].'</td>
		 <td>'. $res["tword"].'</td>
		 <td>'.$res["tmoz"].'</td>
		 <td>'. $res["trdN"].'</td>
		 <td>'. $res["thN"].'</td>
		 <td>'. $res["tpost"].'</td>
		
		 
		 <td>'.$res["tpcN"].'</td>
		 <td>'.$res["pdiv"].'</td>
		 <td>'.$res["pdis"].'</td>
		 <td>'.$res["punion"].'</td>
		<td>'.$res["ppou"].'</td>
		 <td>'.$res["pword"].'</td>
		 <td>'.$res["pmoz"].'</td>
		 <td>'. $res["prdN"].'</td>
		<td>'.$res["phN"].'</td>
		 <td>'.$res["ppost"].'</td>
		<td>'.$res["ppcN"].'</td>
		 <td>'.$res["gname"].'</td>
		 <td>'.$res["gnid"].'</td>
		 <td>'.$res["gocu"].'</td>
		<td>'.$res["grel"].'</td>
		<td>'. $res["gmob"].'</td>
		   <td>'.$res["pic"].'</td>
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
	



<?php
//including the database connection file
include_once("config.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM grade_point ORDER BY sn DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM sfdata ORDER BY sn DESC"); // using mysqli_query instead
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
 
    <table width='80%' border=1 >
        <tr bgcolor='#CCCCCC'>
             <th>1.Serial No</th>
           <th>2.Student ID</th>
         <th>3.Student Name(Bangla)</th>
		   <th>4.Student Name(English)</th>
		  <th>5.Birth Reg. No</th>
		  <th>6.Date of Birth</th>
		  <th>7.Birth Place</th>
		   <th>8.Class</th>
		    <th>9.Group</th>
		     <th>10.Roll</th>
		   <th>11.Religion</th>
		   <th>12.Blood Group</th>
		  <th>13.Mother's NID</th>
		  <th>14.Mother's Birth Reg.No</th>
		  <th>15.Mother's Date of Birth</th>
		 <th>16.Mother's Name(Ban)</th>
		 <th>17.Mother's Name(Eng)</th>
		  <th>18.Mother's Mobile No</th>
		  <th>19.Mother's Occupation</th>
		  <th>20.Mother's Death Year</th>
		 <th>21.Father's NID</th>
		  <th>22.Father's Birth Reg.No</th>
		 <th>23.Father's Date of Birth</th>
		 <th>24.Father's Name(Ban)</th>
		 <th>25.Father's Name(Eng)</th>
		 <th>26.Father's Mobile No</th>
		 <th>27.Father's Ocupation</th>
		  <th>28.Father's Death Year</th>
		 <th>29.Present Div</th>
		 <th>30.Present Dist</th>
		  <th>31.Present Union</th>
		 <th>32.Present Pourosova</th>
		 <th>33.Present Word No</th>
		   <th>34.Present Mouja</th>
		   <th>35.Present Road No</th>
		    <th>36.Present House No</th>
		 <th>37.Present Post</td>
		  <th>38.Present Post Code</th>
		  <th>39.Permanent Div</th>
		    <th>40.Permanent Dist</th>
		   <th>41.Permanent Union</th>
		   <th>42.Permanent Pourosova</th>
		  <th>43.Permanent Word No</th>
		   <th>44.Permanent Mouja</th>
		    <th>45.Permanent Road No</th>
		    <th>46.Permanent House No</th>
			 <th>47.Permanent Post</th>
			 <th>48.Permanent Post Code</th>
			 <th>49.Guardian's Name</th>
			 <th>50.Guardian's NID</th>
			 <th>51.Guardian's Ocupation</th>
			 <th>52.Relation with Guardian</th>
			 <th>53.Guardian's Mobile No</th>
			 <th>54.Picture</th>
			 <th>55.Action</th>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
              echo "<td>".$res['sn']."</td>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['snBn']."</td>";
            echo "<td>".$res['snEn']."</td>";
            echo "<td>".$res['sbrN']."</td>";
            echo "<td>".$res['sdob']."</td>";
            echo "<td>".$res['sbp']."</td>";
            echo "<td>".$res['sclass']."</td>";
            echo "<td>".$res['section']."</td>";
            echo "<td>".$res['roll']."</td>";
            echo "<td>".$res['religion']."</td>";
            echo "<td>".$res['bgroup']."</td>";
            echo "<td>".$res['mnid']."</td>";
            echo "<td>".$res['mbrN']."</td>";
            echo "<td>".$res['mdob']."</td>";
            echo "<td>".$res['mnBn']."</td>";
            echo "<td>".$res['mnEn']."</td>";
            echo "<td>".$res['mmob']."</td>";
            echo "<td>".$res['mocu']."</td>";
            echo "<td>".$res['mdoy']."</td>";
             echo "<td>".$res['fnid']."</td>";
            echo "<td>".$res['fbrN']."</td>";
            echo "<td>".$res['fdob']."</td>";
            echo "<td>".$res['fnBn']."</td>";
            echo "<td>".$res['fnEn']."</td>";
            echo "<td>".$res['fmob']."</td>";
            echo "<td>".$res['focu']."</td>";
            echo "<td>".$res['fdoy']."</td>";
            echo "<td>".$res['tdiv']."</td>";
            echo "<td>".$res['tdis']."</td>";
            echo "<td>".$res['tunion']."</td>";
            echo "<td>".$res['tpou']."</td>";
            echo "<td>".$res['tword']."</td>";
            echo "<td>".$res['tmoz']."</td>";
            echo "<td>".$res['trdN']."</td>";
            echo "<td>".$res['thN']."</td>";
            echo "<td>".$res['tpost']."</td>";
            echo "<td>".$res['tpcN']."</td>";
            echo "<td>".$res['pdiv']."</td>";
            echo "<td>".$res['pdis']."</td>";
            echo "<td>".$res['punion']."</td>";
            echo "<td>".$res['ppou']."</td>";
            echo "<td>".$res['pword']."</td>";
            echo "<td>".$res['pmoz']."</td>";
            echo "<td>".$res['prdN']."</td>";
            echo "<td>".$res['phN']."</td>";
            echo "<td>".$res['ppost']."</td>";
            echo "<td>".$res['ppcN']."</td>";
            echo "<td>".$res['gname']."</td>";
            echo "<td>".$res['gnid']."</td>";
            echo "<td>".$res['gocu']."</td>";
            echo "<td>".$res['grel']."</td>";    
            echo "<td>".$res['gmob']."</td>";    
            echo "<td>".$res['pic']."</td>";
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


<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {     
 	$sn=$_POST['sn'];
		$id = $_POST['id'];
		$snBn = $_POST['snBn'];
		$snEn = $_POST['snEn'];
		$sbrN = $_POST['sbrN'];
		$sdob = $_POST['sdob'];
		$sbp = $_POST['sbp'];
		$sclass = $_POST['sclass'];
		$section = $_POST['section'];
		$roll = $_POST['roll'];
		$religion = $_POST['religion'];
		$bgroup = $_POST['bgroup'];
		$mnid = $_POST['mnid'];
		$mbrN = $_POST['mbrN'];
		$mdob = $_POST['mdob'];
		$mnBn = $_POST['mnBn'];
		$mnEn = $_POST['mnEn'];
		$mmob = $_POST['mmob'];
		$mocu = $_POST['mocu'];
		$mdoy = $_POST['mdoy'];
		$fnid = $_POST['fnid'];
		$fbrN = $_POST['fbrN'];
		$fdob = $_POST['fdob'];
		$fnBn = $_POST['fnBn'];
		$fnEn = $_POST['fnEn'];
		$fmob = $_POST['fmob'];
		$focu = $_POST['focu'];
		$fdoy = $_POST['fdoy'];
		$tdiv = $_POST['tdiv'];
		$tdis = $_POST['tdis'];
		$tunion = $_POST['tunion'];
		$tpou = $_POST['tpou'];
		$tword = $_POST['tword'];
		$tmoz = $_POST['tmoz'];
		$trdN = $_POST['trdN'];
		$thN = $_POST['thN'];
		$tpost = $_POST['tpost'];
		$tpcN = $_POST['tpcN'];
		$pdiv = $_POST['pdiv'];
		$pdis = $_POST['pdis'];
		$punion = $_POST['punion'];
		$ppou = $_POST['ppou'];
		$pword = $_POST['pword'];
		$pmoz = $_POST['pmoz'];
		$prdN = $_POST['prdN'];
		$phN = $_POST['phN'];
		$ppost = $_POST['ppost'];
		$ppcN = $_POST['ppcN'];
		$gname = $_POST['gname'];
		$gnid = $_POST['gnid'];
		$gocu = $_POST['gocu'];
		$grel = $_POST['grel'];
		$gmob = $_POST['gmob'];
		$pic = $_POST['pic'];
        
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
        $result = mysqli_query($mysqli, "INSERT INTO sfdata(
       	sn,
		id,
		snBn,
		snEn,
		sbrN,
		sdob,
		sbp,
		sclass,
		section,
		roll,
		religion,
		bgroup,
		mnid,
		mbrN,
		mdob,
		mnBn,
		mnEn,
		mmob,
		mocu,
		mdoy,
		fnid,
		fbrN,
		fdob,
		fnBn,
		fnEn,
		fmob,
		focu,
		fdoy,
		tdiv,
		tdis,
		tunion,
		tpou,
		tword,
		tmoz,
		trdN,
		thN,
		tpost,
		tpcN,
		pdiv,
		pdis,
		punion,
		ppou,
		pword,
		pmoz,
		prdN,
		phN,
		ppost,
		ppcN,
		gname,
		gnid,
		gocu,
		grel,
		gmob,
		pic
		) VALUES(
		'$sn',
		'$id',
		'$snBn',
		'$snEn',
		'$sbrN',
		'$sdob',
		'$sbp',
		'$sclass',
		'$section',
		'$roll',
		'$religion',
		'$bgroup',
		'$mnid',
		'$mbrN',
		'$mdob',
		'$mnBn',
		'$mnEn',
		'$mmob',
		'$mocu',
		'$mdoy',
		'$fnid',
		'$fbrN',
		'$fdob',
		'$fnBn',
		'$fnEn',
		'$fmob',
		'$focu',
		'$fdoy',
		'$tdiv',
		'$tdis',
		'$tunion',
		'$tpou',
		'$tword',
		'$tmoz',
		'$trdN',
		'$thN',
		'$tpost',
		'$tpcN',
		'$pdiv',
		'$pdis',
		'$punion',
		'$ppou',
		'$pword',
		'$pmoz',
		'$prdN',
		'$phN',
		'$ppost',
		'$ppcN',
		'$gname',
		'$gnid',
		'$gocu',
		'$grel',
		'$gmob',
		'$pic'
        )");
        
        //display success message
       // echo "<font color='green'>Data added successfully.";
        //echo "<br/><a href='index.php'>View Result</a>";
       header("location:index.php");
	
    }
}
?>

</body>
</html>


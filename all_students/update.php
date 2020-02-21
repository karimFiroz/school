	
<?php

// including the database connection file
include_once("config.php");
 
$sn = $_GET['sn'];

if(isset($_POST['update']))
{
		$sn = $_POST['sn'];
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
	      
if($sn=='' || $id=='' || $roll==''){
	
$error="Field must not be empty!!";	
}else{
	
	$query="UPDATE sfdata
	SET
  			sn='$sn',
		id='$id',
		snBn='$snBn',
		snEn='$snEn',
		sbrN='$sbrN',
		sdob='$sdob',
		sbp='$sbp',
		sclass='$sclass',
		section='$section',
		roll='$roll',
		religion='$religion',
		bgroup='$bgroup',
		mnid='$mnid',
		mbrN'$mbrN',
		mdob='$mdob',
		mnBn='$mnBn',
		mnEn='$mnEn',
		mmob='$mmob',
		mocu='$mocu',
		mdoy='$mdoy',
		fnid='$fnid',
		fbrN='$fbrN',
		fdob='$fdob',
		fnBn='$fnBn',
		fnEn='$fnEn',
		fmob='$fmob',
		focu='$focu',
		fdoy='$fdoy',
		tdiv='$tdiv',
		tdis='$tdis',
		tunion='$tunion',
		tpou='$tpou',
		tword='$tword',
		tmoz='$tmoz',
		trdN='$trdN',
		thN='$thN',
		tpost='$tpost',
		tpcN='$tpcN',
		pdiv='$pdiv',
		pdis='$pdis',
		punion='$punion',
		ppou='$ppou',
		pword='$pword',
		pmoz='$pmoz',
		prdN='$prdN',
		phN='$phN',
		ppost='$ppost',
		ppcN='$ppcN',
		gname='$gname',
		gnid='$gnid',
		gocu='$gocu',
		grel='$grel',
		gmob='$gmob',
		pic='$pic'

	Where id = $id";
	
	 //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
//}else{
			//echo "Not updated";
		//}
<?php
//getting id from url
$sn = $_GET['sn'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM sfdata WHERE sn=$sn");
 
while($res = mysqli_fetch_array($result))
{
   	$sn = $res['sn'];
		$id = $res['id'];
		$snBn = $res['snBn'];
		$snEn = $res['snEn'];
		$sbrN = $res['sbrN'];
		$sdob = $res['sdob'];
		$sbp = $res['sbp'];
		$sclass = $res['sclass'];
		$section = $res['section'];
		$roll = $res['roll'];
		$religion =$res['religion'];
		$bgroup =$res['bgroup'];
		$mnid =$res['mnid'];
		$mbrN = $res['mbrN'];
		$mdob = $res['mdob'];
		$mnBn = $res['mnBn'];
		$mnEn =$res['mnEn'];
		$mmob =$res['mmob'];
		$mocu =$res['mocu'];
		$mdoy = $res['mdoy'];
		$fnid =$res['fnid'];
		$fbrN =$res['fbrN'];
		$fdob = $res['fdob'];
		$fnBn =$res['fnBn'];
		$fnEn = $res['fnEn'];
		$fmob =$res['fmob'];
		$focu = $res['focu'];
		$fdoy =$res['fdoy'];
		$tdiv = $res['tdiv'];
		$tdis = $res['tdis'];
		$tunion =$res['tunion'];
		$tpou =$res['tpou'];
		$tword = $res['tword'];
		$tmoz =$res['tmoz'];
		$trdN = $res['trdN'];
		$thN =$res['thN'];
		$tpost = $res['tpost'];
		$tpcN =$res['tpcN'];
		$pdiv =$res['pdiv'];
		$pdis =$res['pdis'];
		$punion =$res['punion'];
		$ppou =$res['ppou'];
		$pword =$res['pword'];
		$pmoz = $res['pmoz'];
		$prdN = $res['prdN'];
		$phN = $res['phN'];
		$ppost =$res['ppost'];
		$ppcN =$res['ppcN'];
		$gname =$res['gname'];
		$gnid =$res['gnid'];
		$gocu =$res['gocu'];
		$grel =$res['grel'];
		$gmob = $res['gmob'];
		$pic = $res['pic'];
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
                <td>1.Serial No:</td>
                <td><input type="text" name="sn"value="<?php echo $sn;?>"></td>
            </tr>
           
			 <tr> 
                <td>2.ID:</td>
                <td><input type="text" name="id"value="<?php echo $id;?>"></td>
            </tr>
            <tr> 
                <td>3.Name(Bangla)</td>
                <td><input type="text" name="snBn"value="<?php echo $snBn;?>"></td>
            </tr>
			   <tr> 
                <td>4.Name(English)</td>
                <td><input type="text" name="snEn"value="<?php echo $snEn;?>"></td>
            </tr>
            <tr> 
                <td>5.Birth Registration No</td>
                <td><input type="text" name="sbrN"value="<?php echo $sbrN;?>"></td>
            </tr>
            <tr> 
                <td>6.Date of Birth</td>
                <td><input type="text" name="sdob"value="<?php echo $sdob;?>"></td>
            </tr>
			   <tr> 
                <td>7.Birth Place</td>
                <td><input type="text" name="sbp"value="<?php echo $sbp;?>"></td>
            </tr>
            <tr> 
                <td>8.Class</td>
                <td><input type="text" name="sclass"value="<?php echo $sclass;?>"></td>
            </tr>
            <tr> 
                <td>9.Group</td>
                <td><input type="text" name="section"value="<?php echo $section;?>"></td>
            </tr>
			
			   <tr> 
                <td>10.Roll</td>
                <td><input type="text" name="roll"value="<?php echo $roll;?>"></td>
            </tr>
            <tr> 
                <td>11.Religion</td>
                <td><input type="text" name="religion"value="<?php echo $religion;?>"></td>
            </tr>
            <tr> 
                <td>12.Blood Group</td>
                <td><input type="text" name="bgroup"value="<?php echo $bgroup;?>"></td>
            </tr>
             
			   <tr> 
                <td>13.Mother's NID</td>
                <td><input type="text" name="mnid"value="<?php echo $mnid;?>"></td>
            </tr>
            <tr> 
                <td>14.Mother's Birth Reg.No</td>
                <td><input type="text" name="mbrN"value="<?php echo $mbrN;?>"></td>
            </tr>
            <tr> 
                <td>15.Mother's Date of Birth</td>
                <td><input type="text" name="mdob"value="<?php echo $mdob;?>"></td>
            </tr>
			   <tr> 
                <td>16.Mother's Name(Bangla)</td>
                <td><input type="text" name="mnBn"value="<?php echo $mnBn;?>"></td>
            </tr>
            <tr> 
                <td>17.Mother's Name(English)</td>
                <td><input type="text" name="mnEn"value="<?php echo $mnEn;?>"></td>
            </tr>
            <tr> 
                <td>18.Mother's Mobile No</td>
                <td><input type="text" name="mmob"value="<?php echo $mmob;?>"></td>
            </tr>
			   <tr> 
                <td>19.Mother's Ocupation</td>
                <td><input type="text" name="mocu"value="<?php echo $mocu;?>"></td>
            </tr>
            <tr> 
                <td>20.Mother's Death Year</td>
                <td><input type="text" name="mdoy"value="<?php echo $mdoy;?>"></td>
            </tr>
            
			<tr> 
                <td>21.Father's NID</td>
                <td><input type="text" name="fnid"value="<?php echo $fnid;?>"></td>
            </tr>
            <tr> 
                <td>22.Father's Birth Reg.No</td>
                <td><input type="text" name="fbrN"value="<?php echo $fbrN;?>"></td>
            </tr>
            <tr> 
                <td>23.Father's Date of Birth</td>
                <td><input type="text" name="fdob"value="<?php echo $fdob;?>"></td>
            </tr>
			   <tr> 
                <td>24.Father's Name(Bangla)</td>
                <td><input type="text" name="fnBn"value="<?php echo $fnBn;?>"></td>
            </tr>
            <tr> 
                <td>25.Father's Name(English)</td>
                <td><input type="text" name="fnEn"value="<?php echo $fnEn;?>"></td>
            </tr>
            <tr> 
                <td>26.Father's Mobile No</td>
                <td><input type="text" name="fmob"value="<?php echo $fmob;?>"></td>
            </tr>
			   <tr> 
                <td>27.Father's Ocupation</td>
                <td><input type="text" name="focu"value="<?php echo $focu;?>"></td>
            </tr>
            <tr> 
                <td>28.Father's Death Year</td>
                <td><input type="text" name="fdoy"value="<?php echo $fdoy;?>"></td>
            </tr>
             
            <tr> 
                <td>29.Present Division</td>
                <td><input type="text" name="tdiv"value="<?php echo $tdiv;?>"></td>
            </tr>
			   <tr> 
                <td>30.Present District</td>
                <td><input type="text" name="tdis"value="<?php echo $tdis;?>"></td>
            </tr>
            <tr> 
                <td>31.Present Union</td>
                <td><input type="text" name="tunion"value="<?php echo $tunion;?>"></td>
            </tr>
            <tr> 
                <td>32.Present Pourosova</td>
                <td><input type="text" name="tpou"value="<?php echo $tpou;?>"></td>
            </tr>
			   <tr> 
                <td>33.Present Word No</td>
                <td><input type="text" name="tword"value="<?php echo $tword;?>"></td>
            </tr>
            <tr> 
                <td>34.Present Mouja</td>
                <td><input type="text" name="tmoz"value="<?php echo $tmoz;?>"></td>
            </tr>
            <tr> 
                <td>35.Present Road No</td>
                <td><input type="text" name="trdN"value="<?php echo $trdN;?>"></td>
            </tr>
			   <tr> 
                <td>36.Present House No</td>
                <td><input type="text" name="thN"value="<?php echo $thN;?>"></td>
            </tr>
            <tr> 
                <td>37.Present Post Office</td>
                <td><input type="text" name="tpost"value="<?php echo $tpost;?>"></td>
            </tr>
            <tr> 
                <td>38.Present Post Code No</td>
                <td><input type="text" name="tpcN"value="<?php echo $tpcN;?>"></td>
            </tr>
             
			 <tr> 
                <td>39.Permanent Division</td>
                <td><input type="text" name="pdiv"value="<?php echo $pdiv;?>"></td>
            </tr>
			   <tr> 
                <td>40.Permanent District</td>
                <td><input type="text" name="pdis"value="<?php echo $pdis;?>"></td>
            </tr>
            <tr> 
                <td>41.Permanent Union</td>
                <td><input type="text" name="punion"value="<?php echo $punion;?>"></td>
            </tr>
            <tr> 
                <td>42.Permanent Pourosova</td>
                <td><input type="text" name="ppou"value="<?php echo $ppou;?>"></td>
            </tr>
			   <tr> 
                <td>43.Permanent Word No</td>
                <td><input type="text" name="pword"value="<?php echo $pword;?>"></td>
            </tr>
            <tr> 
                <td>44.Permanent Mouja</td>
                <td><input type="text" name="pmoz"value="<?php echo $pmoz;?>"></td>
            </tr>
            <tr> 
                <td>45.Permanent Road No</td>
                <td><input type="text" name="prdN"value="<?php echo $prdN;?>"></td>
            </tr>
			   <tr> 
                <td>46.Permanent House No</td>
                <td><input type="text" name="phN"value="<?php echo $phN;?>"></td>
            </tr>
            <tr> 
                <td>47.Permanent Post Office</td>
                <td><input type="text" name="ppost"value="<?php echo $ppost;?>"></td>
            </tr>
            <tr> 
                <td>48.Permanent Post Code No</td>
                <td><input type="text" name="ppcN"value="<?php echo $ppcN;?>"></td>
            </tr>
             
			   <tr> 
                <td>49.Guardian's Name</td>
                <td><input type="text" name="gname"value="<?php echo $gname;?>"></td>
            </tr>
            <tr> 
                <td>50.Guardian's NID</td>
                <td><input type="text" name="gnid"value="<?php echo $gnid;?>"></td>
            </tr>
            <tr> 
                <td>51.Guardian's Ocupation</td>
                <td><input type="text" name="gocu"value="<?php echo $gocu;?>"></td>
            </tr>
			   <tr> 
                <td>52.Guardian's Relation</td>
                <td><input type="text" name="grel"value="<?php echo $grel;?>"></td>
            </tr>
            <tr> 
                <td>53.Guardian's Mobile No</td>
                <td><input type="text" name="gmob"value="<?php echo $gmob;?>"></td>
            </tr>
            <tr> 
                <td>54.Picture</td>
                <td><input type="text" name="pic"value="<?php echo $pic;?>"></td>
            </tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
	</div>
</body>
</html>
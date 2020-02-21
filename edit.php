		<?php
		$sn=$_GET['SN'];
		$conn=mysqli_connect('localhost','root','','firozshah');//ok
		$sql="select * from stdsalary where SN=$sn;";//ok
		$result=mysqli_query($conn,$sql);//ok
		$std=mysqli_fetch_assoc($result);//ok
		?>
		<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div align="center"><img src="<?php echo $std["pic"];?>" height="200" width="200" /></div>
	<form method='POST' action='update.php?SN=<?php echo $std['SN']?>' >
	<table>
		<tr>
		<td>SN:</td>
		<td><input type='text' name='SN'placeholder="SN" value="<?php echo $std['SN'] ?>"></td>
		</tr>
		<tr>
		<td>Date:</td>
		<td><input type='text' name='date'placeholder="date" value="<?php echo $std['date'] ?>"></td>
		</tr>
		
		<tr>
		<td>ID:</td>
		<td><input type='text' name='id'placeholder="id" value="<?php echo $std['id'] ?>"></td>
		</tr>
		<tr>
		<td>stdName:</td>
		<td><input type='text' name='stdName'placeholder="stdName" value="<?php echo $std['stdName'] ?>"></td>
		</tr>
		<tr>
		<td>fName:</td>
		<td><input type='text' name='fName'placeholder="fName" value="<?php echo $std['fName'] ?>"></td>
		</tr>
		<tr>
		<td>mName:</td>
		<td><input type='text' name='mName'placeholder="mName" value="<?php echo $std['mName'] ?>"></td>
		</tr>
		<tr>
		<td>section:</td>
		<td><input type='text' name='section'placeholder="section" value="<?php echo $std['section'] ?>"></td>
		</tr>
		<tr>
		<td>Receipt No:</td>
		<td><input type='text' name='receiptNo'placeholder="Receipt No" value="<?php echo $std['receiptNo'] ?>"></td>
		</tr>
		<tr>
		<td>Roll:</td>
		<td><input type='text' name='roll'placeholder="Roll" value="<?php echo $std['roll'] ?>"></td>
		</tr>
		<tr>
		<td>Months:</td>
		<td><input type='text' name='months'placeholder="Months" value="<?php echo $std['months'] ?>"></td>
		</tr>
		
		
		<tr>
		<td>Re_admission:</td>
		<td><input type='text' name='re_admission'placeholder="Re-Admission" value="<?php echo $std['re_admission'] ?>"></td>
		</tr>
		
		
		
		<tr>
		<td>Guide:</td>
		<td><input type='text' name='guide'placeholder="Guide Fee" value="<?php echo $std['guide'] ?>"></td>
		</tr>
		<tr>
		<td>Red_Crecent:</td>
		<td><input type='text' name='red_crecent'placeholder="Red Crecent" value="<?php echo $std['red_crecent'] ?>"></td>
		</tr>
		<tr>
		<td>Current:</td>
		<td><input type='text' name='current'placeholder="Current" value="<?php echo $std['current'] ?>"></td>
		</tr>
		
		
		<tr>
		<td>Dues:</td>
		<td><input type='text' name='dues'placeholder="Dues" value="<?php echo $std['dues'] ?>"></td>
		</tr>
		<tr>
		<td>Advance:</td>
		<td><input type='text' name='advance'placeholder="Advance" value="<?php echo $std['advance'] ?>"></td>
		</tr>	
		<tr>
		<td>examFee:</td>
		<td><input type='text' name='examFee'placeholder="ExamFee" value="<?php echo $std['examFee'] ?>"></td>
		</tr>
		
		
		<tr>
		<td>others:</td>
		<td><input type='text' name='others'placeholder="others" value="<?php echo $std['others'] ?>"></td>
		</tr>
		<tr>
		<td>School:</td>
		<td><input type='text' name='school'placeholder="school" value="<?php echo $std['school'] ?>"></td>
		</tr>
		<tr>
		<td>CCC:</td>
		<td><input type='text' name='ccc'placeholder="ccc" value="<?php echo $std['ccc'] ?>"></td>
		</tr>
		<tr>
		<td>Admitcard:</td>
		<td><input type='text' name='admitcard' placeholder="admitcard" value="<?php echo $std['admitcard'] ?>"></td>
		</tr>
	
			<tr>
		<td>Syllebus:</td>
		<td><input type='text' name='syllebus'placeholder="Total" value="<?php echo $std['syllebus'] ?>"></td>
		</tr>
		<tr>
		
		<tr>
		<td>Total:</td>
		<td><input type='text' name='total'placeholder="Total" value="<?php echo $std['total'] ?>"></td>
		</tr>
		<tr>
		<td>Pic:</td>
		<td><input type='text' name='pic'placeholder="pic" value="<?php echo $std['pic'] ?>"></td>
		</tr>
		<tr>
		<td>Phone:</td>
		<td><input type='text' name='phone'placeholder="phone" value="<?php echo $std['phone'] ?>"></td>
		</tr>
		
			<tr>
			<td></td>
			<td align='right'><input type='submit' name='update' value='Update'></td>
			</tr>
			
		</table	
	</form>
	
		    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<div align="center"><a class="btn btn-info" href="stdsalary.php">All Student List!</a><br /></div><br /><br />
  </body>
</html>
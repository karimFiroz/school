<?php include('include/header.php');?>
<!DOCTYPE html>
<html>
<head><title>Registration Forms</title>

<meta charset="UTF-8">
</head>
<body>
<h1 align="center">Registron Forms</h1>
<div align="center">



<?php

echo "<a href='http://localhost/phpmyadmin/sql.php?server=1&db=firozshah&table=stdsalary&pos=0&token=cb48ad4bb5c733a0e2d65a4dcb49f0e5' target='_blank'><strong>Querry</strong></a>"."<br />";
echo "<a href='http://localhost/firozshah/result/index.php' target='_blank'><strong>Edit result</strong></a>"."<br />";

echo "<a href='admission.php'><strong>Admission</strong></a>"."<br />";

echo "<a  href='users.php'><strong>View Users</strong></a>"."<br />";

echo "<a href='inputsalary.php'><strong>Input Salary</strong></a>"."<br />";
echo "<a href='all_students/index.php'target=' _blank'><strong>all_students</strong></a>"."<br />";



echo "<a href='students.php'><strong>View Pstudents</strong></a>"."<br />";

echo "<a href='stdsalary.php'><strong>Students(Class_X)</strong></a>"."<br />";

echo "<a href='pstudents.php'><strong>View salary Pstudents</strong></a>"."<br />";

echo "<a href='registration.php'><strong>Pstudent Registration</strong></a>"."<br />";


echo "<a href='pstudentsForm.php'><strong>Input Salary Pstudents</strong></a>"."<br />";
?>

</div>
	</body>
	<html>
<?php include('include/footer.php');?>
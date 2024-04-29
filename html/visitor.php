<?php
$n=$_POST['name'];
$c=$_POST['pno'];
$a=$_POST['gender'];
$b=$_POST['company'];
$d=$_POST['purpose'];
$e=$_POST['intime'];
$f=$_POST['outtime'];
$con=mysqli_connect(","","","");
$sql="INSERT INTO vis(Name,Ph_no,Gender,Company,Purpose,In_Time,Out_Time) values('$n','$c','$a','$b','$d','$e','$f')";
$r=mysqli_query($con,$sql);
if($r)
{
	echo "DETAILS ADDED SUCCESSFULLY";
}
else
{
	echo "DETAILS NOT ADDED";
}
?>
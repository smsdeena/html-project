<?php
$n=$_POST['name'];
$c=$_POST['password'];
$con=mysqli_connect("localhost","root","","reg");
$sql="INSERT INTO log(id,password) values('$n','$c')";
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
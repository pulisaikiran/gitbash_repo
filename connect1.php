
<?php

$servername = "localhost";

$username="root";

$password="";

$dbname="info1";





if(isset($_REQUEST['fullname'])){
	$con = mysqli_connect('localhost', 'root', '','info1');


$fullname=$_REQUEST['fullname'];

$email=$_REQUEST['email'];

$phone=$_REQUEST['phone'];



$resume=$_REQUEST['resume'];




$sql = "INSERT INTO `users1`(`fullname`, `email`, `phone`,  `resume`) 
 VALUES ('$fullname','$email','$phone','$resume')";

$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
 mysqli_close($con);
?>
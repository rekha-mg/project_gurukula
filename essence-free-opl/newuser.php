<?php
session_start();
/*$link=mysqli_connect("localhost","root","","smart");
if($link==false)
{
	die("error:could not connect." .mysqli_connect_error());
}*/ 

$fname=$_POST["name"];
$email=$_POST["email"];
$usname2=$_POST["username"];


$pass=$_POST["pass"];
$rpass=$_POST["repeat-pass"];

$phno=$_POST["phno"];


$pass2=$_POST["ps"];

echo $usname2."-".$pass2;

/*$sql3="select * from signup where username='$usname2' and password='$pass2'";
if($res3=mysqli_query($link, $sql3))
{
	

while($rows=mysqli_fetch_array($res3))
	{
		$unm=$rows["Username"];
	}
	$_SESSION["name"]=$unm; //username

    $rowcount=mysqli_num_rows($res3);
}
if($rowcount==1)
{
	header("location:llrdetails2.php");
	
}
else
{
	echo "enter correct username and password";
}*/

/*
$sql="select * from signup where username='$usname' and password='$pass'";

if($res=mysqli_query($link, $sql))
{
	while($rows=mysqli_fetch_array($res)) 
	{
		
	}
	
	$rowcount=mysqli_num_rows($res);
}

if($rowcount==1)
{
	echo "Username  already exist";
	
}
else
{
	$sql2="INSERT INTO signup VALUES('$rpass','$email','$phno','$usname','$pass')";

if(mysqli_query($link,$sql2))
{
	header("location:signup2.php");
}
else
{
	echo "error:could not insert";
}
}*/
?>
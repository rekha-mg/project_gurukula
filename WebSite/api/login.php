<?php

  $entityBody = file_get_contents('php://input');
  $requestObject=json_decode($entityBody,true);
  header('Content-Type: application/json');
 // store request object to database...

  //echo json_encode($requestObject["username"]);
  //echo json_encode($requestObject["name"]);
 $nm=$requestObject["name"];
$id=$requestObject["emailid"];
$pswd = $requestObject["password"];

$link=mysqli_connect("localhost","root","","tutor");
//Sign in form --------
	$name=$nm;
	$eml=$id;
	//if(isset($_POST["your_pass"]) && isset($_POST['email']))
	//{
		//$pswd=$_POST["your_pass"];
		//$eml=$_POST["email"];

		$sql="SELECT * FROM user WHERE Email_id='$eml' and Password='$pswd' ";
		$res=mysqli_query($link,$sql);
		$rowcount=mysqli_num_rows($res);
		if($rowcount==1)
		{
			$row = mysqli_fetch_row($res);
			$name=$row[0];
			echo json_encode("Welcome ".$name);
		}

		
	//}
	else
	{
		echo json_encode("U r not member ,plz register ".$name);
	}
?>
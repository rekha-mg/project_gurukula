<?php

$entityBody = file_get_contents('php://input');
$requestObject=json_decode($entityBody,true);
header('Content-Type: application/json');
 // store request object to database...

 
$nm=$requestObject["Name"];
$id=$requestObject["email_id"];
$pswd = $requestObject["Password"];

$link=mysqli_connect("localhost","root","","tutor");
//Sign in form --------
	
$eml=$id;

$responseObj = new stdClass();

$sql="SELECT * FROM user WHERE Email_id='$eml' and Password='$pswd' ";
$res=mysqli_query($link,$sql);
$rowcount=mysqli_num_rows($res);
if($rowcount==1)
{
	$row = mysqli_fetch_row($res);
			
	$responseObj->loggedin_user = $row[0];
	$responseObj->status = "success";
	http_response_code(200);

}

else
{
	$responseObj->status = "user not registered";
	http_response_code(500);

}

$responseJSON = json_encode($responseObj); 
echo $responseJSON;

?>
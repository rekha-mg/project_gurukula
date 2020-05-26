<?php

  $entityBody = file_get_contents('php://input');
  $requestObject=json_decode($entityBody,true);
  header('Content-Type: application/json');
 // store request object to database...

 
 //echo json_encode($requestObject["name"]);
 $nm=$requestObject["name"];
$id=$requestObject["emailid"];
$pswd = $requestObject["password"];
$link=mysqli_connect("localhost","root","","tutor");
//Sign in form --------
	$name=$nm;
	$eml=$id;
	// Sign up form -------
		/*if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$usnm = trim($_POST['name']);
			$pswd1=trim($_POST['pass']);
			$pswd2=trim($_POST['re_pass']);
			$eml=trim($_POST['nemail']);
		}	*/

		$sql="SELECT * FROM user WHERE Email_id='$id' ";



		if($res=mysqli_query($link,$sql))
		{
			$rowcount=mysqli_num_rows($res);
			if($rowcount ==1)
			{
				echo "U Already exist.. ".$nm;
				//header("location:userlg.html");
			}
			else
 				{ // New user insertion
 					$sqll="INSERT INTO user(Name,Email_id,Password) VALUES ('$nm','$id','$pswd')";
 					$name=$nm;
 					if(mysqli_query($link,$sqll))
 					{
 						echo  "Registerd successfully ".$name;
						//header("Location:http://localhost/e_class_php_project/WebSite/userlng.php");
 					}
 					else
 					{
 						echo "Error: could not insert";

 					}
 				}

 			}

 			

 		

?>
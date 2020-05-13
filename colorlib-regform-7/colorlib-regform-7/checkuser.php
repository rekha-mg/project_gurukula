<?php

session_start();
$link=mysqli_connect("localhost","root","","tutor");

  if($link==false)
  {
      die("error in connection");
  }
if($_SERVER["REQUEST_METHOD"]=="POST")
{
//$usnm = trim($_POST['name']);

$pswd=trim($_POST['your_pass']);
$eml=trim($_POST['email']);
}

$sql="SELECT * FROM user WHERE Email_id='$eml' ";
 if($res=mysqli_query($link,$sql))
{


/*if (!$res) {
    //echo 'Could not run query: ' . mysql_error();
    //exit;
}
else
{
	*/
	$rowcount=mysqli_num_rows($res);
	if($rowcount==1)
	{
		$row = mysqli_fetch_row($res);
		$name=$row[0];
		$_SESSION["name"]=$name;
	     //echo json_encode($name);
	   header("Location:http://localhost/rekha/WebSite/userlgn.php");
	   //header("Location:http://localhost/rekha/WebSite/dest.php");
}
}
else
{
    echo "Not a member";  
}



//echo $row[0]; // 42

//echo $row[1];


   

 

?>

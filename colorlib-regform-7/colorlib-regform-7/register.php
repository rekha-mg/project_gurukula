<?php


$link=mysqli_connect("localhost","root","","tutor");

  if($link==false)
  {
      die("error in connection");
  }
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$usnm = trim($_POST['name']);
$pswd1=trim($_POST['pass']);
$pswd2=trim($_POST['re_pass']);
$eml=trim($_POST['nemail']);
}

$sql="SELECT * FROM user WHERE Email_id='$eml' ";



if($res=mysqli_query($link,$sql))
{
$rowcount=mysqli_num_rows($res);


if($rowcount ==1)
{
 //echo "Already exist. ".$uname;
header("location:userlg.html");
}
 else
 { // New user insertion
$sqll="INSERT INTO user(Name,Email_id,Password) VALUES ('$usnm','$eml','$pswd1')";

if(mysqli_query($link,$sqll))
{
echo  "Records inserted successfully";
header("Location:http://localhost/e_class_php_project/WebSite/index.php");
}
else
{
echo "Error: could not insert";

}
   }

 }

?>

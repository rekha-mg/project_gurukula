<?php
//  background: red;
$link=mysqli_connect("localhost","root","","tutor");
if($link==false)
  {
      die("error in connection");
  }
$sql="select * from tab1 where status=1";
if($result=mysqli_query($link,$sql))
{
$json_array=array();

while($row=mysqli_fetch_assoc($result))
{
	$json_array[]=$row;
}
header('Content-Type: application/json');
echo json_encode($json_array);
}
?>


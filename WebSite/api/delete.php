<?php
$entityBody = file_get_contents('php://input');
  $requestObject=json_decode($entityBody,true);
  header('Content-Type: application/json');
 // store request object to database...

  //echo json_encode($requestObject["username"]);
  //echo json_encode($requestObject["name"]);
 
$id=$requestObject["id"];

$link=mysqli_connect("localhost","root","","tutor");

if($link==false)
{
  die("error in connection");
}

//if (isset($_GET['delete'])) {
  //$id = $_GET['delete'];
$img_name="";
  $sql="SELECT * FROM tab1 WHERE id='$id' ";
  $res=mysqli_query($link,$sql);
  $rowcount=mysqli_num_rows($res);
  if($rowcount==1)
  {
    $row = mysqli_fetch_row($res);
    $img_name=$row['img_name'];
  }

  //echo $name."<br>";
  if(unlink('../../../../../WebSite/images/'.$img_name))
  {
    //echo "deleted"."<br>";
    echo json_encode("Deleted file ".$img_name);
  }
  else
  {echo json_encode("error in location of file");
  }

  $sql = "delete from tab1 where id=$id";
  $result = mysqli_query($link,$sql);

  if ($result){
   //header("Location:http://localhost/e_class_php_project/webApp/src/demo_1/index_orig.html");
  	echo json_encode("Deleted record of ".$nm);
  } 
 else 
   {echo json_encode( "Error in deletion"); } 

?>
<?php
$link=mysqli_connect("localhost","root","","tutor");

if($link==false)
{
  die("error in connection");
}

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $sql="SELECT * FROM tab1 WHERE id=".$id;
  $res=mysqli_query($link,$sql);
  $rowcount=mysqli_num_rows($res);
  if($rowcount==1)
  {
    $row = mysqli_fetch_row($res);
    $name=$row[1];
  }

  echo $name."<br>";
  if(unlink('../../../../../WebSite/images/'.$name))
  {
    echo "deleted"."<br>";
  }
  else
  {

  }

  $sql = "delete from tab1 where id=$id";
  $result = mysqli_query($link,$sql);

  if ($result){
   header("Location:http://localhost/e_class_php_project/webApp/src/demo_1/index_orig.html");
  } 
 else 
   {echo "Error in deletion"; } }
?>

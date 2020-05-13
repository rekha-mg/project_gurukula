<?php
$link=mysqli_connect("localhost","root","","tutor");

  if($link==false)
  {
      die("error in connection");
  }
//session_start();

//echo "Welcome " .$_SESSION["id"];

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

echo $id;
//include 'connn.php';

$sql = "delete from tab1 where id=$id";
$result = mysqli_query($link,$sql);
$dlef="C:/xampp/htdocs/e_class_php_project/WebSite/images/".$file;
if ($result){
	try {
        chmod($delf, 0777);
        unlink($delf);
        header("Location:http://localhost/e_class_php_project/webApp/src/demo_1/index_orig.html");
    } catch (FileException $e)
     {
        error_log($e->getMessage());
        $msg = 'errors detected';
        echo $msg;
    }
  

} else {
 echo "Error in deletion";
}
}
?>

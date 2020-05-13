<?php
/*https://www.allphptricks.com/upload-file-using-php-save-directory/-codecopy      */

$link=mysqli_connect("localhost","root","","tutor");

  if($link==false)
  {
      die("error in connection");
  }
session_start();

//echo "Welcome " .$_SESSION["id"];
$idd=$_POST["idd"];
$ss=$_POST['sts'];


if (($_FILES['my_file']['name']!=""))
{
// Where the file is going to be stored
 $target_dir = "C:/xampp/htdocs/e_class_php_project/WebSite/images/";
 $file = $_FILES['my_file']['name'];
 $path = pathinfo($file);
 $filename = $path['filename'];
 $ext = $path['extension'];
 $temp_name = $_FILES['my_file']['tmp_name'];
 $path_filename_ext = $target_dir.$filename.".".$ext;
 $path_db="http://localhost/e_class_php_project/WebSite/images/".$filename.".".$ext;
//echo $path_filename_ext;
// Check if file already exists
 //echo $idd;
 //$delf="..\..\..\..\..\ws\images"."\\".$file;
 //echo $delf;
 $dlef="C:/xampp/htdocs/e_class_php_project/WebSite/images/".$file;
if (file_exists($path_filename_ext)) 
{
    echo "Already Uploaded";
   //header("Location:editing.php");
      /*chmod($delf, 777);
      //chown($delf,666);
  if(unlink($delf))
  {
  echo "file has deleted";

}else
{
 echo "file not exists";
}*/
 try {
        chmod($delf, 0777);
        unlink($delf);
    } catch (FileException $e)
     {
        error_log($e->getMessage());
        $msg = 'errors detected';
        echo $msg;
    }



 }
 else
 {
   move_uploaded_file($temp_name,$path_filename_ext);
  // $sql="update tab1(img_name,url) VALUES ('$file','$path_db')";
   $sql="UPDATE tab1 SET img_name='$file',url='$path_db' ,status='$ss' WHERE id=$idd";
    
   if(mysqli_query($link,$sql))
   {
  //echo  "Records inserted successfully";
    /*if(file_exists($delf))
{
  chmod($delf, 777);
  unlink($delf);
  echo "file has deleted";
}
else
{
 echo "file not exists";
}
   */
   header("Location:http://localhost/e_class_php_project/webApp/src/demo_1/index_orig.html");
   
  
   }
   else
   {
   echo "Error: could not insert";
    }
  //echo "Congratulations! File Uploaded Successfully.";
    //header("Location:http://localhost/e_class_php_project/webApp/src/demo_1/index_orig.html");
 }
}




?>
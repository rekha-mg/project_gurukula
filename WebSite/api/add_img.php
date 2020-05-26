<?php
/*https://www.allphptricks.com/upload-file-using-php-save-directory/-codecopy      */
$entityBody = file_get_contents('php://input');
  $requestObject=json_decode($entityBody,true);
  header('Content-Type: application/json');
 // store request object to database...

  //echo json_encode($requestObject["username"]);
  //echo json_encode($requestObject["name"]);
 
$fn=$requestObject["img_name"];
echo json_encode($requestObject["id"]);
echo json_encode($requestObject["url"]);

/*$link=mysqli_connect("localhost","root","","tutor");

if($link==false)
{
  die("error in connection");
}


//if (($_FILES['my_file']['name']!=""))
//{
// Where the file is going to be stored
$target_dir = "C:/xampp/htdocs/e_class_php_project/WebSite/images/";
//$file = $_FILES['my_file']['name'];

$path = pathinfo($file);
$filename = $path['filename'];
$ext = $path['extension'];
//$temp_name = $_FILES['my_file']['tmp_name'];

$path_db="";
      if(unlink("c:/users/e_class_php_project/Pictures/saved pictures/"."$file"))
      {
      echo "deleted"."<br>";
      }
      else
      {
      echo "sry not deleted";
      }
 //$path_db="http://localhost/e_class_php_project/ws/images/".$filename.".".$ext;
//echo $path_filename_ext;
// Check if file already exists
//$dlef="C:/xampp/htdocs/e_class_php_project/ws/images/".$file;
//$dlef="C:/xampp/htdocs/e_class_php_project/webApp/src/assets/images/ws_img/".$file;
  // giving a new name to image    
$num;
$sql="SELECT * FROM tab1";
$res=mysqli_query($link,$sql);
$rowcount=mysqli_num_rows($res);
      if($rowcount==0)
      {
       $num=1;
       $newfnm="logo".$num;
       $filee=$newfnm.".".$ext;
       $path_filename_ext = $target_dir.$newfnm.".".$ext;
       $path_db="http://localhost/e_class_php_project/WebSite/images/".$newfnm.".".$ext;
      }

      else
      {
       $query = "SELECT  img_name as nm FROM tab1 where id=(select max(id) from tab1)";
       $result = mysqli_query($link, $query);  
       $val= $result->fetch_object()->nm;
       echo $val;
       $ext=pathinfo($val, PATHINFO_EXTENSION);
      $len=strlen($ext); // get the length of extension
      $num= substr($val,4,-($len+1));
      $num++; //get the number along with imagename
      $newfnm="logo".$num;
      $filee=$newfnm.".".$ext;
      $path_filename_ext = $target_dir.$newfnm.".".$ext;
      $path_db="http://localhost/e_class_php_project/WebSite/images/".$newfnm.".".$ext;
      }
                    /*if (file_exists($path_filename_ext)) 
                    {
                    echo "Already Uploaded";
                    //header("Location:editing.php");
                    /*try {
                    chmod($dlef, 777);
                    unlink($dlef);
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
    // $sql="UPDATE tab1 SET img_name='$file',url='$path_db' ,status='$ss' WHERE id=$idd";


   $sql="INSERT INTO tab1(img_name,url) VALUES('$filee','$path_db')";

     if(mysqli_query($link,$sql)) 
      { echo json_encode("Records inserted successfully"); //header("Location:basic-table.php"); 
      } 
      else
      { echo "Error: could not insert"; } 
            //echo "Congratulations! File Uploaded Successfully.";

        //header("Location:http://localhost/e_class_php_project/webApp/src/demo_1/index_orig.html");
  //}


*/


?>
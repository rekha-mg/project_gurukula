<?php
/*https://www.allphptricks.com/upload-file-using-php-save-directory/-codecopy      */

$link=mysqli_connect("localhost","root","","tutor");

  if($link==false)
  {
      die("error in connection");
  }

  $idd=$_POST["idd"];
  $ss=$_POST['sts'];

              $sql="SELECT * FROM tab1 WHERE id=".$idd;
              $res=mysqli_query($link,$sql);
              $rowcount=mysqli_num_rows($res);
                if($rowcount==1)
                  {
                    $row = mysqli_fetch_row($res);
                    $name=$row[1];
                  }

                    echo $name; 
  if (($_FILES['my_file']['name']!=""))
  {
// Where the file is going to be stored
    $target_dir = "C:/xampp/htdocs/e_class_php_project/webSite/images/";
    $file = $_FILES['my_file']['name'];
    $path = pathinfo($file);
    $filename = $path['filename'];
    $ext = $path['extension'];
    $temp_name = $_FILES['my_file']['tmp_name'];
    $path_filename_ext = $target_dir.$filename.".".$ext;
     echo $path_db="http://localhost/e_class_php_project/webSite/images/".$filename.".".$ext;

     if(file_exists($path_filename_ext)) 
     {
      echo "already uploaded";
      if(unlink('../../../WebSite/images/'.$name))
                    {
                        echo "deleted";
                    }
     }
        

        move_uploaded_file($temp_name,$path_filename_ext);
          $sql="UPDATE tab1 SET img_name='$file',url='$path_db' ,status='$ss' WHERE id=$idd";
                 //echo  "Records inserted updated";
                   /* if(unlink('../../../WebSite/images/'.$name))
                    {
                        echo "deleted";
                    }*/
                    header("Location:http://localhost/e_class_php_project/webApp/src/demo_1/index_orig.html");
      
        
 
}




?>
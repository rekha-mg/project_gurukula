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
      //$sql="SELECT * FROM tab1 WHERE id=98";
      $res=mysqli_query($link,$sql);
      $rowcount=mysqli_num_rows($res);
      if($rowcount==1)
      {
        $row = mysqli_fetch_row($res);
        $name=$row[1];
      }

                          echo $name."<br>";
        unlink('../../../../../WebSite/images/'.$name);



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
       
      //giving new name for image...
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
            //echo "<br>"."file name from db".$val;
                $ext=pathinfo($val, PATHINFO_EXTENSION);
                $len=strlen($ext); // get the length of extension
                $num= substr($val,4,-($len+1));
                $num++; //get the number along with imagename
                $newfnm="logo".$num;
                $filee=$newfnm.".".$ext;
                $path_filename_ext = $target_dir.$newfnm.".".$ext;
                //echo"<br>"."path stored to in db new .";
                $path_db="http://localhost/e_class_php_project/WebSite/images/".$newfnm.".".$ext;
        }

        move_uploaded_file($temp_name,$path_filename_ext);
        
        $sql="UPDATE tab1 SET img_name='$newfnm".".$ext',url='$path_db' ,status='$ss' WHERE id=$idd";

        if(mysqli_query($link,$sql))
          {header("Location:http://localhost/e_class_php_project/webApp/src/demo_1/index_orig.html"); } 
        else
          {echo "Error: could not insert"; }
}

      ?>
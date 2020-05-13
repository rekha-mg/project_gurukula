<?php  
 //pagination.php  
 $connect = mysqli_connect("localhost", "root", "", "tutor");  
 $record_per_page = 4;  
 $page = '';  
 $output = '';  
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
  $total_records;

  $page_query = "SELECT * FROM tab1 ORDER BY id DESC";  
 $page_result = mysqli_query($connect, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  



 $start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT * FROM tab1 ORDER BY id ASC LIMIT $start_from, $record_per_page";  
 $result = mysqli_query($connect, $query);  
 $output .= "  
      <table  class='table table-striped'>
               <tr>  
               <th>Id</th>
               <th>Image Name </th>
               <th>Image</th>  
               <th>URL</th>  
               <th>Status</th>  
               <th>Edit</th>
                <th>Delete</th>
           </tr>  
 ";  
  $num=$start_from+1;
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= '  
           <tr>   

                <td>'.$num .'</td>  

                <td>'.$row["img_name"].'</td>
                <td><img src="'.$row["url"].'"></td>   
                <td>'.$row["url"].'</td> 
                <td>'.$row["status"].'</td>   
                <td><a href="edit-table.php?edit='.$row['id'].'" class="edit_btn" >Edit</a></td>
                <td><a href="delete-table.php?delete='.$row['id'].'" class="delete_btn" >Delete</a></td>
           </tr>  
      ';  
$num++;
 }  
 $output .= '</table><br /><div align="center">';  
 
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";  
 }  
 $output .= '</div><br /><br />';  
 echo $output;  
 ?>  
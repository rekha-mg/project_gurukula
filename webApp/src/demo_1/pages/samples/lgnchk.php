<?php
 $usid=$_POST["nm"]; 
 $passw=$_POST["psw"]; 
	 if( $usid =="admin" && $passw=="admin")
	 	{header("Location:http://localhost/e_class_php_project/webApp/src/demo_1/index_orig.html"); }
	 else 
	 	{header("Location:http://localhost/e_class_php_project/e_class_php_project/webApp/src/demo_1/pages/samples/login.html"); }

   	 ?>
<?php



$usid=$_POST["nm"];
$passw=$_POST["psw"];
if( $usid =="admin" && $passw=="admin")
{
echo "welcome";
}
else
{
header("Location:http://localhost/e_class_php_project/E-class/webApp/src/demo_1/pages/samples/login.html");
echo "hi";
}
?>
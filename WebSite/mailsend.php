
<?php
require("../PHPMailer-master/src/PHPMailer.php");
    require("../PHPMailer-master/src/SMTP.php");
    require("../PHPMailer-master/src/Exception.php");

$link=mysqli_connect("localhost","root","","tutor");

  if($link==false)
  {
      die("error in connection");
  }

$name=$_POST["nm"];
$to=$_POST["emaill"];
$msg=$_POST["message"];

   $vname=$name;
   $vsection="Try free class";
   $vmsg=" Let's get started »" ;

	//#######################################################################################################	$
	//$vemail="rekhamg12@gmail.com";
	    
	$mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); 

    $mail->CharSet="UTF-8";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPDebug = 0; 
    $mail->Port = 587 ; //465 or 587

    $mail->SMTPSecure = 'tls';  
    $mail->SMTPAuth = true; 
    $mail->IsHTML(true);

    //Authentication
    $mail->Username = 'rmys32954@gmail.com';
    $mail->Password = '2020@rekha';

    //Set Params
    $mail->SetFrom("rmys32954@gmail.com", 'ShahRukh Khan');
	
    $mail->Subject = "Reply from e-learning";

	  $bodyContent = '<h1>HeY!,</h1>';
	  $bodyContent .= '<p>This is a email that Harish send you From LocalHost using PHPMailer</p>';
	//$mail->Subject = 'Email from Localhost by Radhika';

  //$bodytxt = file_get_contents('..\Mailer\Mailer.html');
    $placeholders = ["%name%", "%section%", "%msg%"];
     $replacestrs = ["$vname", "$vsection", "$vmsg"];

  $bodytxt = str_replace($placeholders, $replacestrs, file_get_contents('..\Mailer\welcome\welcome.html'));
  //$bodytxt = str_replace('%name%', $name, file_get_contents('..\Mailer\welcome\welcome.html'));
	// $mail->Body    = $bodyContent;
  $mail->Body    = $bodytxt;
	
	$mail->AddAddress($to);
	
	//#######################################################################################################
	$sts=0;
	if(!$mail->Send()) {
        //echo "Mailer Error: " . $mail->ErrorInfo;
		$sts=0;
    } else {
        //echo "<br> Mail Sent";
		$sts=1;
	}

$sql="INSERT INTO visitors(name,email_id,message,status) VALUES('$name','$to','$msg',$sts)";
   if(mysqli_query($link,$sql))
   {
  //echo  "Records inserted successfully";
   header("Location:index.html");
   }
   else
   {
   echo "Error: could not send mail";
    }
	
	?>
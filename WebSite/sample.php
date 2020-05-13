<?php
session_start();

echo "Welcome " .$_SESSION["name"];
?>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Marshmallow Bootstrap Admin Dashboard Template</title>
		<link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
		<link rel="stylesheet" href="vendors/owl.carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="vendors/owl.carousel/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendors/aos/css/aos.css">
		<link rel="stylesheet" href="vendors/jquery-flipster/css/jquery.flipster.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" href="images/favicon.png" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> 
    function demo() {
      var data1;
  $.ajax({ 
   type: "POST", 
   data: data1, 
   url: "http://localhost/rekha/essence-free-opl/ajax/css - Copy.php", 
     success: function (result) { 
     	var imgg = jQuery.parseJSON(result);
     //$('p').css('background-color',result);
      //$("p").css("background-color", "yellow");
        alert(imgg[0].url);
        for(var i=0;i<=4;i++)
        {
        	var j=i+1;
        	var nm="del"+j;
        	//alert(nm);alert(imgg[i].url);
         document.getElementById(nm).src=imgg[i].url;
        }
      }
   });
  }
  </script>
<script>
$(document).ready(function() {
  /*$(window).resize(function() {
    if ($(this).width() < 728) {
      $("body").css("background-color", "yellow");
    } else {
      $("body").css("background-color", "pink");
    }

  });*/
//alert("welcome . . "); 
demo();
//document.getElementById("del").src="images/f1.jpg";

});
</script>

</head>
<body>
	<div class="d-sm-flex justify-content-between align-items-center">
								<img id ="del1" src="images/deloit.svg" alt="deloit" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
								<img  id ="del2" src="images/erricson.svg" alt="erricson" class="p-2 p-lg-0" data-aos="fade-up"  data-aos-offset="-400">
								<img  id ="del3" src="images/netflix.svg" alt="netflix" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
								<img id ="del4" src="images/instagram.svg" alt="instagram" class="p-2 p-lg-0" data-aos="fade-up"  data-aos-offset="-400">
								<img  id ="del5" src="images/coinbase.svg" alt="coinbase" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
							</div>
	</body>
	</html>
	<?php

?>
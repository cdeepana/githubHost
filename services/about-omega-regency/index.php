<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name=viewport content="width=device-width,initial-scale=1">
<title>About Omega Regency - Omega Regency</title>
<link rel="shortcut icon" type="image/x-icon" href="../../img/fev.png">

<meta name="description" content="">

    
<!-- This website developed by Kawdoco . all source codes are copy right @ kawdoco. Cannot distribute without permission -->
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<link rel="stylesheet" type="text/css" href="../../css/slider/style.css">
<link rel="stylesheet" type="text/css" href="../../css/styles.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script type="text/javascript" src="../../js/Weather.js"></script>
<script type='text/javascript' src='../../js/jquary.js'></script>
<script type='text/javascript' src='../../js/jquary.theampunch.js'></script>
<link rel="stylesheet" type="text/css" href="../../css/kawdoco.css">
<script src="../../js/kawdoco.min.js"></script>
 
<script>
$(document).ready(function() {
  if ($(window).width() > 768) {
            $('.navbar-default .dropdown').on('mouseover', function(){
				$('.dropdown-toggle', this).next('.dropdown-menu').show();
            }).on('mouseout', function(){
				$('.dropdown-toggle', this).next('.dropdown-menu').hide();
            });
        }
        else {
            $('.navbar-default .dropdown').off('mouseover').off('mouseout');
        }
  $('.dropdown-toggle').click(function() {
        if ($(this).next('.dropdown-menu').is(':visible')) {
            window.location = $(this).attr('href');
        }
    });
	
	
	
});
</script>

<script>
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>


<style>

#container_boxes {
	position:absolute; 
	z-index:10000;
	margin-left:-510px;	
	margin-top:50px;
	width:100%;
	text-align: center; 
	 font-family: 'Oswald', sans-serif;

	color:#fff;
        font-weight: 500;
	
}

 


@media screen and (max-width: 600px) {
  #container_boxes {
    visibility: hidden;
    display: none;
  }
}




.tp-caption.pera {
			position: absolute; 
			color:#006533;
			text-shadow: none; 
			font-weight: 100; 
			font-size: 13px; 
			padding: 0px 10px; 
			margin: 0px; 
			letter-spacing: 0px;
			text-align:justify;
			font-family: 'Oswald', sans-serif;	
	
																
		}	


.tp-caption.head{
			position: absolute; 
			color:#006533;
			text-shadow: none; 
			font-weight: 0; 
			font-size: 50px; 
			padding: 0px 10px; 
			margin: 0px; 
			letter-spacing: 0px;
			line-height:50px;	
			font-family: 'Oswald', sans-serif;														
		}


.tp-caption {
 
white-space: normal !important;
}


</style>
<!-- This website developed by Kawdoco . all source codes are copy right @ kawdoco. Cannot distribute without permission -->
</head>

<body onLoad="startTime()" >
	

                  
   <?php  include_once('../../main-menu.php'); ?>
<!--
<div class="container-edit-fluid up-div" >
  <div class="col-sm-8" style="padding:0; margin:0; text-align:left"  >
-->
<div class="container-edit-fluid" style="margin-top:0px; background-image:url(http://www.kawdo.com/susara/omega/img/services.jpg); min-height:450px;">
           </div>
                     
            
          <!-- END REVOLUTION SLIDER -->
    
          
			<div class="container-edit-fluid up-div" style="margin-top:0px; background-color:#9713ac; min-height:6px;">
  

		
           </div>
           
<div class="container-edit" >
 <div class="col-sm-3"  >

<div class="list-group">

<h5><a href="http://www.kawdo.com/susara/omega/services/about-omega-regency/" class="list-group-item">ABOUT OMEGA REGENCY  </a></h5>
<h5><a href="http://www.kawdo.com/susara/omega/services/transportation-and-directions/" class="list-group-item">TRANSPORTATION AND DIRECTIONS </a></h5>
<h5><a href="http://www.kawdo.com/susara/omega/services/room-service/" class="list-group-item">ROOM SERVICE </a></h5>
<h5><a href="http://www.kawdo.com/susara/omega/services/travel-counter/" class="list-group-item">TRAVEL COUNTER </a></h5>
<h5><a href="http://www.kawdo.com/susara/omega/services/24-7-shopping/" class="list-group-item">24-7 SHOPPING </a></h5>
<h5><a href="http://www.kawdo.com/susara/omega/services/contact-us/" class="list-group-item">CONTACT US</a></h5>


</div>


 </div>
 
 <div class="col-sm-9" style="text-align:justify"  >
 
 
 
 <h1>ABOUT OMEGA REGENCY </h1>
 <ol class="breadcrumb" >
    <li><a href="../../dining/index.php">Home</a>    </li>
    <li class="active">About Omega Regency</li>   
</ol>

<p> Omega Regency is one of the most pleasing places in Colombo to stay. A star class Colombo hotel of great repute, it embodies the passion of business and leisure traveller, with spacious rooms and suites of great allure, astonishing dining and entertaining, and a team of devoted service professionals. For over three and a half decades the hotel has continued to be a pinnacle of comfort and ease. </p>

<p> Conveniently located in the heart of Colombo’s Wellawatte on Galle Road, between Bambalapitiya and Mount Lavinia, Omega Regency is close to exclusive Colombo shopping in Crescat Boulevard and Odel and within easy access of many Colombo attractions including Mount Lavinia Beach, the National Zoo, Independence Square, the National Museum and Gangarama Temple. </p>

 </div>
</div>
 
   



<?php include_once('../../footer.php');?>
</body>
</html>
			
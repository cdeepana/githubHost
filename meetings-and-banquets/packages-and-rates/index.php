<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name=viewport content="width=device-width,initial-scale=1">
<title>Packages &amp; Rates - Omega Regency</title>
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

<div class="container-edit-fluid" style="margin-top:0px; background-image:url(http://www.kawdo.com/susara/omega/img/meeting.jpg); min-height:450px;">
           </div>        
            
          <!-- END REVOLUTION SLIDER -->
    
          
			<div class="container-edit-fluid up-div" style="margin-top:0px; background-color:#9713ac; min-height:6px;">
  

		
           </div>
           
<div class="container-edit" >
 <div class="col-sm-3"  >

<div class="list-group">

<h5><a href="http://www.kawdo.com/susara/omega/meetings-and-banquets/your-experience/index.php" class="list-group-item">YOUR EXPERIENCE </a></h5>
<h5><a href="http://www.kawdo.com/susara/omega/meetings-and-banquets/rooms-and-capacities/index.php" class="list-group-item">ROOMS & CAPACITIES </a></h5>
<h5><a href="http://www.kawdo.com/susara/omega/meetings-and-banquets/packages-and-rates/index.php" class="list-group-item">PACKAGES & RATES </a></h5>
<h5><a href="http://www.kawdo.com/susara/omega/meetings-and-banquets/receive-a-quote/index.php" class="list-group-item">RECEIVE A QUOTE </a></h5>


</div>


 </div>
 
 <div class="col-sm-9" style="text-align:justify"  >
 
 
 
 <h1>PACKAGES & RATES </h1>
 <ol class="breadcrumb" >
    <li><a href="../../dining/index.php">Home</a>    </li>
    <li class="active">Packages & Rates </li>   
</ol>

<p> From LKR 1850 per person + Energy sc. </p>
<p> Daily Conference Rates</p>

<p> This rate includes:</p>
<ul>
   <li> Conference / meeting room hire</li>
   <li> Morning tea, coffee, sandwiches, savoury snacks and still mineral water</li>
   <li> Set menu buffet lunch varied by the day with with multi themed International cuisine</li>
   <li> Afternoon tea, coffee with cakes and still mineral water</li>
   <li> Notebook, pencil and mints</li>
  <li>  Government taxes</li>
</ul>
<p>Other services include multimedia, PA system, Wi-Fi at exceptional rates and special prices on dinner, wine & spirits and chasers. </p>

<p>For more details please use our “Receive a Quote” form or contact our event professionals at Omega Regency on +94 112 363604 or email events@omegaregency.lk </p>
 
 
 </div>
</div>
 
   



<?php include_once('../../footer.php');?>
</body>
</html>
			
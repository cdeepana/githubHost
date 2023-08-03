<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name=viewport content="width=device-width,initial-scale=1">
<title>Travel Counter - Omega Regency</title>
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
 
 
 
 <h1>TRAVEL COUNTER </h1>
 <ol class="breadcrumb" >
    <li><a href="../../dining/index.php">Home</a>    </li>
    <li class="active">Travel Counter</li>   
</ol>

<p> Omega Regency’s travel coordinators pride themselves on knowing Sri Lanka inside out. </p>

<p>Whether it’s a romantic honeymoon get away, a family holiday full of smiles & joy, a cultural and educational tour around the island, an adventurous eco holiday with wild life experience, a business tour to meet your VIPs, a day excursion with bags full of shopping, or a combination of multiple options, our co-ordinators know the best are always on hand to help you. </p>

<p>Luxurious fleet of micro vans, SUVs, and cars are the finest in Colombo-06 to travel in comfort & style with our experienced English speaking Chauffer Guides.</p>

<p>Enquiries For all your travel & holiday inquiries, please either call +94 11 2582277 or e-mail your details to:  </p>

 </div>
</div>
 
   



<?php include_once('../../footer.php');?>
</body>
</html>
			
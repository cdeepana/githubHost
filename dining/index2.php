<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name=viewport content="width=device-width,initial-scale=1">
<title>Dining- Omega Regency</title>
<link rel="shortcut icon" type="image/x-icon" href="../img/fev.png">

<meta name="description" content="">

    
<!-- This website developed by Kawdoco . all source codes are copy right @ kawdoco. Cannot distribute without permission -->
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/slider/style.css">
<link rel="stylesheet" type="text/css" href="../css/styles.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script type="text/javascript" src="../js/Weather.js"></script>
<script type='text/javascript' src='../js/jquary.js'></script>
<script type='text/javascript' src='../js/jquary.theampunch.js'></script>
<link rel="stylesheet" type="text/css" href="../css/kawdoco.css">
<script src="../js/kawdoco.min.js"></script>
<link href="../css/style1.css" rel="stylesheet" type="text/css"/>

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
	

                  
   <?php  include_once('../main-menu.php'); ?>
<!--
<div class="container-edit-fluid up-div" >
  <div class="col-sm-8" style="padding:0; margin:0; text-align:left"  >
-->

<div class="container-edit-fluid" style="margin-top:0px; background-image:url(http://www.omegaregency.lk/img/dining.jpg); min-height:450px;">
           </div>  
            
            
          <!-- END REVOLUTION SLIDER -->
    
          
			<div class="container-edit-fluid up-div" style="margin-top:0px; background-color:#9713ac; min-height:6px;">
  

		
           </div>
           
<div class="container-edit" >
    
 <div class="col-sm-3" style="margin-top: 80px;" >
     
      <a href="http://www.omegaregency.lk/dining/alindaya/index.php"><button class="button button1 btn-block">ALINDAYA</button></a>
      <br>
       <a href="http://www.omegaregency.lk/dining/spice-and-ice/index.php"><button class="button button1 btn-block">SPICE & ICE  </button></a>
       <br>
        <a href="http://www.omegaregency.lk/dining/opera-multi-cuisine/index.php"><button class="button button1 btn-block">OPERA MULTI CUISINE </button></a>
  




 </div>
 
 <div class="col-sm-9" style="text-align:justify"  >
 
 
 
 <h1 class="fntt" >DINING </h1>
   <span class="sectionline"></span>
   
 <ol class="breadcrumb" >
    <li><a href="index.php">Home</a>    </li>
    <li class="active">Dining</li>   
</ol>

<p>The well known restaurants and bars at Omega Regency are run by Colombo’s best and most welcoming teams. Come for delicious teas & brunches on Alindaya, The best mom’s style rice and curry in Spice & Ice, the finest contemporary multi cuisine at Opera and glorious English style pub to begin or end your evening. </p>

<h5>To make a reservation, please contact Restaurant Reservations at Omega Regency on  +94 11 2363604 or email
events@omegaregency.lk </h5>


<p>If you would like to explore the restaurants further and see all our special offers please click on the restaurant names to the left.</p>



 
 </div>
</div>
 
   



<?php include_once('../footer.php');?>
</body>
</html>
			
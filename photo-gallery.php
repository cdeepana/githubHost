<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name=viewport content="width=device-width,initial-scale=1">
<title>Photo Gallery  - Tamarind Tree Inn</title>
<link rel="shortcut icon" type="image/x-icon" href="img/fev.png">


    
<!-- This website developed by Kawdoco . all source codes are copy right @ kawdoco. Cannot distribute without permission -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script type='text/javascript' src='js/jquary.js'></script>

<script type='text/javascript' src="js/scroll.js" ></script>
<script type='text/javascript' src='js/jquary.theampunch.js'></script>
<link rel="stylesheet" type="text/css" href="css/kawdoco.css">
<script src="js/kawdoco.min.js"></script>
<script type="text/javascript" src="js/jquery.smartmenus.js"></script>
<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>

 
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
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

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

.gallery img
{

padding:3px;
border:none;


}

#lightbox .modal-content {
    display: inline-block;
    text-align: center;   
}

#lightbox .close {
    opacity: 1;
    color: rgb(255, 255, 255);
    background-color: rgb(25, 25, 25);
    padding: 5px 8px;
    border-radius: 30px;
    border: 2px solid rgb(255, 255, 255);
    position: absolute;
    top: -15px;
    right: -55px;
    
    z-index:1032;
}

</style>
<!-- This website developed by Kawdoco . all source codes are copy right @ kawdoco. Cannot distribute without permission -->
</head>

<body >
	

                  
   <?php  include_once('main-menu.php'); ?>
 
			 <div class="container-edit-fluid" >
             		
<div  class="container-edit" style="margin-top:70px;  "  >						
 <div class="col-sm-3"  >
<br/>

<a href="index.php"> <img src="images/Tamaring-Logo.png"></a>
 <p style="font-size:10px; text-align:center"> "A homely comfort in the Green Location" </p>
 
No: 54/2, George E De Silva Mawatha <br/>
 Kandy<br/><br/>
Telephone : 0094-081-2222334<br/>
Hot line : 0094-77-5757586<br/>
Hot line : 0094-71-9207719<br/>
Email : <a href="mailto:tamarind44inn@gmail.com ">tamarind44inn@gmail.com</a>

 </div>
  <div class="col-sm-6" style="background-color:#f6f6f6; text-transform:uppercase;">
  <h1>PHOTO GALLERY</h1>
<ol class="breadcrumb" style="text-transform:capitalize; padding:0; margin:0" >
    <li><a href="index.php">Home</a>    </li>
    <li class="active">Photo Gallery</li>   
</ol>
  
  <div class="col-lg-12 gallery" style="margin:0; padding:0; "  >
  <h3>View and Location</h3>
<div class="col-sm-4" style=" margin:0; padding:0;   "  >
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/location/DSC_0535.jpg">  <img src="images/gallery/sm/location/DSC_0535.jpg" style="padding:3px;"  class="img-responsive group1"></a>
</div>
 <div class="col-sm-4" style=" margin:0; padding:0;  ">
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/location/DSC_0584.jpg"> <img src="images/gallery/sm/location/DSC_0584.jpg" style="padding:3px;" class="img-responsive group1"></a>
</div>
<div class="col-sm-4" style=" margin:0; padding:0   ">
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/location/DSC_0588.jpg"> <img src="images/gallery/sm/location/DSC_0588.jpg" style="padding:3px;" class="img-responsive group1"></a>
</div>
</div>

<div class="col-lg-12 gallery" style="margin:0; padding:0; "  >
  <h3>Lobby and Restaurant </h3>

<div class="col-sm-4" style=" margin:0; padding:0  "  >
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/loby/DSC_0574.jpg"> <img src="images/gallery/sm/loby/DSC_0574.jpg" style="padding:3px;" class="img-responsive group1" ></a><br/>
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/loby/DSC_0582.jpg"> <img src="images/gallery/sm/loby/DSC_0582.jpg" style="padding:3px;" class="img-responsive group1"></a>

</div>


 <div class="col-sm-4" style=" margin:0; padding:0  ">
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/loby/DSC_0578.jpg"> <img src="images/gallery/sm/loby/DSC_0578.jpg" style="padding:3px;" class="img-responsive group1"></a>

<br/>


</div>

<div class="col-sm-4" style=" margin:0; padding:0  ">
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/loby/DSC_0591.jpg"> <img src="images/gallery/sm/loby/DSC_0591.jpg" style="padding:3px;" class="img-responsive group1"></a>
<br/>

</div>
</div>

<div class="col-lg-12 gallery" style="margin:0; padding:0; ">
  <h3>Pantry / kitchen  </h3>
<div class="col-sm-4" style=" margin:0; padding:0px; ">
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/pantry/DSC_0536.jpg">  <img src="images/gallery/sm/pantry/DSC_0536.jpg" style="padding:3px;"class="img-responsive group1" ></a>
</div>
 <div class="col-sm-4" style=" margin:0; padding:0px; ">
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/pantry/DSC_0538.jpg"> <img src="images/gallery/sm/pantry/DSC_0538.jpg" style="padding:3px;" class="img-responsive group1"></a>
</div>
<div class="col-sm-4" style=" margin:0; padding:3px; ">
 </div>
 </div>
 
 <div class="col-lg-12 gallery" style="margin:0; padding:0; "> 
  <h3>Rooms with attached bath rooms</h3>
  
 <div class="col-sm-4" style=" margin:0; padding:0px; ">
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/rooms/DSC_0540.jpg">  <img src="images/gallery/sm/rooms/DSC_0540.jpg" style="padding:3px;" class="img-responsive group1"></a><br/>
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/rooms/DSC_0544.jpg">  <img src="images/gallery/sm/rooms/DSC_0544.jpg" style="padding:3px;" class="img-responsive group1"></a><br/>
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/rooms/DSC_0552.jpg">  <img src="images/gallery/sm/rooms/DSC_0552.jpg" style="padding:3px;" class="img-responsive group1"></a><br/>
 <a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/rooms/DSC_0557.jpg"> <img src="images/gallery/sm/rooms/DSC_0557.jpg" style="padding:3px;" class="img-responsive group1"></a><br/>
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/rooms/DSC_0563.jpg">  <img src="images/gallery/sm/rooms/DSC_0563.jpg" style="padding:3px;" class="img-responsive group1"></a>
</div>
 <div class="col-sm-4" style=" margin:0; padding:0px; ">
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/rooms/DSC_0542.jpg">  <img src="images/gallery/sm/rooms/DSC_0542.jpg" style="padding:3px;" class="img-responsive group1"></a><br/>
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/rooms/DSC_0550.jpg">  <img src="images/gallery/sm/rooms/DSC_0550.jpg" style="padding:3px;" class="img-responsive group1"></a><br/>
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/rooms/DSC_0554.jpg">  <img src="images/gallery/sm/rooms/DSC_0554.jpg" style="padding:3px;" class="img-responsive group1"></a><br/>
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/rooms/DSC_0559.jpg">  <img src="images/gallery/sm/rooms/DSC_0559.jpg" style="padding:3px;" class="img-responsive group1"></a><br/>
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/rooms/DSC_0570.jpg">  <img src="images/gallery/sm/rooms/DSC_0570.jpg" style="padding:3px;" class="img-responsive group1"></a>
</div>
<div class="col-sm-4" style=" margin:0; padding:0px; ">
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/rooms/DSC_0543.jpg"> <img src="images/gallery/sm/rooms/DSC_0543.jpg" style="padding:3px;" class="img-responsive group1"></a><br/>
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/rooms/DSC_0551.jpg"> <img src="images/gallery/sm/rooms/DSC_0551.jpg" style="padding:3px;" class="img-responsive group1"></a><br/>
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/rooms/DSC_0555.jpg"> <img src="images/gallery/sm/rooms/DSC_0555.jpg" style="padding:3px;" class="img-responsive group1"></a><br/>
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/rooms/DSC_0561.jpg"> <img src="images/gallery/sm/rooms/DSC_0561.jpg" style="padding:3px;" class="img-responsive group1"></a><br/>
<a class="thumbnail"  rel="prettyPhoto" href="images/gallery/lg/rooms/DSC_0572.jpg"> <img src="images/gallery/sm/rooms/DSC_0572.jpg" style="padding:3px;" class="img-responsive group1"></a>
 </div>
 
 </div>
 
 
 
 

 </div>
 
   <div class="col-sm-3" >
 <div class="list-group" style="border:none !important;  ">
   <li class="list-group-item disabled" > <i class="fa fa-cloud" style="padding-right:5px;"></i>Separate Air conditioning </li>
   <li class="list-group-item "><i class="fa fa-file-image-o" style="padding-right:5px;"></i>Mosquito nets or Repellant</li>
   <li class="list-group-item disabled"><i class="fa fa-wifi" style="padding-right:5px;"></i>High Speed Internet /Free Wi-Fi</li>
 <li class="list-group-item ">  <i class="fa fa-database" style="padding-right:5px;"></i> Bottled water</li>
   <li class="list-group-item disabled"><i class="fa fa-fax" style="padding-right:5px;"></i>Telephone / Fax</li>
   <li class="list-group-item "> <i class="fa fa-car" style="padding-right:5px;"></i> Ample Parking Space</li>   
 <li class="list-group-item disabled">  <i class="fa fa-television" style="padding-right:5px;"></i> Satellite TV and DVD </li>
 <li class="list-group-item "> <i class="fa fa-taxi" style="padding-right:5px;"></i>On Call Taxi</li>
 <li class="list-group-item disabled">  <i class="fa fa-university" style="padding-right:5px;"></i> Near Money Exchanger </li>

 <li class="list-group-item "> <i class="fa fa-cc-mastercard" style="padding-right:5px;"></i> Visa / Master Cards</li>
 
 <li class="list-group-item disabled"> <i class="fa fa-internet-explorer" style="padding-right:5px;"></i>Free Internet </li>
<li class="list-group-item "> <i  class="fa fa-tachometer" style="padding-right:5px;"></i>Laundry Facilities </li>

 </div>

 </div>
              
              </div>
 	 	
			</div>				

          
            
            
          <!-- END REVOLUTION SLIDER -->
    
          
			<div class="container-edit-fluid up-div" style="margin-top:0px; background-color:#333333; min-height:6px;">
         
           </div>
           

 
   



<?php include_once('footer.php');?>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.prettyPhoto.js " type="text/javascript" charset="utf-8"></script>

 <script type="text/javascript" charset="utf-8">
$(document).ready(function(){
  $("[rel^='prettyPhoto']").prettyPhoto();
});
</script>
 
</body>
</html>
			
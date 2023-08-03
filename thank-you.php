	<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name=viewport content="width=device-width,initial-scale=1">
		<title>Thank You -  Omega Regency</title>
 	<link rel="shortcut icon" type="image/x-icon" href="img/fev.png">
 
<link rel="stylesheet" href="https://www.omegaregency.lk/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.omegaregency.lk/css/kawdoco.css">
<script src="https://www.omegaregency.lk/js/kawdoco.min.js"></script>
 <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="https://www.omegaregency.lk/css/styles.css">
<link rel="stylesheet" type="text/css" href="https://www.omegaregency.lk/css/style1.css">
<link rel="stylesheet" href="https://www.omegaregency.lk/css/animations.css" type="text/css">
<link href="https://www.omegaregency.lk/css/hover.css" rel="stylesheet" type="text/css"/>

 <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
  <script type="text/javascript" src="https://www.omegaregency.lk/js/jquery.smartmenus.js"></script>
<script type="text/javascript" src="https://www.omegaregency.lk/js/jquery.smartmenus.bootstrap.js"></script>
 
 
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
<!--<script>
$(document).ready(function() {
(function ($, window, delay) {
  // http://jsfiddle.net/AndreasPizsa/NzvKC/
  var theTimer = 0;
  var theElement = null;
    var theLastPosition = {x:0,y:0};
  $('[data-toggle]')
    .closest('li')
    .on('mouseenter', function (inEvent) {
    if (theElement) theElement.removeClass('open');
    window.clearTimeout(theTimer);
    theElement = $(this);

    theTimer = window.setTimeout(function () {
      theElement.addClass('open');
    }, delay);
  })
    .on('mousemove', function (inEvent) {
        if(Math.abs(theLastPosition.x - inEvent.ScreenX) > 4 || 
           Math.abs(theLastPosition.y - inEvent.ScreenY) > 4)
        {
            theLastPosition.x = inEvent.ScreenX;
            theLastPosition.y = inEvent.ScreenY;
            return;
        }
        
    if (theElement.hasClass('open')) return;
    window.clearTimeout(theTimer);
    theTimer = window.setTimeout(function () {
      theElement.addClass('open');
    }, delay);
  })
    .on('mouseleave', function (inEvent) {
    window.clearTimeout(theTimer);
    theElement = $(this);
    theTimer = window.setTimeout(function () {
      theElement.removeClass('open');
    }, delay);
  });
})(jQuery, window, 200); // 200 is the delay in milliseconds

});
</script> -->
<!--rgba(0,51,89,0.9 -->
</head>

<body>
	
    <?php include_once('main-menu.php');?>

			</div>
				<div class="container-edit-fluid " style=" background: url(http://www.kawdo.com/susara/omega/img/meeting.jpg); min-height:340px; background-size:cover !important; ">
				
				
				</div>
		<!--				
		<section class="container-edit-fluid " style="  min-height:340px; background-position:center; ">
                
                
                </section> -->
          
         
         
                <div class="container-edit" >
        	
            <div class="panel panel-default">
<div class="panel-body" style="text-align:center;">

    <img src="images/thanks.jpg" width="138" height="105" /> <br/>
      
<h2>Your message was successfully sent! </h2><br/>

Thank you for your submission & your email was received by us. <br/>
Your email inquiry will be processed and a representative will be in contact with you shortly.

</div></div>


     
         
</div>
     
</div>
<div class="container-edit panel" ></div>
         
         
         
      
   <?php require_once('footer.php'); ?>  
           
<script src='js/css3-animate-it.js'></script> 
</body>
</html>
			
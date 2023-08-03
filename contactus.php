<?php 
$your_email ='bookings@omegaregency.lk';// <<=== update to your email address

session_start();
$errors = '';
$name = '';
$email = '';
$company= '';
$telephone = '';
$inquire='';

if(isset($_POST['submit']))
{
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$company = $_POST['company'];
	$telephone = $_POST['telephone'];
	$inquire = $_POST['inquire'];
	///------------Do Validations-------------
	if(empty($name)||empty($email))
	{
		$errors .= "\n Name and Email are required fields. ";	
	}
	if(IsInjected($email))
	{
		$errors .= "\n Bad email value!";
	}
	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		$errors .= "\n The captcha code does not match!";
	}
	
	if(empty($errors))
	{
		//send the email
		$to = $your_email;
		$subject="New form submission";
		$from = $your_email;
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
		
		$body = "A user  $name submitted the contact form:\n".
		"Name: $name\n".
		"Email: $email \n".
		"Company Name : $company \n".
		"Telephone : $telephone \n".
		"Message: \n ".
		"$inquire\n".
		"IP: $ip\n";	
		
		$headers = "From: $from \r\n";
		$headers .= "Reply-To: $email \r\n";
		
		mail($to, $subject, $body,$headers);
		
		header('Location: thank-you.php');
	}
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name=viewport content="width=device-width,initial-scale=1">
<title>Contact Us  - Tamarind Tree Inn</title>
<link rel="shortcut icon" type="image/x-icon" href="img/fev.png">

<!-- This website developed by Kawdoco . all source codes are copy right @ kawdoco. Cannot distribute without permission -->
<link rel="stylesheet" type="text/css" href="https://www.omegaregency.lk/css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://www.omegaregency.lk/css/styles.css">
<link href="https://www.omegaregency.lk/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script type='text/javascript' src='https://www.omegaregency.lk/js/jquary.js'></script>

<script type='text/javascript' src="https://www.omegaregency.lk/js/scroll.js" ></script>
<script type='text/javascript' src='https://www.omegaregency.lk/js/jquary.theampunch.js'></script>
<link rel="stylesheet" type="text/css" href="https://www.omegaregency.lk/css/kawdoco.css">
<script src="https://www.omegaregency.lk/js/kawdoco.min.js"></script>
<script type="text/javascript" src="https://www.omegaregency.lk/js/jquery.smartmenus.js"></script>
<script type="text/javascript" src="https://www.omegaregency.lk/js/jquery.smartmenus.bootstrap.js"></script>
<script language="JavaScript" src="https://www.omegaregency.lk/js/gen_validatorv31.js" type="text/javascript"></script>	
 
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

<body >
		<?php
if(!empty($errors)){
echo "<p class='err'>".nl2br($errors)."</p>";
}
?>

                  
   <?php  include_once('main-menu.php'); ?>
 
			 <div class="container-edit-fluid" >
             		
<div  class="container-edit" style="margin-top:70px;  "  >						
 <div class="col-sm-3"  >
<br/>

<a href="https://www.omegaregency.lk/"> <img src="images/Tamaring-Logo.png"></a>
 <p style="font-size:10px; text-align:center"> "A homely comfort in the Green Location" </p>
 
No: 54/2, George E De Silva Mawatha <br/>
 Kandy<br/><br/>
Telephone : 0094-081-2222334<br/>
Hot line : 0094-77-5757586<br/>
Hot line : 0094-71-9207719<br/>
Email : <a href="mailto:tamarind44inn@gmail.com">tamarind44inn@gmail.com</a>
<br/><br/>
<img src="https://www.omegaregency.lk/images/tours.jpg">
<br/><br/>
<img src="https://www.omegaregency.lk/images/bestrates.jpg">

 </div>
  <div class="col-sm-6" style="background-color:#f6f6f6;">
<h1>CONTACT US</h1>
<ol class="breadcrumb" style=" padding:0; margin:0" >
    <li><a href="https://www.omegaregency.lk/">Home</a>    </li>
    <li class="active">Contact Us</li>   
</ol>

<p>Should you require any further information or assistance, feel free to drop us an email by filing your details below </p>
<p>For any urgent queries, you can contact us directly on the telephone numbers provided on this page. </p>

  
	<form method="POST" name="contact_form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
    <div class="form-group">
 
    <input type="text" class="form-control" id="name" placeholder="Name" value='<?php echo htmlentities($name) ?>' name="name">
    <br/>
 
 
    <input type="email" class="form-control" id="email" placeholder="Email" value='<?php echo htmlentities($email) ?>' name="email">
 
   <br/>
 <input type="company" class="form-control" id="company" placeholder="Company" value='<?php echo htmlentities($company) ?>'     name="company">
  <br/>
   
    <input type="tel" class="form-control" id="telephone" placeholder="Telephone" value='<?php echo htmlentities($telephone) ?>'      name="telephone">
 <br/>
 
<textarea placeholder="Enter Inquire" class="form-control" value='<?php echo htmlentities($inquire) ?>' name="inquire" id="inquire"></textarea>
  </div>
 

  <p>
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
<label for='message'>Enter the code above here :</label><br>
<input id="6_letters_code" name="6_letters_code" type="text" class="form-control"><br>
 
</p> 

  <button type="submit" class="btn btn-info" style=" background-color:#96bc6d; color:#FFF; border:0;" name="submit" id="submit">Contact us</button>
</form>
		
<?php
if(!empty($errors)){
echo "<p class='err'>".nl2br($errors)."</p>";
}
?>
 <br/>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7915.173338689608!2d80.62175783465968!3d7.287778254542727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae368854c2e85bf%3A0xb1351da03dc94620!2sTamarind+Tree+Inn!5e0!3m2!1sen!2slk!4v1447663514551" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>



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
<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contact_form");
//remove the following two lines if you like error message box popups
frmvalidator.EnableOnPageErrorDisplaySingleBox();
frmvalidator.EnableMsgsTogether();

frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("telephone","req","Please provide your Telephone"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>

</body>
</html>
			
<?php 
$your_email ='roshikamadumadushani@gmail.com';// <<=== update to your email address

session_start();
$errors = '';
$fname = '';
$surname = '';
$address= '';
$postcode= '';
$city= '';
$country = '';
$state = '';
$email = '';
$phone= '';
$fax= '';
$companyname= '';
$job= '';
$event= '';
$organisation= '';



if(isset($_POST['submit']))
{
	
	$fname = $_POST['fname'];
    /* @var $_POST type */
    $surname = $_POST['surname'];
        $address = $_POST['address'];
        $postcode = $_POST['postcode'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $fax = $_POST['fax'];
        $companyname = $_POST['companyname'];
        $job = $_POST['job'];
        $event = $_POST['event'];
        $organisation = $_POST['organisation'];
	
       
        
	///------------Do Validations-------------

        
      
	if(empty($fname)||empty($email))
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
		$subject="Omega Recive a Quote";
		$from = $email;
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
		
		$body = "<html>
                <head>
                <style>                    
                    th, td {text-align: left;
                    padding: 8px; background-color: #f0f0f0; }
                </style>
                <body>
                <div align='center'>
                <img src='http://www.kawdo.com/roshika/travel1/image/email.jpg'/>
                  </div>
                <div align='center'>                 
                  <table border='1'  style='width:40% ; border-collapse: collapse;'>                  
                  <tr>
                    <th>Name</th>
                    <td>".$fname."</td> 

                  </tr>
                  <tr>
                    <th>Name</th>
                    <td>".$surname."</td> 

                  </tr>
                  <tr>
                    <th>address</th>
                    <td>".$address."</td> 

                  </tr>                
                  <tr>
                    <th>postcode</th>
                    <td>".$postcode."</td> 

                  </tr>
                   <tr>
                    <th>city</th>
                    <td>".$city."</td> 

                  </tr>
                  
                  <tr>
                    <th>Country</th>
                    <td>".$country."</td> 

                  </tr>
                  <tr>
                    <th>state</th>
                    <td>".$state."</td> 

                  </tr>

                    <tr>
                    <th>email</th>
                    <td>".$email."</td> 

                  </tr>
                  <tr>
                    <th>phone</th>
                    <td>".$phone."</td> 

                  </tr>
                   <tr>
                    <th>fax</th>
                    <td>".$fax."</td> 

                  </tr>
                   <tr>
                    <th>companyname</th>
                    <td>".$companyname."</td> 

                  </tr>
                  <tr>
                    <th>job</th>
                    <td>".$job."</td> 

                  </tr>
                  <tr>
                    <th>event</th>
                    <td>".$event."</td> 

                  </tr>
                   <tr>
                    <th>organisation</th>
                    <td>".$organisation."</td> 

                  </tr>

                
                
                </table>
                <img src=''>
                </div>
                </body>
                </head>
                </html>";
                
		
		$headers = "From: $email \r\n";
		$headers .= "Reply-To: $email \r\n";
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		mail($to, $subject, $body, $headers);
		
		header('Location: thank-you.php');
	}
}
 else {
   
    echo 'failed';
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
<title>Receive a Quote - Omega Regency</title>
<link rel="shortcut icon" type="image/x-icon" href="img/fev.png">

<meta name="description" content="">

    
<!-- This website developed by Kawdoco . all source codes are copy right @ kawdoco. Cannot distribute without permission -->
<link rel="stylesheet" type="text/css" href="https://www.omegaregency.lk/css/style.css">
<link rel="stylesheet" type="text/css" href="https://www.omegaregency.lk/css/slider/style.css">
<link rel="stylesheet" type="text/css" href="https://www.omegaregency.lk/css/styles.css">
<link href="https://www.omegaregency.lk/css/style1.css" rel="stylesheet" type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://www.omegaregency.lk/js/Weather.js"></script>
<script type='text/javascript' src='https://www.omegaregency.lk/js/jquary.js'></script>
<script type='text/javascript' src='https://www.omegaregency.lk/js/jquary.theampunch.js'></script>
<link rel="stylesheet" type="text/css" href="https://www.omegaregency.lk/css/kawdoco.css">
<script src="js/kawdoco.min.js"></script>
 
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


.form-control{

margin:5px;
}

</style>

<style>
    .select1{
    width:100%;
    overflow:hidden;
   
   
}

.select1 select{
    width: 520px;
    height: 33px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
   
    margin-top: 1px;
    border: none;
   background-color: #f5f5f5 !important;
    background:  url("../..//images/down.png") no-repeat 487px center;
}

</style>

<!-- This website developed by Kawdoco . all source codes are copy right @ kawdoco. Cannot distribute without permission -->
</head>

<body onLoad="startTime()" >
	

                  
   <?php  include_once('main-menu.php'); ?>
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

 
 <div class="col-sm-12" style="text-align:justify"  >
 
 
 
 <h1 class="fntt" align="center">RECEIVE A QUOTE </h1>
 <ol class="breadcrumb" >
    <li><a href="index.php">Home</a>    </li>
    <li class="active">Receive a Quote </li>   
</ol>

<div class="panel panel-default">
  <div class="panel-body">

  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="quotefrm">
 
      
      <div class="col-sm-6" >

<input name="fname" type="text"  class="form-control1" placeholder="First Name" value='<?php echo htmlentities($fname) ?>'/> <br>
<input name="surname" type="text" class="form-control1"  placeholder="Surname" value='<?php echo htmlentities($surname) ?>'/><br>
<textarea name="address" cols="" rows="" class="form-control1" placeholder="Address" value='<?php echo htmlentities($address) ?>'></textarea><br>
    
<input name="postcode" type="text" class="form-control1" placeholder="Postcode"  value='<?php echo htmlentities($postcode) ?>'/><br>

<input name="city" type="text" class="form-control1" placeholder="Town / City"  value='<?php echo htmlentities($city) ?>'/><br>

<div class="select1">
<select name="country" class="form-control1" placeholder="Country" value='<?php echo htmlentities($country) ?>'>
	
<option value="please select....">Country</option>
<option value="Afganistan">Afghanistan</option>
</select>
</div>
<br>

<input name="state" type="text" class="form-control1" placeholder="State"  value='<?php echo htmlentities($state) ?>'/><br>

 <input name="email" type="text"  class="form-control1" placeholder="Email *" value='<?php echo htmlentities($email) ?>'/><br>

</div>
  
    <div class="col-sm-6" >
        
<input name="phone" type="text" class="form-control1" placeholder="Phone" value='<?php echo htmlentities($phone) ?>'/><br>

<input name="fax" type="text" class="form-control1"  placeholder="Fax" value='<?php echo htmlentities($fax) ?>'/><br>

<input name="companyname" type="text"  class="form-control1" placeholder="Company Name" value='<?php echo htmlentities($companyname) ?>'/><br>

<input name="job" type="text" class="form-control1" placeholder="Job Title" value='<?php echo htmlentities($job) ?>'/><br>

<input name="event" type="text" class="form-control1" placeholder="Event Industry" value='<?php echo htmlentities($event) ?>'/><br>

<input name="organisation" type="text" class="form-control1" placeholder="Organisation Web Address" value='<?php echo htmlentities($organisation) ?>'/><br>

 <div class="form-group">
  <p>
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
<label for='message'>Enter the code above here :</label><br>
<input id="6_letters_code" name="6_letters_code" type="text" class="form-control"><br>
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
</p>
  </div>

 <div style="width:100%; float:left"    >
<button name="submit"  type="submit" class="btn btn-info" style=" background-color:#96bc6d; color:#FFF; border:0; margin-left:20px;" /> Submit</button>
</div>

</div>    
      
  </form> 
      
 <?php
                    if(!empty($errors)){
                    echo "<p class='err'>".nl2br($errors)."</p>";
                    }
                    ?>
 
 </div></div>

 </div>
</div>
 




<?php include_once('footer.php');?>
    
    <script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("quotefrm");
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
			
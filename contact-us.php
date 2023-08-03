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
		<title>Contact Details - QuickBooks</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/fev.png">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/kawdoco.css">
<script src="js/kawdoco.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/styles.css">

 <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
<style>
.err
{
	font-family : Verdana, Helvetica, sans-serif;
	font-size : 12px;
	color: red;
}
</style>	

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
<script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>	
<style>

#container_boxes {
	position:absolute; 
	z-index:100; 
	margin-top:60px;
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

</style>


</head>

<body >
	<?php
if(!empty($errors)){
echo "<p class='err'>".nl2br($errors)."</p>";
}
?>

    <div  style="text-align:center; font-size:16px;  color:#000000; background-image:url(img/trans2.png); background-repeat:no-repeat; background-position:center; min-height:250px; padding:80px; " align="center"  id="container_boxes"   >
                   <a   href="index.php" style=""><img src="img/Logo.png" alt="logo" border="0"  ></a>
                   <br/>
                  HOT LINE : +94 112 872615 / +94 777 397487
                  <br/> EMAIL : <a href="mailto:info@qblanka.com">info@qblanka.com</a>
 </div>      
		
    <?php include_once('main-menu.php');?>

			</div>
				<div class="container-edit-fluid " style=" background: url('img/slider/1.jpg'); min-height:400px; background-size:cover !important; ">
				
				
				</div>



 <div class="container-edit-fluid" style="background-image:url(img/tape-qblanka.jpg)">      
                          <div class="container-edit"> 
<ol class="breadcrumb"  style="padding:5px; margin:3px 0 0 0;">
  <li><a href="http://www.qblanka.com/">HOME</a></li>
    <li><a href="#">CONTACT US</a></li>
 </ol>
  </div>
  </div>
         
         
<div class="container-edit">
<h2>CONTACT US</h2>
  <div class="panel panel-default">
  <div class="panel-body">
  
 <div class="col-sm-8">
<p>Should you require any further information or assistance, feel free to drop us an email by filing your details below </p>
<p>For any urgent queries, you can contact us directly on the telephone numbers provided on this page. </p>

  
	<form method="POST" name="contact_form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
    <div class="form-group">
 
    <input type="text" class="form-control" id="name" placeholder="Name" value='<?php echo htmlentities($name) ?>' name="name">
  </div>
  <div class="form-group">
 
    <input type="email" class="form-control" id="email" placeholder="Email" value='<?php echo htmlentities($email) ?>' name="email">
  </div>
   <div class="form-group">
   
    <input type="company" class="form-control" id="company" placeholder="Company" value='<?php echo htmlentities($company) ?>'
     name="company">
  </div>
  
  <div class="form-group">
   
    <input type="tel" class="form-control" id="telephone" placeholder="Telephone" value='<?php echo htmlentities($telephone) ?>'
     name="telephone">
  </div>
  <div class="form-group">
 
<textarea placeholder="Enter Inquire" class="form-control" value='<?php echo htmlentities($inquire) ?>' name="inquire" id="inquire"></textarea>
  </div>
  <div class="form-group">

  <p>
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
<label for='message'>Enter the code above here :</label><br>
<input id="6_letters_code" name="6_letters_code" type="text" class="form-control"><br>
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
</p>
  </div>

  <button type="submit" class="btn btn-info" style=" background-color:#96bc6d; color:#FFF; border:0;" name="submit" id="submit">Contact us</button>
</form>
		
<?php
if(!empty($errors)){
echo "<p class='err'>".nl2br($errors)."</p>";
}
?>
  </div>
  
   <div class="col-sm-4">
    <div class="panel panel-default">
  <div class="panel-body">
<h3>Head Office</h3>

QB Lanka (Pvt) Ltd ,
<br/> 22F, Main Street, 
<br/>Battaramulla, <br/>
 Sri Lanka.<br/><br/>
 
 
<div align="left">
Telephone : 0112-872615, 0112-872141/6 <br/>
Mobile : 0714-170892, 0777-934187, 0777-397487<br/>
Email : <a href="mailto:info@quickbooks.lk">info@quickbooks.lk</a>

</div>
 




   </div></div>
   </div>  
     
 
  </div></div>
  
    <div class="panel panel-default">
  <div class="panel-body">
  
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.470197866875!2d79.9068676680741!3d6.906437652649437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259f9184e2b21%3A0xeca0cd06043607fb!2sQB+Lanka+(PVT)+LTD!5e0!3m2!1sen!2slk!4v1445520166990" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  
  
  </div></div>
  
        
</div>
     
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
			
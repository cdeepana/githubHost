<?php 
$your_email ='bookings@omegaregency.lk';// <<=== update to your email address

session_start();
$errors = '';
$title-'';
$fname = '';
$lname = '';
$address= '';
$country = '';
$email = '';
$tel= '';
$fax = '';
$date = '';
$people = '';
$ra1='';
$howtoknow = '';

$message='';


if(isset($_POST['submit']))
{
	
	$title = $_POST['title'];
        $fname = $_POST['fname'];

              
        $lname = $_POST['lname'];
        
        $address = $_POST['address'];
        
	$country = $_POST['country'];
	$email = $_POST['email'];
        $tel = $_POST['tel'];
        $fax = $_POST['fax'];
        $date = $_POST['date'];
        $people = $_POST['people'];
       $ra1= $_POST['ra1'];
        $howtoknow = $_POST['howtoknow'];
       
	$message = $_POST['message'];
       
        
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
		$subject="Wedding Inquire";
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
                <img src='http://www.omegaregency.lk/img/logo.png'/>
                  </div>
                <div align='center'>                 
                  <table border='1'  style='width:40% ; border-collapse: collapse;'>                  
                 
                     <tr>
                    <th>Title</th>
                    <td>".$title."</td> 

                  </tr>
                    <tr>
                    <th>First Name</th>
                    <td>".$fname."</td> 

                  </tr>
                  </tr>
                    <tr>
                    <th>Last Name</th>
                    <td>".$lname."</td> 

                  </tr>
                  <tr>
                    <th>Address</th>
                    <td>".$address."</td> 

                  </tr>
                  <tr>
                    <th>Country</th>
                    <td>".$country."</td> 

                  </tr>
                  
                  <tr>
                    <th>Email</th>
                    <td>".$email."</td> 

                  </tr>                
                  <tr>
                    <th>Telephone</th>
                    <td>".$tel."</td> 

                  </tr>
                   <tr>
                    <th>Fax</th>
                    <td>".$fax."</td> 

                  </tr>
                  <tr>
                    <th>Date</th>
                    <td>".$date."</td> 

                  </tr>
                   <tr>
                    <th>People</th>
                    <td>".$people."</td> 

                  </tr>
                    <tr>
                    <th>accomodation</th>
                    <td>".$ra1."</td> 

                  </tr>
                  <tr>
                    <th>know</th>
                    <td>".$howtoknow."</td> 

                  </tr>
                  <tr>
                    <th>message</th>
                    <td>".$message."</td> 

                  </tr>
                 
             
                
                
                </table>
                <img src=''>
                </div>
                </body>
                </head>
                </html>";
                
		
		$headers = "From: $from \r\n";
		$headers .= "Reply-To: $email \r\n";
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		mail($to, $subject, $body, $headers);
		
		header('Location: ../../thank-you.php');
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
<title>Wedding Inquiry - Omega Regency</title>
<link rel="shortcut icon" type="image/x-icon" href="../../img/fev.png">

<meta name="description" content="">

    
<!-- This website developed by Kawdoco . all source codes are copy right @ kawdoco. Cannot distribute without permission -->
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<link rel="stylesheet" type="text/css" href="../../css/slider/style.css">
<link rel="stylesheet" type="text/css" href="../../css/styles.css">
<link href="../../css/style1.css" rel="stylesheet" type="text/css"/>
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
    width: 330px;
    height: 33px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
   
    margin-top: 1px;
    border: none;
   background-color: #f5f5f5 !important;
    background:  url("../..//images/down.png") no-repeat 305px center;
}

</style>

<!-- This website developed by Kawdoco . all source codes are copy right @ kawdoco. Cannot distribute without permission -->
</head>

<body >
	

                  
   <?php  include_once('../../main-menu.php'); ?>
<!--
<div class="container-edit-fluid up-div" >
  <div class="col-sm-8" style="padding:0; margin:0; text-align:left"  >
-->
<div class="container-edit-fluid" style="margin-top:0px; background-image:url(http://www.kawdo.com/susara/omega/img/wedding.jpg); min-height:450px;">
           </div>
                     
            
            
          <!-- END REVOLUTION SLIDER -->
    
          
			<div class="container-edit-fluid up-div" style="margin-top:0px; background-color:#9713ac; min-height:6px;">
  

		
           </div>
           
<div class="container-edit" >

 <div class="col-sm-12" style="text-align:justify"  >
 
 
 
 <h1 class="fntt" align="center">WEDDING INQUIRY </h1>
 <ol class="breadcrumb" >
    <li><a href="../../dining/index.php">Home</a>    </li>
    <li class="active">Wedding Inquiry</li>   
</ol>

 <form action="<?php $_PHP_SELF ?>" method="post" name="weddingfrm">
<div class="panel panel-default">
  <div class="panel-body">
  

 
  <div class="col-sm-4" style="margin:0;">
      <div class="select1">
 <select name="title" class="form-control1" value=''>
<option value="0" >Title </option>
<option value="Mr">Mr.</option>
<option value="Mrs">Mrs.</option>
<option value="Ms">Ms.</option>
<option value="Dr">Dr.</option>
<option value="Prof">Prof.</option>
 </select></div><br>

      <input name="fname" type="text" class="form-control1" placeholder="First Name *" value='' /> 
      <br>
   <input name="lname" type="text" class="form-control1" placeholder="Last Name *"  value=''/> 
   <br>
       <textarea name="address" cols="" rows="" class="form-control1" placeholder="Postal Address *" value=''></textarea> 
       <br> 
       <div class="select1" >
           <select name="country" class="form-control1" placeholder="" value=''>
<option value=""> Country * </option>
<option value="Afganistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome & Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
           </select></div>
      
      
</div>
  <div class="col-sm-4" style=" margin:0;">
      
      <input name="email" type="text" class="form-control1" placeholder="Email *" value='' /> <br>
      
 <input name="tel" type="text" class="form-control1" placeholder="Telephone *" value=''/>  <br>
 
   <input name="fax" type="text" class="form-control1"  placeholder="Fax " value=''/> <br>
   
     <input name="date" type="text" class="form-control1" placeholder="Preferred Date dd/mm/yy " value=''/>  <br>
  
      
 <input name="people" type="text" class="form-control1" placeholder="Number of People Attendinge"  value=''/> 
  <br>
  Accommodation required?&nbsp;&nbsp;&nbsp;&nbsp;
 Yes&nbsp;&nbsp;<input name="ra1" type="radio" value="Yes"   value='' />
 &nbsp;&nbsp;&nbsp;&nbsp;No&nbsp;&nbsp;<input name="ra1" type="radio" value="No"   value=''/> 


 </div>
   <div class="col-sm-4" style="margin:0;">
       <div class="select1">  
  <select name="howtoknow" class="form-control1" placeholder="How did you hear about us? *" value=''>
<option value="" >How did you hear about us? *</option>
				<option value="Radio">Radio</option>
				<option value="Magazine">Magazine</option>
				<option value="Newspaper">Newspaper</option>
				<option value="Internet">Internet</option>
				<option value="Friend">Friend</option>
  </select> </div> <br>
 <textarea name="message" cols="" rows="" class="form-control1"  placeholder="Comments" value=''></textarea> <br>
 
  <div class="form-group">

  <p>
      <img src="../../captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
<label for='message'>Enter the code above here :</label><br>
<input id="6_letters_code" name="6_letters_code" type="text" class="form-control1 "><br>
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
</p>
  </div> 
   
    <button name="submit"  type="submit" class="btn btn-info" style=" background-color:#96bc6d; color:#FFF; border:0; margin-left:20px;" /> Submit</button>

 
   </div>
  
  
</div>
</div>


</form> 
<?php
                    if(!empty($errors)){
                    echo "<p class='err'>".nl2br($errors)."</p>";
                    }
                    ?>

 </div>
</div>
 




<?php include_once('../../footer.php');?>
          
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
			
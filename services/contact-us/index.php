<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name=viewport content="width=device-width,initial-scale=1">
<title>Contact Us - Omega Regency</title>
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

.form-control{

margin:5px;
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

  <img src="http://www.kawdo.com/susara/omega/img/omega.jpg">
</div>


 </div>
 
 <div class="col-sm-9" style="text-align:justify"  >
 
 
 
 <h1>CONTACT US </h1>
 <ol class="breadcrumb" >
    <li><a href="../../dining/index.php">Home</a>    </li>
    <li class="active">Contact Us</li>   
</ol>

<p> Thank you for visiting our web site. You may use the form below to request information or send us your comments or questions. </p>
<p> Alternatively, you can contact us via the following: </p>

<p> Address: Omega Regency , 324, Galle Road , Wellawatte , Colombo 06 , Sri Lanka. </p>

<p>Telephone: +94 112 582277, +94 112 363604<br/>
Fax: +94 114 012695<br/>
E-mail: bookings@omegaregency.lk
</p>

<div class="panel panel-default">
  <div class="panel-body">

<form action="../../mailer5.php" method="post">

   <div class="col-sm-4" style="margin:0; float:left;">
   
<select name="title" class="form-control">
<option value="please select...." > Title</option>
				<option value="1">Mr.</option>
				<option value="2">Mrs.</option>
				<option value="3">Ms.</option>
				<option value="4">Dr.</option>
				<option value="5">Prof.</option></select> 
                             
  <input name="first_name" type="text" class="form-control" placeholder="First name *"  /> 
  <input name="last_name" type="text" class="form-control" placeholder="Last name *" /> 
  <textarea name="comments" cols="" rows="" class="form-control" placeholder="Comments" ></textarea> 
  </div>
     <div class="col-sm-4" style="margin:0;">
 <input name="email" type="text" class="form-control" placeholder="Email * "  /> 
  <input name="tele" type="text" class="form-control" placeholder="Telephone *"  /> 
  <input name="fax" type="text" class="form-control"  placeholder="Fax" /> 
  
   <input name="verif_box" type="text" id="verif_box"  class="form-control" placeholder="Verification Code" />
<img src="http://www.omegaregency.lk/verificationimage2.php?1741" alt="verification image, type it in the box" width="50" height="24" style="position:relative; left:10px; top:0px;" /> 

  </div>
     <div class="col-sm-4" style="margin:0;">
     
  <textarea name="postal_address" cols="" rows="" class="form-control" placeholder="Postal address" ></textarea> 
 
  <select name="country" class="form-control" placeholder="Country" >
<option value=""> Country</option>
				<option value="3">Afghanistan</option>
				<option value="6">Albania</option>
				<option value="59">Algeria</option>
				<option value="12">American Samoa</option>
				<option value="1">Andorra</option>
				<option value="9">Angola</option>
				<option value="5">Anguilla</option>
				<option value="10">Antarctica</option>
				<option value="4">Antigua and Barbuda</option>
				<option value="11">Argentina</option>
				<option value="7">Armenia</option>
				<option value="15">Aruba</option>
				<option value="14">Australia</option>
				<option value="13">Austria</option>
				<option value="16">Azerbaidjan</option>
				<option value="30">Bahamas</option>
				<option value="23">Bahrain</option>
				<option value="19">Bangladesh</option>
				<option value="18">Barbados</option>
				<option value="34">Belarus</option>
				<option value="20">Belgium</option>
				<option value="35">Belize</option>
				<option value="25">Benin</option>
				<option value="26">Bermuda</option>
				<option value="31">Bhutan</option>
				<option value="28">Bolivia</option>
				<option value="17">Bosnia-Herzegovina</option>
				<option value="33">Botswana</option>
				<option value="32">Bouvet Island</option>
				<option value="29">Brazil</option>
				<option value="101">British Indian Ocean Territory</option>
				<option value="27">Brunei Darussalam</option>
				<option value="22">Bulgaria</option>
				<option value="21">Burkina Faso</option>
				<option value="24">Burundi</option>
				<option value="111">Cambodia</option>
				<option value="45">Cameroon</option>
				<option value="36">Canada</option>
				<option value="50">Cape Verde</option>
				<option value="118">Cayman Islands</option>
				<option value="38">Central African Republic</option>
				<option value="205">Chad</option>
				<option value="44">Chile</option>
				<option value="46">China</option>
				<option value="51">Christmas Island</option>
				<option value="37">Cocos (Keeling) Islands</option>
				<option value="47">Colombia</option>
				<option value="113">Comoros</option>
				<option value="39">Congo</option>
				<option value="40">Congo</option>
				<option value="43">Cook Islands</option>
				<option value="48">Costa Rica</option>
				<option value="94">Croatia</option>
				<option value="49">Cuba</option>
				<option value="52">Cyprus</option>
				<option value="53">Czech Republic</option>
				<option value="56">Denmark</option>
				<option value="55">Djibouti</option>
				<option value="57">Dominica</option>
				<option value="58">Dominican Republic</option>
				<option value="214">East Timor</option>
				<option value="60">Ecuador</option>
				<option value="62">Egypt</option>
				<option value="201">El Salvador</option>
				<option value="84">Equatorial Guinea</option>
				<option value="64">Eritrea</option>
				<option value="61">Estonia</option>
				<option value="66">Ethiopia</option>
				<option value="69">Falkland Islands</option>
				<option value="71">Faroe Islands</option>
				<option value="68">Fiji</option>
				<option value="67">Finland</option>
				<option value="200">Former USSR</option>
				<option value="72">France</option>
				<option value="73">France (European Territory)</option>
				<option value="77">French Guyana</option>
				<option value="206">French Southern Territories</option>
				<option value="74">Gabon</option>
				<option value="81">Gambia</option>
				<option value="76">Georgia</option>
				<option value="54">Germany</option>
				<option value="78">Ghana</option>
				<option value="79">Gibraltar</option>
				<option value="85">Greece</option>
				<option value="80">Greenland</option>
				<option value="75">Grenada</option>
				<option value="83">Guadeloupe (French)</option>
				<option value="88">Guam (USA)</option>
				<option value="87">Guatemala</option>
				<option value="82">Guinea</option>
				<option value="89">Guinea Bissau</option>
				<option value="90">Guyana</option>
				<option value="95">Haiti</option>
				<option value="92">Heard and McDonald Islands</option>
				<option value="93">Honduras</option>
				<option value="91">Hong Kong</option>
				<option value="96">Hungary</option>
				<option value="104">Iceland</option>
				<option value="100">India</option>
				<option value="97">Indonesia</option>
				<option value="103">Iran</option>
				<option value="102">Iraq</option>
				<option value="98">Ireland</option>
				<option value="99">Israel</option>
				<option value="105">Italy</option>
				<option value="42">Ivory Coast (Cote D'Ivoire)</option>
				<option value="106">Jamaica</option>
				<option value="108">Japan</option>
				<option value="107">Jordan</option>
				<option value="119">Kazakhstan</option>
				<option value="109">Kenya</option>
				<option value="112">Kiribati</option>
				<option value="117">Kuwait</option>
				<option value="110">Kyrgyz Republic (Kyrgyzstan)</option>
				<option value="120">Laos</option>
				<option value="129">Latvia</option>
				<option value="121">Lebanon</option>
				<option value="126">Lesotho</option>
				<option value="125">Liberia</option>
				<option value="130">Libya</option>
				<option value="123">Liechtenstein</option>
				<option value="127">Lithuania</option>
				<option value="128">Luxembourg</option>
				<option value="140">Macau</option>
				<option value="136">Macedonia</option>
				<option value="134">Madagascar</option>
				<option value="148">Malawi</option>
				<option value="150">Malaysia</option>
				<option value="147">Maldives</option>
				<option value="137">Mali</option>
				<option value="145">Malta</option>
				<option value="135">Marshall Islands</option>
				<option value="142">Martinique (French)</option>
				<option value="143">Mauritania</option>
				<option value="146">Mauritius</option>
				<option value="237">Mayotte</option>
				<option value="149">Mexico</option>
				<option value="70">Micronesia</option>
				<option value="133">Moldavia</option>
				<option value="132">Monaco</option>
				<option value="139">Mongolia</option>
				<option value="144">Montserrat</option>
				<option value="131">Morocco</option>
				<option value="151">Mozambique</option>
				<option value="138">Myanmar</option>
				<option value="152">Namibia</option>
				<option value="161">Nauru</option>
				<option value="160">Nepal</option>
				<option value="158">Netherlands</option>
				<option value="8">Netherlands Antilles</option>
				<option value="162">Neutral Zone</option>
				<option value="153">New Caledonia (French)</option>
				<option value="164">New Zealand</option>

				<option value="157">Nicaragua</option>
				<option value="154">Niger</option>
				<option value="156">Nigeria</option>
				<option value="163">Niue</option>
				<option value="155">Norfolk Island</option>
				<option value="115">North Korea</option>
				<option value="141">Northern Mariana Islands</option>
				<option value="159">Norway</option>
				<option value="165">Oman</option>
				<option value="171">Pakistan</option>
				<option value="177">Palau</option>
				<option value="166">Panama</option>
				<option value="169">Papua New Guinea</option>
				<option value="178">Paraguay</option>
				<option value="167">Peru</option>
				<option value="170">Philippines</option>
				<option value="174">Pitcairn Island</option>
				<option value="172">Poland</option>
				<option value="168">Polynesia (French)</option>
				<option value="176">Portugal</option>
				<option value="175">Puerto Rico</option>
				<option value="179">Qatar</option>
				<option value="180">Reunion (French)</option>
				<option value="181">Romania</option>
				<option value="182">Russian Federation</option>
				<option value="183">Rwanda</option>
				<option value="86">S. Georgia &amp;amp; S. Sandwich Isls.</option>
				<option value="190">Saint Helena</option>
				<option value="114">Saint Kitts &amp;amp; Nevis Anguilla</option>
				<option value="122">Saint Lucia</option>
				<option value="173">Saint Pierre and Miquelon</option>
				<option value="228">Saint Vincent &amp;amp; Grenadines</option>
				<option value="235">Samoa</option>
				<option value="195">San Marino</option>
				<option value="199">Sao Tome</option>
				<option value="184">Saudi Arabia</option>
				<option value="196">Senegal</option>
				<option value="186">Seychelles</option>
				<option value="194">Sierra Leone</option>
				<option value="189">Singapore</option>
				<option value="193">Slovak Republic</option>
				<option value="191">Slovenia</option>
				<option value="185">Solomon Islands</option>
				<option value="197">Somalia</option>
				<option value="239">South Africa</option>
				<option value="116">South Korea</option>
				<option value="65">Spain</option>
				<option value="124">Sri Lanka</option>
				<option value="187">Sudan</option>
				<option value="198">Suriname</option>
				<option value="192">Svalbard and Jan Mayen Islands</option>
				<option value="203">Swaziland</option>
				<option value="188">Sweden</option>
				<option value="41">Switzerland</option>
				<option value="202">Syria</option>
				<option value="209">Tadjikistan</option>
				<option value="218">Taiwan</option>
				<option value="219">Tanzania</option>
				<option value="208">Thailand</option>
				<option value="207">Togo</option>
				<option value="210">Tokelau</option>
				<option value="213">Tonga</option>
				<option value="216">Trinidad and Tobago</option>
				<option value="212">Tunisia</option>
				<option value="215">Turkey</option>
				<option value="211">Turkmenistan</option>
				<option value="204">Turks and Caicos Islands</option>
				<option value="217">Tuvalu</option>
				<option value="221">Uganda</option>
				<option value="220">Ukraine</option>
				<option value="2">United Arab Emirates</option>
				<option value="222">United Kingdom</option>
				<option value="224">United States</option>
				<option value="225">Uruguay</option>
				<option value="223">USA Minor Outlying Islands</option>
				<option value="226">Uzbekistan</option>
				<option value="233">Vanuatu</option>
				<option value="227">Vatican City</option>
				<option value="229">Venezuela</option>
				<option value="232">Vietnam</option>
				<option value="230">Virgin Islands (British)</option>
				<option value="231">Virgin Islands (USA)</option>
				<option value="234">Wallis and Futuna Islands</option>
				<option value="63">Western Sahara</option>
				<option value="236">Yemen</option>
				<option value="238">Yugoslavia</option>
				<option value="241">Zaire</option>
				<option value="240">Zambia</option>
				<option value="242">Zimbabwe</option></select>
                
  
 <select name="nature_inquiry" class="form-control">
 	<option value="please select....">Nature of Enquiry? *</option>
				<option value="1">General Enquiry</option>
				<option value="2">Reservations</option>
				<option value="3">Conferences</option>
				<option value="4">Weddings</option>
				<option value="5">Sales</option>
				<option value="6">Spa &amp; Fitness</option>
				<option value="7">Other</option></select></li>
                
 
 <select name="about_us" class="form-control">
 	<option value="please select...."> How did you hear about us? </option>
				<option value="1">Radio</option>
				<option value="2">Magazine</option>
				<option value="3">Newspaper</option>
				<option value="4">Internet</option>
				<option value="5">Friend</option></select></li>
  
  </div>
 <button name="Submit"  type="submit" class="btn btn-info" style=" background-color:#96bc6d; color:#FFF; border:0; margin-left:20px;" /> Submit</button>
 <input name="sendto" type="hidden" value="reservations@omegaregency.lk, hotelommegain@sltnet.lk" />
 
</form>

</div></div>


 
<div class="col-sm-12"  style="margin:0; padding:0;"  >
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.17543957991!2d79.86137789417789!3d6.869570371426649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bba8b9ba06d%3A0x93ebfb1fad31a8b3!2sOmega+Regency!5e0!3m2!1sen!2slk!4v1449500467568" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

  </div>
</div>
 <br/><br/>
   



<?php include_once('../../footer.php');?>
</body>
</html>
			
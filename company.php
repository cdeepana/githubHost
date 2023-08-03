	<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name=viewport content="width=device-width,initial-scale=1">
		<title>The Company  - Qb Lanka ( Pvt ) Ltd</title>
 	<link rel="shortcut icon" type="image/x-icon" href="img/fev.png">
<link rel="stylesheet" type="text/css" href="css/style.css">
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/kawdoco.css">
<script src="js/kawdoco.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/styles.css">
 
  <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
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
	
    <?php include_once('main-menu.php');?>
    
    <div  style="text-align:center; font-size:16px;  color:#000000; background-image:url(img/trans2.png); background-repeat:no-repeat; background-position:center; min-height:250px; padding:80px; " align="center"  id="container_boxes"   >
                   <a   href="index.php" style=""><img src="img/Logo.png" alt="logo" border="0"  ></a>
                   <br/>
                  HOT LINE : +94 112 872615 / +94 777 397487
                  <br/> EMAIL : <a href="mailto:info@qblanka.com">info@qblanka.com</a>
 </div>      
		

			
<div class="container-edit-fluid " style=" background:url(img/slider/1.jpg);  min-height:400px; background-size:cover !important; ">
				</div>
          
          <div class="container-edit-fluid" style="background-image:url(img/tape-qblanka.jpg)">      
                          <div class="container-edit"> 
<ol class="breadcrumb"  style="padding:5px; margin:3px 0 0 0;">
  <li><a href="http://www.qblanka.com/">HOME</a></li>
    <li><a href="#">THE COMPANY</a></li>
 </ol>
  </div>
  </div>
         
         <div class="container-edit">
		<h2>THE COMPANY</h2>
        	
     <div class="panel panel-default">
  <div class="panel-body">
  
<p>QB Lanka (Pvt) Ltd, is a limited liability company duly incorporated in 2008 under the Companies Act No. 07 of 2007, and domiciled in the democratic Socialist Republic of Sri Lanka. Companies registered office is located at No.22 F, Main Street, Battaramulla. Company Registration No: PV - 66865 </p>

<p>QB Lanka (Pvt) Ltd, is in the field of software development since 1998. Presently QB Lanka (Pvt) Ltd, is offering different types of Business Operation software products to a wide range of business modules across the country.</p>

<p>Mr.SamanthaWeerasuriya, is the founder of QB Lanka (Pvt) Ltd, and presently he is holds the Managing Directorship of QB Lanka (Pvt) Ltd. Mr. Samantha Weerasuriya is <strong> graduated from the university of Colombo </strong> and Certified Public Accountant. He was a <strong> visiting lecturer for University of Kelaniya</strong> and the  < strong>Institute for Chartered Accountants of Sri Lanka </strong>(CA Sri Lanka) and appointed as a < strong>committee member of FITIS </strong>and < strong>Consulting for Central Environmental Authority, American Embassy of Sri lanka </strong>, and < strong>Sri Lanka Institute of distance Learning (SLIDA) </strong></p>

<p>QuickBalanze Solutions developed by QB LANKA (PVT) LTD. The said Accounting/ERP application can be provided as a desktop or cloud version for any organization with required customizations. It comes with a wide range of modules in modern business world and Local Requirements such as VAT & NBT Compatibility, Stock Multi-location Handling, Invoicing with Column Discount, Item Transfer facility Inventory assembling and dis assembling management and financial accounting management with effective cost Accounting. Specially Import Costing handling Job costing, Profit centers and fixed asset handling included.</p> 
<p><strong>By gathering over 15 years’ experience and collecting more than 2000 local companies requirements we proudly offer  Best solutions for Local companies. </strong></p>

 
 
</div>
</div>
</div>


<div class="container-edit-fluid"  style="padding:0; background-image:url(img/old_paper.jpg); background-repeat:repeat;"  align="center">
 <h2 align="center" style="font-weight:100">Local Member of </h2>
 <img src="img/icta.jpg" width="196" height="77" />
 <img src="img/fitis.jpg" width="201" height="107" />
 <img src="img/slasi.jpg" width="176" height="87" />
 <br/><br/>
 
 <h2 align="center" style="font-weight:100"> International Member of </h2>
 <img src="img/intuit.jpg" width="156" height="115" />
 <img src="img/intuit-resller.jpg" width="177" height="102" />
 <br/><br/><br/>
   </div>
   
   
<div class="container-edit"  style="padding:0;">
   <?php  include_once('principles.php'); ?>
   </div>


     
         
          <?php include_once('footer.php');?>
	</body>
</html>
			
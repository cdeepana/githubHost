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
            $(document).ready(function () {
                if ($(window).width() > 768) {
                    $('.navbar-default .dropdown').on('mouseover', function () {
                        $('.dropdown-toggle', this).next('.dropdown-menu').show();
                    }).on('mouseout', function () {
                        $('.dropdown-toggle', this).next('.dropdown-menu').hide();
                    });
                } else {
                    $('.navbar-default .dropdown').off('mouseover').off('mouseout');
                }
                $('.dropdown-toggle').click(function () {
                    if ($(this).next('.dropdown-menu').is(':visible')) {
                        window.location = $(this).attr('href');
                    }
                });



            });
        </script>

        <script>
            $('ul.nav li.dropdown').hover(function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            }, function () {
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
            /*  bhoechie tab */
            div.bhoechie-tab-container{
                z-index: 10;
                background-color: #ffffff;
                padding: 0 !important;
                border-radius: 4px;
                -moz-border-radius: 4px;
                border:1px solid #ddd;
                margin-top: 20px;

                /*  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
                  box-shadow: 0 6px 12px rgba(0,0,0,.175);
                  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
                  background-clip: padding-box;*/
                /*  opacity: 0.97;
                  filter: alpha(opacity=97);*/
            }
            div.bhoechie-tab-menu{
                padding-right: 0;
                padding-left: 0;
                padding-bottom: 0;
            }
            div.bhoechie-tab-menu div.list-group{
                margin-bottom: 0;
            }
            div.bhoechie-tab-menu div.list-group>a{
                margin-bottom: 0;
            }
            div.bhoechie-tab-menu div.list-group>a .glyphicon,
            div.bhoechie-tab-menu div.list-group>a .fa {
                color: #9713ac;
            }
            div.bhoechie-tab-menu div.list-group>a:first-child{
                border-top-right-radius: 0;
                -moz-border-top-right-radius: 0;
            }
            div.bhoechie-tab-menu div.list-group>a:last-child{
                border-bottom-right-radius: 0;
                -moz-border-bottom-right-radius: 0;
            }
            div.bhoechie-tab-menu div.list-group>a.active,
            div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
            div.bhoechie-tab-menu div.list-group>a.active .fa{
                background-color: #9713ac;
                border-color: #9713ac;
                background-image: none;
                color: #ffffff;
            }
            div.bhoechie-tab-menu div.list-group>a.active:after{
                content: '';
                position: absolute;
                left: 100%;
                top: 50%;
                margin-top: -13px;
                border-left: 0;
                border-bottom: 13px solid transparent;
                border-top: 13px solid transparent;
                border-left: 10px solid #9713ac;
            }

            div.bhoechie-tab-content{
                background-color: #ffffff;
                /* border: 1px solid #eeeeee; */
                padding-left: 20px;
                padding-top: 10px;
                margin-bottom: 20px;
            }

            div.bhoechie-tab div.bhoechie-tab-content:not(.active){
                display: none;
            }

        </style>



        <!-- This website developed by Kawdoco . all source codes are copy right @ kawdoco. Cannot distribute without permission -->
    </head>

    <body onLoad="startTime()" >



        <?php include_once('../main-menu.php'); ?>
        <!--
        <div class="container-edit-fluid up-div" >
          <div class="col-sm-8" style="padding:0; margin:0; text-align:left"  >
        -->

        <div class="container-edit-fluid" style="margin-top:0px; background-image:url(https://www.omegaregency.lk/img/dining.jpg); min-height:450px;">
        </div>  


        <!-- END REVOLUTION SLIDER -->


        <div class="container-edit-fluid up-div" style="margin-top:0px; background-color:#9713ac; min-height:6px;">



        </div>

        <div class="container-edit" >



            <div class="col-sm-12" style="text-align:justify"  >



                <h1 class="fntt" >DINING </h1>
                <!--<span class="sectionline"></span>-->

                <ol class="breadcrumb" >
                    <li><a href="index.php">Home</a>    </li>
                    <li class="active">Dining</li>   
                </ol>

                <p>The well known restaurants and bars at Omega Regency are run by Colombo’s best and most welcoming teams. Come for delicious teas & brunches on Alindaya, The best mom’s style rice and curry in Spice & Ice, the finest contemporary multi cuisine at Opera and glorious English style pub to begin or end your evening. </p>

                <h5>To make a reservation, please contact Restaurant Reservations at Omega Regency on  +94 11 2363604 or email
                    events@omegaregency.lk </h5>


                <p>If you would like to explore the restaurants further and see all our special offers please click on the restaurant names to the left.</p>




            </div>

            <div class="col-md-12" style="padding-right: 30px;padding-left: 30px;">
                <div class="row bhoechie-tab-container">
                    <div class="col-md-3 bhoechie-tab-menu">
                        <div class="list-group">

                            <a href="#" class="list-group-item active text-center ">
                                <h4><i class="fa fa-deviantart" aria-hidden="true"></i></h4>
                                ALINDAYA
                            </a>
                            <a href="#" class="list-group-item  text-center">
                                <h4><i class="fa fa-cog" aria-hidden="true"></i></h4>
                                SPICE & ICE
                            </a>
                            <a href="#" class="list-group-item  text-center">
                                <h4><i class="fa fa-connectdevelop" aria-hidden="true"></i></h4>
                                OPERA MULTI CUISINE
                            </a>


                        </div>
                    </div>
                    <div class="col-md-9 bhoechie-tab">

                        <div class="bhoechie-tab-content active">
                            
                                <div class="col-md-12"  style="background: #f5f5f5;">
<h1>ALINDAYA </h1>
<p>Exclusive to open air tea lovers is the uniquely named ‘Alindaya’, a stylish but intimate space for Omega breakfast & morning tea, light lunches, afternoon tea with elegance, bite size cakes, biscuits & pastries, savory nibbles, and uniquely Sri Lankan hoppers – all reflecting the ethos that ‘a little of what you love is good for you. </p>

<h5> OPENING HOURS  </h5>

<div class="panel panel-default" >
  <div class="panel-body" >
<table class="table" style="padding:0; margin:0; width:80% ">
    <tr><td> Breakfast & Morning Tea </td></tr>
    <tr><td>Monday – Friday</td><td>7:00 am – 10:00 am</td></tr>
    <tr><td>Saturday</td><td>7:00 am – 10:00 am</td></tr>
    <tr><td>Sunday and Public Holidays  </td><td>8:00 am – 11:00 am</td></tr>

   <tr><td> Afternoon Tea</td></tr>
   <tr><td> Monday – Friday  </td><td>  1:30 pm – 05:30 pm</td></tr>
   <tr><td> Saturday  </td><td>  1:30 pm – 05:30 pm</td></tr>
   <tr><td> Sunday and Public Holidays</td><td>    1:30 pm – 05:30 pm</td></tr>


</table>
</div></div>

<h5>To make a reservation, please contact Restaurant Reservations at Omega Regency on  +94 11 2363604  or email
 events@omegaregency.lk  </h5>
 
 
                                </div>
                            
                        </div>	
                        <div class="bhoechie-tab-content">
                            <div class="col-md-12"  style="background: #f5f5f5;">
                                <h1>SPICE & ICE </h1>
                                
<p>A variety of snacks, our very own rice & curry, a quickie from the menu and smoothies by day, and a selection of cakes, our contemporary cuisine and the Indian excellence by night, is Spice & Ice’s unique trendiness to keep your busy day moving forward. This family restaurant and patisserie is well prepared with an all day dining menu, and it’s just a matter of a phone call for any of your take away orders though it’s a single meal or more.. </p>

<h5> OPENING HOURS </h5>

<div class="panel panel-default" >
  <div class="panel-body" >
<table class="table" style="padding:0; margin:0; width:80% ">
    <tr><td> Breakfast, Lunch & Dinner </td></tr>
    <tr><td>Monday – Friday</td><td>6:30 am – 11:00 pm</td></tr>   
    <tr><td>Saturday  </td><td>  6:30 am – 11:00 pm</td></tr>
    <tr><td>Sunday and Public Holidays /td><td>   6:30 am – 11:00 pm</td></tr>

</table>
</div></div>
 
    

<h5>To make a reservation, please contact Restaurant Reservations at Omega Regency on  +94 11 2363604 or email
 events@omegaregency.lk </h5>
                            </div>
                        </div>	
                        <div class="bhoechie-tab-content">
                            <div class="col-md-12"  style="background: #f5f5f5;">
                                <h1>OPERA MULTI CUISINE </h1>
                                <p>An exquisite dining experience and the dramatic design frames the ambience beauty all around the stunning cuisine. An eclectic menu fuses flavours from Asia Pacific and India into a light, contemporary cuisine. Whether it’s a family dinner, a business lunch or a friends’ gathering, Opera Multi Cuisines impeccable service is well geared for your utmost pleasure.</p>

<h5> OPENING HOURS </h5>

<div class="panel panel-default" >
  <div class="panel-body" >
<table class="table" style="padding:0; margin:0; width:80% ">
    <tr><td > Lunch & Dinner </td></tr>
    <tr><td>Monday – Friday</td><td>11:30 am – 11:00 pm</td></tr>   
    <tr><td>Saturday  </td><td> 11:30 am – 11:00 pm</td></tr>
    <tr><td>Sunday and Public Holidays /td><td>   11:30 am – 11:00 pm</td></tr>

</table>

 </div></div>
 
<h5>To make a reservation, please contact Restaurant Reservations at Omega Regency on  +94 11 2363604  or email
 events@omegaregency.lk    </h5>
 
 
                            </div>
                        </div>	

                        


                    </div>
                </div>
            </div>   
        </div>





        <?php include_once('../footer.php'); ?>
        <script>
            $(document).ready(function () {
                $("div.bhoechie-tab-menu>div.list-group>a").click(function (e) {
                    e.preventDefault();
                    $(this).siblings('a.active').removeClass("active");
                    $(this).addClass("active");
                    var index = $(this).index();
                    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
                });
            });
        </script>
    </body>
</html>

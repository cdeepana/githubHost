<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name=viewport content="width=device-width,initial-scale=1">
<title>Weddings - Omega Regency</title>
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

<!--<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">


  var my={directionsSVC:new google.maps.DirectionsService(),
              maps:{},
              routes:{}};
      
      /**
        * base-class     
        * @param points optional array array of lat+lng-values defining a route
        * @return object Route
        **/                     
      function Route(points)
      {
        this.origin       = null;
        this.destination  = null;
        this.waypoints    = [];
        if(points && points.length>1)
        {
          this.setPoints(points);
        }
        return this; 
      };

      /**
        *  draws route on a map 
        *              
        * @param map object google.maps.Map 
        * @return object Route
        **/                    
      Route.prototype.drawRoute = function(map)
      {
        var _this=this;
        my.directionsSVC.route(
          {'origin': this.origin,
           'destination': this.destination,
           'waypoints': this.waypoints,
           'travelMode': google.maps.DirectionsTravelMode.DRIVING
          },
          function(res,sts) 
          {
              if(sts==google.maps.DirectionsStatus.OK){
              if(!_this.directionsRenderer)
              {
                _this.directionsRenderer 
                 = new google.maps.DirectionsRenderer({ 'draggable':true }); 
                              }
                _this.directionsRenderer.setMap(map);
                _this.directionsRenderer.setDirections(res);
                
                google.maps.event.addListener(_this.directionsRenderer,
                                              'directions_changed',
                                              function()
                                              {
                                                _this.setPoints();
                                              }
                                              );
                          }   
          });
        return _this;
       };

      /**
        * sets map for directionsRenderer     
        * @param map object google.maps.Map
        **/             
      Route.prototype.setGMap = function(map){
        this.directionsRenderer.setMap(map);
      };
      
      /**
        * sets origin, destination and waypoints for a route 
        * from a directionsResult or the points-param when passed    
        * 
        * @param points optional array array of lat+lng-values defining a route
        * @return object Route        
        **/
      Route.prototype.setPoints = function(points)
      {
        this.origin = null;
        this.destination = null;
        this.waypoints = [];
        if(points)
        {
          for(var p=0;p<points.length;++p)
          {
            this.waypoints.push({location:new google.maps.LatLng(points[p][0],
                                                                 points[p][1]),
                                 stopover:false});
          }
          this.origin=this.waypoints.shift().location;
          this.destination=this.waypoints.pop().location;
        }
        else
        {
          var route=this.directionsRenderer.getDirections().routes[0];
          
          for(var l=0;l<route.legs.length;++l)
          {
            if(!this.origin)this.origin=route.legs[l].start_location;
            this.destination = route.legs[l].end_location;
            
            for(var w=0;w<route.legs[l].via_waypoints.length;++w)
            {
              this.waypoints.push({location:route.legs[l].via_waypoints[w],
                                   stopover:false});
            }
          }
          //the route has been modified by the user when you're here
          //you may call now this.getPoints() and work with the result
        }

        return this;
      };
      
      /**
        * retrieves points for a route 
        *         
        * @return array         
        **/
    Route.prototype.getPoints = function()
    {
      var points=[[this.origin.lat(),this.origin.lng()]];
      
      for(var w=0;w<this.waypoints.length;++w)
      {
        points.push([this.waypoints[w].location.lat(),
                     this.waypoints[w].location.lng()]);
      }
      
      points.push([this.destination.lat(),
                   this.destination.lng()]);
      return points;
    };
   
    
    function initialize() 
    {
      var myOptions = {
	  					//mapTypeControlOptions: {mapTypeIds: ['Styled']},
                        zoom: 11,
						scrollwheel: false,
						disableDefaultUI: false,
                        center: new google.maps.LatLng(6.9344, 79.8428),
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
						
						//mapTypeId: 'Styled'
						
						styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e3e1e1"},{"lightness":5}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#a9b3a1"},{"lightness":10}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#f1b46d"},{"lightness":10}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#b2bbab"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#b2bbab"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#f4f4f4"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#b2bbab"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#ffffff"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]}]

                      };
        var map  = new google.maps.Map(document.getElementById('map_canvas'),  myOptions);
  //      my.maps.map2 = new google.maps.Map(document.getElementById('map_canvas2'),
                                          // myOptions);
      // my.maps.map1 = new google.maps.StyledMapType(styles, { name: 'Styled' });
	  
	  
	  
	  
	  var image = new google.maps.MarkerImage('gallery/katunayake.png', 
	        new google.maps.Size(150, 113),
	        new google.maps.Point(0,0),
	        new google.maps.Point(18, 42)
	    );

	    var marker1 = new google.maps.Marker({
	        position: new google.maps.LatLng(7.1667,79.8667),
	        map: map,
	        icon: image // This path is the custom pin to be shown. Remove this line and the proceeding comma to use default pin
	    });
	  
	  
	  	  var image = new google.maps.MarkerImage('gallery/hotel.png', 
	        new google.maps.Size(60, 73),
	        new google.maps.Point(0,0),
	        new google.maps.Point(18, 42)
	    );

	    var marker1 = new google.maps.Marker({
	        position: new google.maps.LatLng(6.869198,79.862132),
	        map: map,
	        icon: image // This path is the custom pin to be shown. Remove this line and the proceeding comma to use default pin
	    });

	  
	    var image = new google.maps.MarkerImage('gallery/train.png', 
	        new google.maps.Size(100, 65),
	        new google.maps.Point(0,0),
	        new google.maps.Point(18, 42)
	    );

	    var marker1 = new google.maps.Marker({
	        position: new google.maps.LatLng(6.9344,79.8428),
	        map: map,
	        icon: image // This path is the custom pin to be shown. Remove this line and the proceeding comma to use default pin
	    });
		
		
			    var image = new google.maps.MarkerImage('gallery/left.png', 
	        new google.maps.Size(100, 188),
	        new google.maps.Point(0,0),
	        new google.maps.Point(18, 42)
	    );

	    var marker1 = new google.maps.Marker({
	        position: new google.maps.LatLng(6.92146,79.81816),
	        map: map,
	        icon: image // This path is the custom pin to be shown. Remove this line and the proceeding comma to use default pin
	    });




	    var image = new google.maps.MarkerImage('gallery/right.png', 
	        new google.maps.Size(100, 188),
	        new google.maps.Point(0,0),
	        new google.maps.Point(18, 42)
	    );

	    var marker1 = new google.maps.Marker({
	        position: new google.maps.LatLng(6.92128,79.86605),
	        map: map,
	        icon: image // This path is the custom pin to be shown. Remove this line and the proceeding comma to use default pin
	    });




	  
         my.routes.r0 = new Route([ 
                                 
                                  [6.869198, 79.862132],
								   [7.1667, 79.8667], 								   
                                 ]).drawRoute(map);
        my.routes.r1 = new Route([
                                  
                                  [6.869198, 79.862132],
								  [6.9344, 79.8428]
                                 ]).drawRoute(map);
								 
								 
								 
      
        my.routes.rx=new Route();
        
		//var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
		//map.mapTypes.set('Styled', styledMapType);
		
        document.getElementById('UI').style.visibility='visible';
      }

      google.maps.event.addDomListener(window, 'load', initialize);
     
	 
	//  function fx(route)
    //  {
     //   var points=my.routes[route].getPoints();
     //   alert('copying route '+route+'\n__________\n'+points.join('\n'));
     //   my.routes.rx.setPoints(points).drawRoute(my.maps.map2);
    //  }
	  
  
	  
	  
	  
</script>-->


</head>

<body onLoad="startTime()" >
	

                  
   <?php  include_once('../main-menu.php'); ?>
<!--
<div class="container-edit-fluid up-div" >
  <div class="col-sm-8" style="padding:0; margin:0; text-align:left"  >
-->
<div class="container-edit-fluid" style="margin: 0; padding: 0; background-attachment: fixed;">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1791213307383!2d79.85989194990657!3d6.869128320931128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bba8b9ba06d%3A0x93ebfb1fad31a8b3!2sOmega+Regency!5e0!3m2!1sen!2slk!4v1464768979337" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>   </div>
<!--  <div id="map_canvas" style="height:550px;width:100%"></div>
    <div id="map_canvas2" style="height:300px;width:300px; display:none;"></div>
-->


         
            
          <!-- END REVOLUTION SLIDER -->
    
          
			<div class="container-edit-fluid up-div" style="margin-top:0px; background-color:#9713ac; min-height:6px;">
  

		
           </div>
           
<div class="container-edit" >
   <!--  
 <div class="col-sm-3" style="margin-top: 20px; margin-bottom: 20px;"  >

     <a href="http://www.kawdo.com/susara/omega/services/about-omega-regency/"><button class="button button1 btn-block">ABOUT OMEGA REGENCY </button></a>
      <br>
       <a href="http://www.kawdo.com/susara/omega/services/transportation-and-directions/"><button class="button button1 btn-block">TRANSPORTATION AND DIRECTIONS</button></a>
       <br>
        <a href="http://www.kawdo.com/susara/omega/services/room-service/"><button class="button button1 btn-block">ROOM SERVICE </button></a>
    <br>
        <a href="http://www.kawdo.com/susara/omega/services/travel-counter/"><button class="button button1 btn-block">TRAVEL COUNTER </button></a>
    <br>
        <a href="http://www.kawdo.com/susara/omega/services/24-7-shopping/"><button class="button button1 btn-block">24-7 SHOPPING</button></a>
   <br>
        <a href="http://www.kawdo.com/susara/omega/services/contact-us/"><button class="button button1 btn-block">CONTACT US</button></a>
   
 </div>-->
 
 
 
 
 <h1 class="fntt" align="center">OUR SERVICES </h1>
  <span class="sectionline"></span>
<div class="col-sm-12">
  <ol class="breadcrumb" >
    <li><a href="../dining/index.php">Home</a>    </li>
    <li class="active">Our Services</li>   
  </ol></div>
  <div class="col-sm-12" style="margin-bottom: 50px; margin-top: 50px;">
<p>Omega Regency offers the best of traditional values while continually
    introducing novel service principles and modern day technology making sure that 
    every guest experiences the grace and comfort.</p><br>

<p> Guests have the assurance of a highly personalized service by our professional and
    friendly team of staff members, along with latest business and entertainment systems,
    in rooms and throughout the hotel.  </p>
  </div>
  <div class="col-sm-12" style="border-bottom: #e1dfdd solid 1px;">
  <div class="col-sm-6 mp fnt">
     
      <ul>
          <li style="border-bottom: #e1dfdd solid 1px;"><b>No. of rooms:</b> 15</li>
            <li style="border-bottom: #e1dfdd solid 1px;"><b>Check-in:</b> 12.00 hrs</li> 
            <li style="border-bottom: #e1dfdd solid 1px;"><b>Check out:</b> 12.00 hrs	</li> 
            <li style="border-bottom: #e1dfdd solid 1px;"><b>Front Desk:</b> Yes (24 hours)</li> 
            <li  style="border-bottom: #e1dfdd solid 1px;"><b>Restaurant:</b> Multi cuisine for 50 pax</li>
            <li><b>Lounge:</b> Bistro for 30 pax</li>
      </ul>
      
   
</div>

<div class="col-sm-6 fnt">
    
    <ul>
        <li style="border-bottom: #e1dfdd solid 1px;"><b>Wi-Fi:</b> Free</li>
       <li style="border-bottom: #e1dfdd solid 1px;"><b>Room service:</b> Yes (from 6:00 – 22:00 hrs)</li>
        <li style="border-bottom: #e1dfdd solid 1px;"><b>Parking:</b> Free</li>
      <li style="border-bottom: #e1dfdd solid 1px;"><b>Laundry:</b> Yes (One day and regular services)</li>
        <li style="border-bottom: #e1dfdd solid 1px;"><b>Travel counter:</b> Yes <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Click here</button></li>
        <li><b>Reaching us:</b> <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal1">Click here</button></li>
        
    </ul>
  
    
   <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header modelhead">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title ">TRAVEL COUNTER </h2>
      </div>
      <div class="modal-body">
          <p align="justify">
              Omega Regency’s travel coordinators pride themselves on knowing Sri Lanka inside out.</p>

<p align="justify">Whether it’s a romantic honeymoon get away, a family holiday full of smiles & joy,
a cultural and educational tour around the island, an adventurous eco holiday with
wild life experience, a business tour to meet your VIPs,
a day excursion with bags full of shopping, or a combination of multiple options,
our co-ordinators know the best are always on hand to help you.</p>

<p align="justify">Luxurious fleet of micro vans, SUVs, and cars are the finest in Colombo-06 to travel in
    comfort & style with our experienced English speaking Chauffer Guides.</p>

<p align="justify">Enquiries For all your travel & holiday inquiries,
    please either call +94 11 2582277 or e-mail your details to: </p>
          </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn button1" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 
 
 <!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header modelhead">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">TRANSPORTATION AND DIRECTIONS </h2>
      </div>
      <div class="modal-body">
          <p><b>Colombo Airport</b></p>
          <p>75 minutes by car/taxi</p>
          <br>
          <p><b>Colombo Fort Rail Station</b></p>
          <p>20 minutes by car/taxi</p>
          <p>30 minutes by bus</p>
          <br>
          <p><b>The City</b></p>
          <p>10 minutes by car/taxi</p>
          <br>
          <p><b>Nearest Rail Stations</b></p>
          <p>Wellawatte</p>
          <p>Nugegoda</p>
          <br>
          <p><b>GPS coordinates</b></p>
          <p>6  52’  09.35” N</p>
          <p>79  51’  44.00” E</p>

      </div>
      <div class="modal-footer">
       <button type="button" class="btn button1" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 
   
    
</div></div>

 </div>
</div>
 
   
          <br>


<?php include_once('../footer.php');?>
</body>
</html>
			
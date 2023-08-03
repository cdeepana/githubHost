<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name=viewport content="width=device-width,initial-scale=1">
<title>Transportation and Directions - Omega Regency</title>
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


</style>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
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
	  
  
	  
	  
	  
</script>

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

 
</div>


 </div>
 
 <div class="col-sm-9" style="text-align:justify"  >
 
 
 
 <h1>TRANSPORTATION AND DIRECTIONS </h1>
 <ol class="breadcrumb" >
    <li><a href="../../dining/index.php">Home</a>    </li>
    <li class="active">Transportation and Directions</li>   
</ol>

 <div class="col-sm-4">
<ul class="tr-diraction">
<li>
Colombo Airport
<ul>
<li>75 minutes by car/taxi</li>
</ul>
</li>
<li>
Colombo Fort Rail Station
<ul>
<li>20 minutes by car/taxi</li>
<li>30 minutes by bus</li>
</ul>
</li>
<li>
The City
<ul>
<li>10 minutes by car/taxi</li>
</ul>
</li>
<li>
Nearest Rail Stations
<ul>
<li>Wellawatte</li>
<li>Nugegoda</li>
</ul>
</li>
<li style="width:140px;">
GPS coordinates
<ul>
<li>6  52’  09.35” N</li>
<li>79  51’  44.00” E</li>
</ul>
</li>
</ul>
</div>

 <div class="col-sm-8" >
 
    <div class="carousel slide media-carousel" id="media" data-ride="carousel" data-interval="2000" style="padding:0; margin:0;">
       
        <div class="carousel-inner">
         
          <div class="item  active">
<img src="gallery/1.jpg">
          </div>
          
          
          <div class="item">
             <img src="gallery/2.jpg">        
          </div>          

          <div class="item">
             <img src="gallery/3.jpg">        
          </div>
          <div class="item">
             <img src="gallery/4.jpg">        
          </div>
            
          </div>
        
</div>


                               

<script>
 $(document).ready(function() {
    $('#media').carousel({
	    interval: 2000
	})
});
 </script>


 </div>



<br/>
 </div>
</div>
 
   <div id="map_canvas" style="height:600px;width:100%"></div>
    <div id="map_canvas2" style="height:300px;width:300px; display:none;"></div>



<?php include_once('../../footer.php');?>
</body>
</html>
			
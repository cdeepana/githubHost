<header id="header"  >
    
        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top  menu-bar " role="banner"  >
         
           
           
            <div class="container-edit menu-pad" style="padding-bottom:0 !important; margin-bottom:0 !important; bottom:0;  ">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                
                <div class="col-sm-2">
                    <a href="https://www.omegaregency.lk/"> <img src="https://www.omegaregency.lk/img/logo.png" /> </a>
                </div> 
                
              
                <div class="collapse navbar-collapse " align="right">                 
                    
           <ul class="nav navbar-nav col-sm-10" style="margin-top:15px; text-align:right; " >
           <li class="scroll" id="it1"><a href="https://www.omegaregency.lk/">HOME  </a></li>
          <li class="scroll" id="it1"><a href="https://www.omegaregency.lk/accomodation/">ACCOMMODATION</a></li>         
          <li class="scroll" id="it1"><a href="https://www.omegaregency.lk/dining/">DINING</a></li>
          
          <li></li>
          
          <li class="scroll" id="it1"><a href="https://www.omegaregency.lk/meetings-and-banquets/">MEETINGS & BANQUETS</a></li>
          <li class="scroll" id="it1"><a href="https://www.omegaregency.lk/weddings/">WEDDINGS</a></li>
          <li class="scroll" id="it1"><a href="https://www.omegaregency.lk/services/" >HOTEL SERVICES</a></li>
          <li class="scroll text-center" id="it1" style="background-color:#f8443b; border-radius: 5px; margin-left: 10px;width: 150px;  "><a href="https://bookings.zharahs.com/bookings/OmegaRegency/landing" style="color:#FFFFFF;" target="_blank"  rel="nofollow">BOOK NOW</a></li>

  <!-- <li class="scroll" id="it1"><a href="#" ><div id="weather"  ></div> </a></li>
<li class="scroll" id="it1"><a href="#" ><div id="txt"></div> </a></li>-->
        </ul>
                
                
                </div>
                
                
            </div><!--/.container-->
            
         
        </nav><!--/nav-->
        <div class="container-edit">
            
            <div class="row" style="position: fixed;z-index: 10000;top: 67px;">
                <!--<div> <img src="http://www.omegaregency.lk/room_from_usd.png" ></div>-->
                </div>
            <div class="row"><div class="col-md-12" style="top: 67px;position: fixed;z-index: 10000;padding-left:900px;">
                 
                    <img src="https://www.omegaregency.lk/rate.png" >
                    <p style="padding-left: 50px;color: #fff;font-weight: 900;">Rooms from 50 USD</p>
                </div>
            </div>
     </div>
    </header><!--/header-->
    
<script language="javascript">
// Docs at http://simpleweatherjs.com
$(document).ready(function() {
  $.simpleWeather({
    location: 'Kandy, LK',
    woeid: '',
    unit: 'c',
    success: function(weather) {
      html = '<i class="icon-'+weather.code+'"></i>   ' +weather.temp+'&deg;'+weather.units.temp+'  ';
       '  '+weather.wind.direction+' '+weather.wind.speed+' '+weather.units.speed+' ';
  
      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });
});
</script>
  <script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
	var ampm = h >= 12 ? ' PM' : ' AM';
	
   h = h % 12;
  h = h ? h : 12; // the hour '0' should be '12'
  m = m < 10 ? '0'+m : m;
   
 //   m = checkTime(m);
  //  s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + " : " + m + " : " + s + ampm;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}


</script>


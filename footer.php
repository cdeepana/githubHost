<!--<div style="padding: 0; position: fixed;padding-right: 0px;  top: 270px; right: 0px;  background-color: transparent; z-index: 199000000;  ">
    <a href="http://www.omegaregency.lk/services"><img src="http://www.omegaregency.lk/shashi/con.png" alt="" class="img-responsive" style=""/></a>
</div>-->
<script>
<!--
    /* wording of your error and thank you messages */
    var thankyou = "Thank you";

    function signup(thisform) {
        $("#submit, #myResponse").hide();	// Hide the buttom and the message
        $("#loading").show();				// show the loading image.
        params = $("#subform").serialize();
        $.post("optIn.php", params, function (response) {
            //alert(response); //may need to activate this line for debugging.
            $("#loading").hide();
            $("#myResponse").html(thankyou); //Writes the "Thank you" message that comes from optIn.php and styles it.
            $('#myResponse').css({display: 'inline', color: 'green'})
            $("#submit").show();
        }
        )
        return false;
    }
//-->
</script>

<div class="container-edit-fluid" style="background-color:#e3e1e1; min-height:10px; text-align:center; color:#CCCCCC;margin-top: 50px;">

</div>
<div class="container-edit-fluid" style="background-color:#e3e1e1; min-height:190px;">
    <div class="container-edit" style="margin-bottom:9px; margin-top:6px;">
        <div class="col-sm-4 col-md-offset-2" style=" min-height:140px;  border-right:1px dotted #000; text-align:right; ">

            <h5 style="color:#000; ">Touch With Us </h5>

<p>    324, Galle Road, Wellawatte, Colombo 6, Sri Lanka <br/>
                Tel: + 94 11 2582277, + 94 11 2363604 <br/>
                Fax: + 94 11 4012695 <br/>
                E mail : bookings@omegaregency.lk <br/>
            </p>





        </div>

        <div class="col-sm-6" style=" min-height:140px;  ">

            <h5 style="color:#000; ">We Are Bit Social </h5>

            <a href="https://www.facebook.com/OmegaRegency/" target="_blank"> <img src="https://www.omegaregency.lk/img/social/f.jpg" /></a>

            <a href="https://plus.google.com/+OmegaRegencyColombo" target="_blank"><img src="https://www.omegaregency.lk/img/social/g.jpg" /></a>

            <a href="#" target="_blank">    <img src="https://www.omegaregency.lk/img/social/p.jpg" /></a>
            <img src="https://www.omegaregency.lk/img/visa-master.png" />
            <a href="https://www.tripadvisor.com/Hotel_Review-g293962-d1017324-Reviews-Omega_Regency-Colombo_Western_Province.html
               " target="_blank">    <img src="https://www.omegaregency.lk/img/trip_advi.png" /></a>


            <h5 style="color:#000; ">Hosted By </h5>

            <a href="https://www.kawdoco.com/" rel="nofollow" target="_blank" > <img src="https://www.omegaregency.lk/img/kawdoco_logo_small.png" alt="kawdoco"  /></a>

        </div>



    </div>
</div>

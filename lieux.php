
<?php
require_once('inc/header.inc.php');
require_once('inc/menu.inc.php');

?>
    <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
    <script type="text/javascript">
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);
    
        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 11,
                
                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(48.8014586, 2.0932143), // paris _ versailles

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [	{		featureType:'water',		stylers:[{color:'#74c9be'},{visibility:'on'}]	},{		featureType:'landscape',		stylers:[{color:'#f2f2f2'}]	},{		featureType:'road',		stylers:[{saturation:-100},{lightness:45}]	},{		featureType:'road.highway',		stylers:[{visibility:'simplified'}]	},{		featureType:'road.arterial',		elementType:'labels.icon',		stylers:[{visibility:'off'}]	},{		featureType:'administrative',		elementType:'labels.text.fill',		stylers:[{color:'#444444'}]	},{		featureType:'transit',		stylers:[{visibility:'off'}]	},{		featureType:'poi',		stylers:[{visibility:'off'}]	}]
            };

            // Get the php DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using out element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);
        }
    </script>

    
<div id="headerwrap">
      <div class="container">
    <div class="row centered">
          <div class="col-lg-12 col-lg mt annimleft">
       <!--  <h1 class="animation slideDown ombrage">the road of life </h1>--> 
              <h2>the road of life </h2>
        <hr>
        <p>Chercher votre inspiration • Rechercher par mots clefs puis appuyer sur entrée </p>
        <input type="text" class="form-control" placeholder="Taper vos mots clefs">
        <br/>
        <button type="button" class="btn btn-cta btn-lg">RECHERCHER</button>
      </div>
        </div>
    <!-- /row --> 
  </div>
      <!-- /container --> 
    </div>
<!-- /headerwrap --> 


      
    </div>
<!-- /container --> 

<! ========== PORTFOLIO SECTION ============================================================================================= 
  =============================================================================================================================>
<div class="container">
      <div class="row mt centered ">
    <div class="col-lg-4 col-lg-offset-4">
          <h3>lieux les plus populaires</h3>
          <hr>
        </div>
  </div>
      <!-- /row -->
      <div class="row mt centered">
    <div class="col-lg-4 desc"> <a class="b-link-fade b-animate-go" href="lieuxpage.php"><img width="350" src="assets/img/portfolio/port05.jpg" alt="" />
      <div class="b-wrapper">
        <h4 class="b-from-left b-animate b-delay03">lieux 1</h4>
        <p class="b-from-right b-animate b-delay03">Details</p>
      </div>
      </a> </div>
    <div class="col-lg-4 desc"> <a class="b-link-fade b-animate-go" href="lieuxpage.php"><img width="350" src="assets/img/portfolio/port02.jpg" alt="" />
      <div class="b-wrapper">
        <h4 class="b-from-left b-animate b-delay03">lieux 2</h4>
        <p class="b-from-right b-animate b-delay03">Details</p>
      </div>
      </a>
          
        </div>
    <div class="col-lg-4 desc"> <a class="b-link-fade b-animate-go" href="lieuxpage.php"><img width="350" src="assets/img/portfolio/port03.jpg" alt="" />
      <div class="b-wrapper">
        <h4 class="b-from-left b-animate b-delay03">lieux 3</h4>
        <p class="b-from-right b-animate b-delay03">Details</p>
      </div>
      </a> </div>
  </div>
      <!-- /row -->
       
      <!-- ================ Membre folower
      
      
      =======================--> 
     

   
    
    </div>
<!-- /container --> 

	<?php

require_once('inc/footer.inc.php');
<?php
require_once('inc/init.inc.php');
require_once('inc/header.inc.php');
require_once('inc/menu.inc.php');

echo $content;
?>


<! ========== HEADERWRAP ==================================================================================================== 
  =============================================================================================================================>
<div id="ctaform" class="headerwrap_concept">
      <div class="container">
    <div class="row centered"></div>
    <!-- /row --> 
  </div>
      <!-- /container --> 
    </div>
<!-- /headerwrap --> 

<! ========== form ==================================================================================================== 
  =============================================================================================================================>
   <div id="white">
      <div class="container">
                <div class="row centered">
                 
                  <div class="col-lg-12  centered">
               			<h3>Inscrivez vous</h3>
                      <p>Utque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, </p>
                    </div>
             
             
                  <!-- /row --> 
          <hr>
        
        <div class="col-lg-12 centered">
                   
	<form name="loginform" id="" action="#" method="post" enctype="multipart/form-data"
    style="text">

	<label class="labelco" for="user_login">NOM</label><br />
	<input type="text" class="form-control"  placeholder="votre nom"  name="log"  value="" size="20"  /><br />
	
	
	<label class="labelco" for="user_login">Prenom</label><br />
	<input type="text" class="form-control"  placeholder="votre prenom" name="log"  value="" size="20"  /><br />
	
	
	<label class="labelco" for="user_login">Pseudo</label><br />
	<input type="text" class="form-control"  name="log" placeholder="votre pseudo"  value="" size="20"  /><br />
	
	<label class="labelco" for="user_login">mail</label><br />
	<input type="text" name="log" class="form-control" placeholder="votre email"  value="" size="20"  /><br />
	
    <label class="labelco" for="cp">Code postale</label><br />
				<input type="number" class="form-control"  name="cp" placeholder="votre cp" id="cp"  /><br />
  
	<label class="labelco" for="user_pass">votre  centre d'intéré</label><br />
		<input type="password" class="form-control"  name="pwd"  value="" size="20"  /><br />
        
<label  class="labelco" for="user_pass">Password</label><br />
	<input class="form-control"  type="password" name="pwd"  value="" size="20"  /><br />
  
    
   <label class="labelco" for="message">citation</label><br />
	<textarea class="form-control" name="message" placeholder="à propos de vous"></textarea></label><br />
    
     <label for="avatar">avatar</label>
  <input  type="file" name="avatar" placeholder="votre avatar" id="avatar" /></label><br />
    
    


		
    
  <button type="submit" value="Submit" class="btn btn-theme btn-sm">Envoyer</button>
	
    </form>

       
        </div><! --/col-lg-12 -->
      </div><!-- /row -->
  
      </div>
      
<! ========== CALL TO ACTION BAR =============================================================================================== 
  =============================================================================================================================>
<div id="cta-bar">
      <div class="container">
    <div class="row centered"> <a href="#">
      <h4>SUBSCRIBE TO OUR NEWSLETTER</h4>
      </a>
          <hr>
          <br/>
          <form class="form-horizontal" role="form">
        <div class="form-group">
              <label for="inputEmail1"></label>
              <div class="col-lg-10">
            <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
          </div>
              <div class="col-lg-2">
            <button type="button" class="btn btn-theme btn-lg">ENVOYER</button>
          </div>
            </div>
      </form>
        </div>
  </div>
      <!-- /container --> 
    </div>
<!-- /cta-bar --> 

<! ========== FOOTER ======================================================================================================== 
  =============================================================================================================================>

<div id="f">
      <div class="container">
    <div class="row">
                  <div class="col-lg-4" >
                <h4>the road of life</h4>
                <p> 78000, versailles<br/>
                      france. FR<br/>
                    </p>
                <p> <i class="fa fa-envelope-o"></i>roadoflifeproject@gmail.com</p>
             
              </div>
              
                
               
                <div class="col-lg-4" >
                   <h4>liens utiles</h4>
          <p>
            <i class="fa "></i><a href="http://www.diplomatie.gouv.fr/fr/le-ministere-et-son-reseau/annuaires-et-adresses-du-maedi/ambassades-et-consulats-francais-a/">Ambassade de france</a><br/>
                        <i class="fa "></i><a href="http://www.diplomatie.gouv.fr/fr/">diplomatie.gouv • conseils voyageurs</a><br/>
            <i class="fa "></i><a href="http://www.booking.com">Booking.com</a><br/>
            <i class="fa "></i><a href="http://www.rentalcars.com/">Location de voitures</a><br/>
                        <i class="fa "></i><a href="http://www.book-a-friend.com/">booké un ami</a><br/>
                        
                        
          
          </p>
                      </div>
                      <div class="col-lg-4" >
                   <h4>Nous Concernant</h4>
          <p>
            <i class="fa "></i><a href="#">Conditions générales d'utilisation</a><br/>
            <i class="fa "></i><a href="mailto:name@email.com">FAQ</a><br/>
                          <i class="fa "></i><a href="#">Plan du site</a><br/>
                        
            
          
          </p>
                      </div>
      </div>
    <br/>
    <br/>
    <! --/row --> 
    <!-- ADDRESS -->
    <!-- LATEST POSTS -->
      
          </div>
      <!-- /container --> 
    </div>
<!-- /f --> 
<div id="f">
      <div class="container">
    
    <div class="row centered">
          <div class="col-lg-4"> <a href="#"><i class="fa fa-facebook"></i></a> </div>
          <div class="col-lg-4"> <a href="#"><i class="fa fa-twitter"></i></a> </div>
          <div class="col-lg-4"> <a href="#"><i class="fa fa-instagram"></i></a> </div>
        </div>
    <! --/row --> 
    
  </div>
      <!-- /container --> 
    </div>
<!-- /f --> 

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/retina.js"></script> 
<script>
    $(window).scroll(function() {
      $('.si').each(function(){
      var imagePos = $(this).offset().top;
  
      var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+400) {
          $(this).addClass("slideUp");
        }
      });
    });
  </script>
</body>
</html>

<?php
require_once('inc/header.inc.php');
require_once('inc/menu.inc.php');

?>
<div id="headerpage">
      <div class="container">
    <div class="row centered">
          <div class="col-lg-12 col-lg mt annimleft">
       <!-- img ma page--> 
             <div class="row centered">
             <div class="col-lg-4 col-lg-offset-4">
			 <?php if(!empty($_SESSION['membre']['avatar'])): ?>
             <img src="<?php echo $_SESSION['membre']['avatar']; ?>" width="200" class="img-circle avatar" />
			 <?php else : ?>
             <img src="http://neni9.com/Roadoflife/assets/img/avatar/avatar.jpg" width="200" class="img-circle avatar" />
			 <?php endif; ?>
             </div>
             
             </div>
             </br></br>
       
        
      </div>
        </div>
    <!-- /row --> 
  </div>
      <!-- /container --> 
    </div>
<!-- /headerwrap --> 


<div class="container">
      <div class="row mt centered ">
    <div class="col-lg-4 col-lg-offset-4">
          <h3><?php echo $_SESSION['membre']['pseudo']; ?></h3>
          <hr>
          <p>Mon centre d'intérêt: <?php echo $_SESSION['membre']['cINT']; ?>
       </p>
        </div>
  </div>
      <!-- /row --> 
      
   
    <div class="row mt">
	
	  <div class="col-lg-4  ">
       <a href="" class="btn btn-theme btn-lg">Créer un nouveau séjour </a>
      </div>
          <div class="col-lg-4 ">
       <a <a href="" class="btn btn-theme btn-lg">Ajouter un élément à un séjour </a>
      </div>
	  
	   <div class="col-lg-4  ">
       <a href="" class="btn btn-theme btn-lg">Envoyer une carte postale numérique </a>
      </div>
	  
        </div>
    <! --/row --> 
 

<!-- ========== votre carnet  ============================================================================================= 
	=============================================================================================================================-->
 


 <div class="row mt centered">
 
   <h3>séjour</h3>
          <hr> </br></br>
    <div class="col-lg-4 desc">
     <a class="b-link-fade b-animate-go" href="Monsejour.php">
    
    <img width="350" src="assets/img/portfolio/borad01.jpg" alt="" />
    
      <div class="b-wrapper">
        <h4 class="b-from-left b-animate b-delay03">séjour 01</h4>
        <p class="b-from-right b-animate b-delay03">View Details</p>
       </div>
      </a>
       </div>
      
      
    <div class="col-lg-4 desc"> 
    	<a class="b-link-fade b-animate-go" href="Monsejour.php">
    		<img width="350" src="assets/img/portfolio/borad02.jpg" alt="" />
              <div class="b-wrapper">
                <h4 class="b-from-left b-animate b-delay03">séjour 02</h4>
                <p class="b-from-right b-animate b-delay03">View Details</p>
              </div>
		</a>
    </div>

  <!-- /row -->
  </div>
  </div>  <!-- /container-->
  

 
      
<! ============ folower   =========>
<div class="container">
  	<div class="col-sm-8 col-sm-offset-2 text-center">
   
      <h4>
      Membres Followés
      </h4>
      
      <ul class="list-inline center-block">
        <li><a href="Membrepage.php"><img src="assets/img/membres/membre_01.png"></a></li>
        <li><a href="Membrepage.php"><img src="assets/img/membres/membre_02.png"></a></li>
        <li><a href="Membrepage.php"><img src="assets/img/membres/membre_03.png"></a></li>
       <li><a href="Membrepage.php"><img src="assets/img/membres/membre_01.png"></a></li>
</ul>
      
  	</div><!--/col-->
</div><!-- /container --> 
<! ========== CALL TO ACTION 1 ============================================================================================== 
	=============================================================================================================================>
<div id="cta01">
      <div class="container">
    <div class="row centered">
          <div class="col-lg-12 ">
        <h2>Créer un nouveau séjour</h2>
     
        <a href="board.php" ><button type="button" class="btn btn-cta btn-lg">Créer</button></a>
      </div>
        </div>
    <!-- /row --> 
  </div>
      <!-- /container --> 
    </div>




	<?php

require_once('inc/footer.inc.php');
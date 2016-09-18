
<?php
require_once('inc/init.inc.php');
require_once('inc/header.inc.php');
require_once('inc/menu.inc.php');

?>

<div id="headerwrap">
      <div class="container">
          <div class="row centered">
              <div class="col-lg-12 col-lg mt annimleft">
 
               <h2> THE ROAD OF LIFE  </h2>
                  <hr>
                  <h3> sortez des sentiers battus! Organisez votre séjour et créez votre itinéraire selon vos envies </h3>
                  
              <p></p>
              <input type="text" id="search_address" class="form-control" name="google-default-search" placeholder="Où voulez-vous aller?" autocomplete="off">
              <br/>
              <a href="lieuxsearch.php"><button type="button" value="Search" class="btn btn-cta btn-lg">Chercher votre inspiration </button></a>
            </div>
        </div>

  </div>
 
    </div>



     <div class="container centered">
      <div class="row mt centered ">
    <div class="col-lg-4 col-lg-offset-4">
          <h3>Les lieux les plus recherchés</h3>
          <hr>
        </div>
  </div>
     
      <div class="row mt centered">
    <div class="col-lg-4 desc"> <a class="b-link-fade b-animate-go" href="lieuxpage.php"><img width="350" src="assets/img/portfolio/port01.jpg" alt="" />
      <div class="b-wrapper">
        <h4 class="b-from-left b-animate b-delay03">lieux 1</h4>
        <p class="b-from-right b-animate b-delay03">View Details</p>
      </div>
      </a> </div>
    <div class="col-lg-4 desc"> <a class="b-link-fade b-animate-go" href="lieuxpage.php"><img width="350" src="assets/img/portfolio/port02.jpg" alt="" />
      <div class="b-wrapper">
        <h4 class="b-from-left b-animate b-delay03">lieux 2</h4>
        <p class="b-from-right b-animate b-delay03">View Details</p>
      </div>
      </a>
          <p>le mieux noté - <i class="fa fa-heart-o"></i></p>
        </div>
    <div class="col-lg-4 desc"> <a class="b-link-fade b-animate-go" href="lieuxpage.php"><img width="350" src="assets/img/portfolio/port03.jpg" alt="" />
      <div class="b-wrapper">
        <h4 class="b-from-left b-animate b-delay03">lieux 3</h4>
        <p class="b-from-right b-animate b-delay03">View Details</p>
      </div>
      </a> </div>
  </div>
     

      
       <?php if(MembreEstConnecte()) : ?>

        <div class="row mt centered ">
    <div class="col-lg-4 col-lg-offset-4">
          <h3>Membre populaire</h3>
          <hr>
        </div>
  </div>
      <div class="row mt centered">
      

        
            <div class="col-lg-4 desc">
       
          
          <a class="b-link-fade b-animate-go" href="Membres.php"><img width="350" src="assets/img/team/membre01.jpg" alt="" />
          
            </a>
              
              </div>
            <div class="col-lg-4 desc">
         
            
            <a class="b-link-fade b-animate-go" href="Membres.php"><img width="350" src="assets/img/team/membre01.jpg" alt="" />
            
              </a>
        
                </div>
            <div class="col-lg-4 desc"> <a class="b-link-fade b-animate-go" href="Membres.php"><img width="350" src="assets/img/team/membre02.jpg"  alt="" />
             
              </a> </div>
          </div>
    
              <div class="row mt centered">
                <div class="col-lg-4 col-lg-offset-4">
                  <a href="Membres.php" class="btn btn-theme btn-lg">VOIR PLUS DE MEMBRES POPULAIRE </a>
                  </div>
        </div>
          

<?php endif; ?>

          
    </div>


   </div>




<div class="container">
            <div class="row mt">
                <div class="col-lg-4 col-lg-offset-4 centered">
                      <h3>Témoignages</h3>
                      <hr>
                    </div>
            </div>
     
          
          <div class="row mt">
              <div class="col-lg-8 col-lg-offset-2 centered">
                              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
                            <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                              <div class="item active">
                                            <h2>Quand rien n'est prévu, tout est possible</h2>
                                            <h5>― le célèbre backpacker Antoine de Maxim</h5>
                                          </div>
                                                  <div class="item">
                                                <h2>Nothing behind me, everything ahead of me,<br/>
                                                      as is ever so on the road.</h2>
                                                <h5> ― Jack Kerouac, On the Road</h5>
                                              </div>
                                        </div>
                           
                            
                          </div>
                     
                    </div>
       
      </div>
  
    </div>
 


  <?php

require_once('inc/footer.inc.php');
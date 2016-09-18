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
          </br>
          </br>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /headerwrap -->
 <! ========== BLOG POSTS ==================================================================================================== 
	=============================================================================================================================>
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
       <a href="" class="btn btn-theme btn-lg">Ajouter un élément à un séjour </a>
      </div>
	  
	   <div class="col-lg-4  ">
       <a href="" class="btn btn-theme btn-lg">Envoyer une carte postale numérique </a>
      </div>
	  
        </div>
    <! --/row --> 

      <!-- /container -->
  <!-- ========== votre carnet  ============================================================================================= =============================================================================================================================-->
  
   
      <div class="row  mt centered">

        <div class="col-lg-12">
          <div class="section-heading scrollpoint sp-effect3">
            <h3>Mon séjour australien</h3>
            <div class="divider"></div>
            <p>
            Carnet de voyage australien. De Melbourne à Cairns
            </p>
          </div>
		
          <ul id="filtre" class="nav navbar-nav sejour navbar-left">
            <li class="selected" id="btn-cat-tous">toutes les catégories</li>
            <li id="btn-cat-photo">photos</li>
            <li id="btn-cat-lieux"> lieux</li>
            <li id="btn-cat-note">notes</li>
          </ul>
        
          <section id="project-list">
            <div class="project cat-lieux cat-visible">
              <div class="col-lg-12 desc">
                <div class="col-lg-4">
                  <article>
                    <img src="assets/img/portfolio/port01.jpg" alt=""/>
                    <div class="b-wrapper">
                      <h4 class="b-from-left b-animate b-delay03">lieux 1</h4>
                      <p class="b-from-right b-animate b-delay03">
                        View Details
                      </p>
                    </div>
                  </article>
                </div>
                <div class="col-lg-4">
                  <article>
                    <img src="assets/img/portfolio/port01.jpg" alt=""/>
                    <div class="b-wrapper">
                      <h4 class="b-from-left b-animate b-delay03">lieux 1</h4>
                      <p class="b-from-right b-animate b-delay03">
                        View Details
                      </p>
                    </div>
                  </article>
                </div>
                <div class="col-lg-4">
                  <article>
                    <img src="assets/img/portfolio/port01.jpg" alt=""/>
                    <div class="b-wrapper">
                      <h4 class="b-from-left b-animate b-delay03">lieux 1</h4>
                      <p class="b-from-right b-animate b-delay03">
                        View Details
                      </p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
           
            <div class="project cat-photo cat-visible">
              <div class="col-lg-12 desc">
                <div class="col-lg-4">
                  <article>
                    <img src="assets/img/portfolio/port04.jpg" alt=""/>
                    <div class="b-wrapper">
                      <h4 class="b-from-left b-animate b-delay03">lieux 1</h4>
                      <p class="b-from-right b-animate b-delay03">
                        View Details
                      </p>
                    </div>
                  </article>
                </div>
                <div class="col-lg-4">
                  <article>
                    <img src="assets/img/portfolio/port04.jpg" alt=""/>
                    <div class="b-wrapper">
                      <h4 class="b-from-left b-animate b-delay03">lieux 1</h4>
                      <p class="b-from-right b-animate b-delay03">
                        View Details
                      </p>
                    </div>
                  </article>
                </div>
                <div class="col-lg-4">
                  <article>
                    <img src="assets/img/portfolio/port04.jpg" alt=""/>
                    <div class="b-wrapper">
                      <h4 class="b-from-left b-animate b-delay03">lieux 1</h4>
                      <p class="b-from-right b-animate b-delay03">
                        View Details
                      </p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
			 <div class="project cat-note cat-visible">
              <div class="col-lg-12 desc">
                <div class="col-lg-4">
                  <article>
						<i class="fa"> <img  src="assets/img/icn/icn_note.png" alt=""/></i>
                 <h4>  Il faut toujours un coup de folie pour bâtir un destin</h4><p> 
Lorem ipsum dolor sit amet laudantium molestias similique.Quisquam incidunt ut laboriosam.					</p>
                   
                  </article>
                </div>
               <div class="col-lg-4">
                  <article>
						<i class="fa"> <img  src="assets/img/icn/icn_note.png" alt=""/></i>
								<p> 
				Lorem ipsum dolor sit amet laudantium molestias similique.Quisquam incidunt ut laboriosam.	</br> Lorem ipsum dolor sit amet laudantium molestias similique.Quisquam incidunt ut laboriosam.					</p>
								   
                  </article>
                </div>
                <div class="col-lg-4">
						 <i class="fa"> <img  src="assets/img/icn/icn_note.png" alt=""/></i>
						<p> 
		Lorem ipsum dolor sit amet laudantium molestias similique.Quisquam incidunt ut laboriosam.					</p>
                   
                  </article>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>  <!-- /container-->
    <!-- ========== PORTFOLIO SECTION ============================================================================================= =============================================================================================================================-->
    <div class="container">
      <!-- ========== vos carnets  ============================================================================================= =============================================================================================================================-->
      <div class="row mt centered">
        <h3>vos albums</h3>
        <hr>
        </br>
        </br>
        <div class="col-lg-4 desc">
          <a class="b-link-fade b-animate-go" href="#">
            <img width="350" src="assets/img/portfolio/borad01.jpg" alt="" />
            <div class="b-wrapper">
              <h4 class="b-from-left b-animate b-delay03">séjour 01</h4>
              <p class="b-from-right b-animate b-delay03">
                View Details
              </p>
            </div>
          </a>
        </div>
        <div class="col-lg-4 desc">
          <a class="b-link-fade b-animate-go" href="#">
            <img width="350" src="assets/img/portfolio/borad02.jpg" alt="" />
            <div class="b-wrapper">
              <h4 class="b-from-left b-animate b-delay03">séjour 02</h4>
              <p class="b-from-right b-animate b-delay03">
                View Details
              </p>
            </div>
          </a>
        </div>
        <!-- /row -->
      </div>
    </div>
    <!-- /container-->
    <!--CALL TO ACTION 1 -->
    <div id="cta01">
      <div class="container">
        <div class="row centered">
          <div class="col-lg-12 ">
            <h2>Créer un nouveaux tableaux</h2>
            <a href="board.php" ><button type="button" class="btn btn-cta btn-lg">Créer</button></a>
          </div>
        </div>
        <!-- /row -->
      </div>
  <!-- /container --> 


	<?php

require_once('inc/footer.inc.php');

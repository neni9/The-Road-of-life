<?php
session_start();
if(!empty($_SESSION['membre'])){
	if($_SESSION['membre']['statut'] == 0){
		header('location: ' . 'index.php');
	}
}else{
	header('location: ' . 'index.php');
}

require_once('inc/header.inc.php');
require_once('inc/menu.inc.php');

if(isset($_GET['action']) && $_GET['action'] == 'suppr'){
	$resultat = $pdo->query("DELETE FROM membre WHERE idMembre=" . $_GET['idMembre']);
} 


?>

<div id="cta02" class="headerwrap_concept">
      <div class="containear">
    <div class="row centered"></div>
    <!-- /row --> 
  </div>
      <!-- /container --> 
    </div>
<!-- /headerwrap --> 

   <div id="white">
      <div class="container">
                <div class="row mt">
                    <div class="col-lg-4 col-lg-offset-4 centered">
                 <h2>backoffice</h2>
<p> Liste informative des membres </p>

                      </div>
             </div>
      <!-- /row --> 
          <hr>
          <div class="row mt">

     
        <div class="col-lg-12 ">
            <table class="table table-condensed">
              <thead>
              
                <tr> 
                    <th> #  </th>
                    <th> pseudo  </th>
                    <th> email  </th>
                    <th> avatar  </th>
                    <th> statut </th>
                    <th> X </th>
				</tr>
                <?php
					$request = $pdo->prepare("SELECT * FROM membre");
					$request->execute();
					$membrex = $request->fetchAll();
					foreach ($membrex as &$membre) {
				?>
				<tr>
                    <td><?php echo $membre['idMembre']; ?></td><td><?php echo $membre['pseudo']; ?></td><td><?php echo $membre['email']; ?></td><td><?php echo $membre['avatar']; ?></td><td><?php echo $membre['statut']; ?></td>
                    <td><?php echo "<a href=?action=suppr&idMembre=$membre[idMembre]> x </a>" ?></td>
				</tr> 
				<?php } ?>
              </thead>
            </table>




 </div><! --/col-lg-8 -->
      </div><!-- /row -->
  
      </div> 
        </div> 

	<?php

require_once('inc/footer.inc.php');


	
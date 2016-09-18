<?php
require_once('inc/init.inc.php');
require_once('inc/header.inc.php');
if(!empty($_GET['action']) && $_GET['action'] == 'deconnexion')
{
  session_destroy();
  header('location:index.php');
}






if(isset($_POST['connexion'])) 
{
    echo 'pseudo posté : ' . $_POST['pseudo'] . '<br />';
    echo 'mdp posté : ' . $_POST['mdp'] . '<br />';
    $_POST['mdp'] = md5($_POST['mdp']);
    $resultat = $pdo->query("SELECT * FROM membre WHERE pseudo='$_POST[pseudo]' OR email='$_POST[pseudo]'");
    if($resultat->rowCount() >= 1) 
    {
    
        $membre = $resultat->fetch(PDO::FETCH_ASSOC); 
        if($_POST['mdp'] === $membre['mdp']) 
        {
  echo "connexion demande";
            foreach($membre as $indice => $valeur) 
            {
                if($indice != 'mdp') 
                    $_SESSION['membre'][$indice] = $valeur;
            }
            header('location:index.php'); 
        }
        else
        {
            $content .= '<div class="erreur">Erreur de MDP /!\</div>';
        }
    }
    else 
    {
        $content .= '<div class="erreur">Erreur de pseudo /!\</div>';
    }   
}



if(isset($_POST['inscription']))
{

    //affichageTableau($_POST);
    $verifPseudo = preg_match('#^[a-zA-Z0-9.-_]+$#', $_POST['pseudo']);
   
    if(!$verifPseudo) 
    {
        $content .= '<div class="erreur">Votre pseudo n\'est pas valide. Veuillez saisir des caractères autorisés.</div>';
        $erreur = true;
    }
   
    if(strlen($_POST['pseudo']) < 3 || strlen($_POST['pseudo']) > 15) // 2) erreur : pb de taille...
    {
        $content .= '<div class="erreur">Votre pseudo doit comporter entre 5 et 15 caractères.</div>';
        $erreur = true;
    }
    $resultat = $pdo->query("SELECT * FROM membre WHERE pseudo = '$_POST[pseudo]' OR email = '$_POST[email]'");
    if($resultat->rowCount() == 1) // 3) erreur : pseudo indisponible...
    {
        $content .= '<div class="erreur">Ce pseudo ou email est déjà utilisé</div>';
        $erreur = true;
    }
    //var_dump($erreur);
    if(!isset($erreur)) 
    {
        foreach($_POST as $indice => $valeur)
        {
            $_POST[$indice] = addslashes($valeur);
        }
        $photoBdd = '';
        if(!empty($_FILES['avatar']['name'])) 
        {
            affichageTableau($_FILES['avatar']);
    
            $nomPhoto = $_FILES['avatar']['name'];
           
            $photoBdd = RACINE_SITE . "/assets/img/avatar/$nomPhoto";
  
            $photoDossier = $_SERVER['DOCUMENT_ROOT'] . RACINE_SITE . "assets/img/avatar/$nomPhoto";
       
      copy($_FILES['avatar']['tmp_name'], $photoDossier);
        }
        $_POST['mdp'] = md5($_POST['mdp']); // cryptage
       
        $pdo->query("INSERT INTO membre (pseudo, mdp, email, cp, avatar, cINT) VALUES ('$_POST[pseudo]','$_POST[mdp]','$_POST[email]', '$_POST[cp]','$photoBdd','$_POST[cINT]')");
        $content .= '<div class="validation">Enregistrement ok</div>';
    }
}


/* fin teste connexion */

?>




<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
 <div class="container"> 

  <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="fa fa-bars fa-lg"></span> </button>
          <a class="navbar-brand" href="index.php"> <img src="assets/logo.png" alt="" class="logo"> </a> </div>
    

    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right" role="menu">
                      <li><a href="index.php">Accueil</a> </li>
                    <li><a href="concept.php">Le concept</a> </li>
          <li><a href="astuces.php">Nos conseils</a> </li>
                    <li><a href="contact.php">Contact</a> </li>
                    <?php 
                if(isset($_SESSION['membre']) == true && $_SESSION['membre'] == true){
                  ?> 
             
                  <?php
                }else{ 
                  ?>
                    <li class="main-nav"><a id="connecter" class="cd-signin connexion" href="#">Connexion</a></li>
          <li class="main-nav"><a class="cd-signin connexion  inscription" href="#">Inscription au carnet de route</a></li>
                  <?php 
                }
                ?>
                
             <?php  if(AdminEstConnecte()) : ?>
             
              <li ><a href="backoffice.php">backoffice</a></li>
            <?php endif; ?>


         <?php if(MembreEstConnecte()) : ?>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Mon profil </a></button>
                 <ul class="dropdown-menu">
                 <li ><a href="Mapage.php" tabindex="-1">Ma page </a></li></br>
                 <li ><a href="Moncarnet.php" tabindex="-1">Mon carnet de route</a></li></br>
          
                  <li > <a href="index.php?action=deconnexion" tabindex="-1">déconnexion</a></li>
      <?php endif; ?>
   
              </ul>
    </div>
      
  </div>
      <!-- /.navbar-collapse -->
      </div>
      <!-- /.container--> 
    </nav>
  
  <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
      <ul class="cd-switcher">
        <li><a href="#0">Connexion</a></li>
        <li><a href="#0">Inscription</a></li>
      </ul>

      <div id="cd-login"> <!-- log in form -->
        <form class="cd-form" method="post" action="" enctype="multipart/form-data">
          <p class="fieldset">
            <label class="image-replace cd-pseudo"  for="signup-username">Pseudo</label>
            <input class="full-width has-padding has-border"  name="pseudo"  type="text" placeholder="Pseudo">
            <span class="cd-error-message">Error message here!</span>
          </p>

          <p class="fieldset">
            <label class="image-replace cd-mdp" for="signin-password">Mot de passe</label>
            <input class="full-width has-padding has-border" name="mdp"  id="signin-mdp" type="password"  placeholder="Mot de passe">
            
            <span class="cd-error-message">Error message here!</span>
          </p>

          

          <p class="fieldset">
            <input class="full-width" type="submit" value="connexion" name="connexion">
          </p>
        </form>
        
        <p class="cd-form-bottom-message"><a href="#0">Mot de passe oublié?</a></p>
        <!-- <a href="#0" class="cd-close-form">Close</a> -->
      </div> <!-- cd-login -->

      <div id="cd-signup"> <!-- sign up form -->
        <form class="cd-form" method="post" action="" enctype="multipart/form-data">
          <p class="fieldset">
            <label class="image-replace cd-pseudo"  for="signup-username">Pseudo</label>
            <input class="full-width has-padding has-border"  name="pseudo"  type="text" placeholder="Pseudo">
            <span class="cd-error-message">Error message here!</span>
          </p>


          <p class="fieldset">
            <label class="image-replace cd-email" for="signup-email">E-mail</label>
            <input class="full-width has-padding has-border" id="signup-email" name="email" type="email" placeholder="E-mail">
            <span class="cd-error-message">Error message here!</span>
          </p>
          <p class="fieldset">
            <label class="image-replace cd-mdp" for="signin-mdp">Mot de passe</label>
            <input class="full-width has-padding has-border" id="signup-mdp" type="password"   name="mdp" placeholder="Mot de passe">
            
            <span class="cd-error-message">Error message here!</span>
          </p>
            <p class="fieldset">
            <label class="image-replace cd-cp" for="signup-cp">Code Postale</label>
            <input class="full-width has-padding has-border" id="signup-cp" name="cp" type="number" placeholder="Code Postale">
            <span class="cd-error-message">Error message here!</span>
          </p>


          <p class="fieldset">Votre centre d'intérêt
            <label class="image-replace cd-cint" for="signup-cint">Votre centre d'intérêt</label>

                <select multiple class="form-control" id="signup-cint" name="cINT"  type="text">
                <option>Exposition et musée</option>
                 <option>Festival et Événements</option>
                <option>Culture locale</option>
                <option>sport</option>
                 <option>randonnée</option>
                <option>Bien-être</option>
                <option>Culture artistique (photos ...)</option>

                
              </select>
                 <!-- <input class="full-width has-padding has-border" id="signup-cint" name="cINT"  type="cint" placeholder="votre centre d'intérêt" >
                  <span class="cd-error-message">Error message here!</span> -->
          </p>
          
          

          <p class="fieldset"><strong>Importer votre avatar </strong><em> format autorisé de 200x200 </em><br/>
            <label class="image-replace cd-avatar" for="signup-email">avatar</label>
            <input  type="file" name="avatar" id="avatar" /></label><br />
            <span class="cd-error-message">Error message here!</span>
          </p>

          

          

          <p class="fieldset">
            <input class="full-width has-padding" type="submit" value="inscription" name="inscription">
          </p>

          <p class="fieldset">
            En cliquant sur « Je m'inscris », vous confirmez que vous acceptez  <a href="conditions.php" target="_blank">les Conditions générales d'utilisation</a>

            
        
        </p>


        </form>

      
      </div> 
      <a href="#0" class="cd-close-form">Close</a>
    </div> 
  </div> 

<!DOCTYPE html>
<html lang="fr">
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header("Content-type: text/html; charset=utf-8");
?>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Je suis Jamel Agricole, un étudiant en première année à l'IUT de Laval.">
   <!-- Google Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&family=Poppins:wght@400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
   <!-- Remixicon -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.7.0/fonts/remixicon.min.css">
   <!-- CSS -->
   <link rel="stylesheet" href="../assets/css/style.css">
   <link rel="stylesheet" href="../assets/css/projets.css">
   <!-- Favicon -->
   <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
   <title>Jamel AGRICOLE - Mes projets</title>
</head>

<body>
<header class="header">
      <a aria-label="JA." href="#home">
         <h1 class="logo">JA.</h1>
      </a>

      <div class="toggle" id="toggle">
         <ion-icon name="menu-outline"></ion-icon>
      </div>

      <nav class="nav-menu" id="menu">
         <ul class="nav-list">
            <li class="nav-item"><a class="nav-link" href="#home" aria-label="Accueil">Accueil</a></li>
            <li class="nav-item"><a class="nav-link" href="#about" aria-label="À propos">À propos</a></li>
            <li class="nav-item"><a class="nav-link" href="#project" aria-label="Mes projets">Mes projets</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact" aria-label="Contact">Contact</a></li>

            <!-- Bouton Close -->
            <li class="close" id="close"><ion-icon name="close-outline"></ion-icon></li>
         </ul>
      </nav>
   </header>

   <main>
      <section class="projets">

         <div class="projet__container">
            <?php
            if (isset($_GET["projet"]) && $_GET["projet"] != "") {
               $lecteur = new SplFileObject("../private/projets.csv", 'r');
               while ($lecteur->eof() == false) {
                  $ligne = $lecteur->fgets();
                  $nbLigne = $lecteur->key();
                  if (($ligne != "") && ($nbLigne == $_GET["projet"])) {
                     $tab = explode(";", $ligne);
                     $titre = $tab[0];
                     $desc = $tab[1];
                     $img = $tab[2];
                     $html = $tab[3];
                     $css = $tab[4];
                     $link = $tab[5];
                     $js = $tab[6];
            ?>
                     <div class="projet__left-side">
                        <figure class="img__container">
                           <img class="projet__img" src="<?php echo ($img); ?>" alt="<?php echo ($titre); ?>">
                        </figure>
                     </div>

                     <div class="projet__right-side">
                        <h2 class="projet__name"><?php echo ($titre); ?></h2>
                        <p class="projet__desc">
                           <?php echo ($desc); ?>
                        </p>

                        <div class="projet__infos">
                           <h3 class="infos__title">Technologies utilisées :</h3>
                           <div class="projet__tech">
                              <?php echo ($html); ?>
                              <?php echo ($css); ?>
                              <?php echo ($js); ?>
                           </div>
                           <a href="<?php echo ($link); ?>" class="projet__btn">Visiter le site</a>
                        </div>
                     </div>


            <?php
                  }
               }
            }
            ?>
         </div>
      </section>
   </main>

   <footer>
      <a href="https://github.com/JGAMIX7/" target="_blank"><ion-icon class="social-link" name="logo-github" aria-label="Github"></ion-icon></a>
      <a href="https://www.linkedin.com/in/jamel-agricole-b4b5182a1" target="_blank"><ion-icon class="social-link" name="logo-linkedin" aria-label="LinkedIn"></ion-icon></a>
   </footer>

   <!-- ========== Fichier Javascript ========== -->
   <script src="assets/js/script.js"></script>
   <!-- ========== Ioncions ========== -->
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
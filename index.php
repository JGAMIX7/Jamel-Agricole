<!DOCTYPE html>
<html lang="fr">

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header("Content-type: text/html; charset=utf8");

require(__DIR__ . "/PHPMailer/src/PHPMailer.php");
require(__DIR__ . "/PHPMailer/src/SMTP.php");
require(__DIR__ . "/PHPMailer/src/Exception.php");

if (isset($_GET["firstname"]) && isset($_GET["lastname"]) && isset($_GET["email"]) && isset($_GET["message"])) {
   $firstname = $_GET["firstname"];
   $lastname = $_GET["lastname"];
   $email = $_GET["email"];
   $subject = $_GET['objet'];
   $message = $_GET["message"];

   $mail = new PHPMailer\PHPMailer\PHPMailer();
   $mail->SMTPDebug = true;
   $mail->SMTPDebug = 0; // Active/désactive les messages de mise au point
   $mail->isSMTP(); // Utilise le protocole SMTP
   $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS; // Active le cryptage sécurisé TLS
   $mail->Host = "smtp.gmail.com"; // Configure le nom du serveur SMTP
   $mail->Port = 465; // Configure le numéro de port
   $mail->SMTPAuth = true; // Active le mode authentification
   $mail->Username = 'jamel.agricole07@gmail.com';
   $mail->Password = 'txosyygpgsukjkpx';

   $mail->setFrom('jamel.agricole07@gmail.com', 'Jamel');
   $mail->addAddress('jamel.agricole07@gmail.com', 'Jamel');
   $mail->Subject = $subject;

   $mail->isHTML(true);
   $mail->Body = "<p>" . $email . "<br>" . $firstname . " " . $lastname . "<br>" . $message . "</p>";
   $mail->CharSet = PHPMailer\PHPMailer\PHPMailer::CHARSET_UTF8;
   if ($mail->send() != false) {
      echo ('<div class="success"><p class="message">Votre message a été envoyé !</p></div>');
   } else {
      echo ('<div class="error"><p class="message">Votre message n\'a pas été envoyé !</p></div>');
   }
}
?>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Je suis Jamel Agricole, un étudiant en première année à l'IUT de Laval.">
   <!-- Google Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;900&display=swap" rel="stylesheet">
   <!-- CSS -->
   <link rel="stylesheet" href="./assets/css/style.css">
   <!-- Favicon -->
   <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
   <title>Jamel AGRICOLE - Porfolio</title>
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
      <section id="home" class="home">
         <div class="home__left-side">
            <h1 class="home__title">
               Je suis Jamel Agricole, <br>
               un developpeur web
            </h1>

            <p class="home__description">
               J'apprends à concevoir et développer des interfaces qui rendent
               la vie des gens plus simple !
            </p>

               <div class="home__buttons">
                  <a href="#contact" class="home__btn contact-btn" aria-label="Contactez moi">Contactez moi</a>
                  <a href="#project" class="home__btn project-btn" aria-label="Mes project">Mes projets</a>
               </div>
         </div>

         <figure class="home__right-side">
            <img class="right-img" src="assets/images/photo.png" alt="Photo">
         </figure>
      </section>


      <section id="about" class="about">
         <h2 class="about__title">À propos de moi</h2>
         <div class="about__content">
            <div class="about__left-side">
               <h2 class="left-side__title">Je suis <span class="blue-text">Jamel</span></h2>
                  <p class="about__description">
                     Passionné par le développement web depuis peu, je me suis d'abord formé en autodidacte au lycée.
                     Puis j'ai eu la chance de pouvoir intégrer l'IUT de Laval afin de réaliser un BUT MMI.
                     Mon intérêt se concentre sur la création de sites web dynamiques et intuitifs en
                     utilisant des langages tels que HTML, CSS et Javascript.
                  </p>
                  <a class="about-btn" href="assets/CV-Jamel-AGRICOLE.pdf" target="_blank" aria-label="Télécharger mon CV">Télécharger mon CV</a>
            </div>
            <div class="about__right-side">
               <h2 class="right-side__title">Mes <span class="blue-text">compétences</span></h2>
               <ul class="skills">
                  <li class="skill">HTML</li>
                  <li class="skill">CSS</li>
                  <li class="skill">JavaScript</li>
                  <li class="skill">Git</li>
                  <li class="skill">Github</li>
                  <li class="skill">Responsive</li>
                  <li class="skill">SEO</li>
                  <li class="skill">Figma</li>
               </ul>
            </div>
         </div>
      </section>

      <section id="project" class="project">
         <h2 class="project__title">Mes projets</h2>

         <ul class="project__container">
            <li class="project__img-box">
               <a href="#projets.php?projet=1" aria-label="Projet 1">
                  <img src=" assets/images/projet-1.png" alt="Landing page">
               </a>
            </li>

            <li class="project__img-box">
               <a href="projets/projets.php?projet=2" aria-label="Projet 2">
                  <img src="assets/images/projet-2.png" alt="Interaction">
               </a>
            </li>

            <li class="project__img-box" aria-label="Projet 3">
               <a href="projets/projets.php?projet=3">
                  <img src="assets/images/projet-3.png" alt="Carte produit">
               </a>
            </li>

            <li class="project__img-box" aria-label="Projet 4">
               <a href="projets/projets.php?projet=4">
                  <img src="assets/images/projet-4.png" alt="Landing page exercice">
               </a>
            </li>

            <li class="project__img-box" aria-label="Projet 4">
               <a href="projets/projets.php?projet=5">
                  <img src="assets/images/projet-5.png" alt="Carte voiture">
               </a>
            </li>
            
            <li class="project__img-box">
               <a href="projets/projets.php?projet=6" aria-label="Projet 6">
                  <img src="assets/images/projet-6.webp" alt="Bookhub">
               </a>
            </li>
         </ul>
      </section>

      <section id="contact" class="contact">
         <h2 class="contact__title">Envoyez moi un message</h2>
         <form action="index.php" method="get">
            <div class="form__names">
               <div class="firtname__field">
                  <label for="firstname">Prénom</label>
                  <input type="text" name="firstname" id="firstname" placeholder="Votre prénom" required>
               </div>

               <div class="lastname__field">
                  <label for="lastname">Nom</label>
                  <input type="text" name="lastname" id="lastname" placeholder="Votre nom" required>
               </div>
            </div>

            <div class="form__email">
               <label for="email">Email</label>
               <input type="email" name="email" id="email" placeholder="Votre email" required>
            </div>

            <div class="form__message">
               <label for="message">Message</label>
               <textarea name="message" id="message" cols="30" rows="10" placeholder="Écrivez votre message..." required></textarea>
            </div>

            <input class="submit-btn" type="submit" value="Envoyer">
         </form>
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
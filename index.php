<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css">
    <script src="JAVA/c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Site Guillaume LE QUILLEUC</title>
    

</head>
<body>
    <header>
    <div class="logo-container">
        <img src="APEX.png" alt="Left Logo" class="logo-left">
    </div>
    <span class="rainbow-text">Site de Guillaume LE QUILLEUC</span>
    <div class="logo-container">
        <img src="APEX.png" alt="Right Logo" class="logo-right">
    </div>
    </header>
         <nav>
        <a href="#accueil">Accueil</a>
        <a href="#a propos">À propos</a>
        <a href="#competences">Compétences</a>
        <a href="#experience">Expérience</a>
        <a href="#formation">Formation</a>
        <a href="#contact">Contact</a>
    </nav>
    <div id="acceuil">
    <section id="accueil">
        <h2>Accueil</h2>
        <?php include("PAGEPHP/acceuil.php"); ?>
    </section>
    </div>
    <div id="propos">
    <section id="a propos">
        <h2>À propos</h2>
        <?php include("PAGEPHP/a propos.php"); ?>
    </section>
    </div>
    <div id="competences">
    <section id="competences">
        <h2>Compétences</h2>
        <?php include("PAGEPHP/competences.php"); ?>
    </section>
    </div>
    <div id="experience">
    <section id="experience">
        <h2>experiences</h2>
        voici mon CV en PDF
        et les experiences que j'ai faite
       <?php include("PAGEPHP/experience.php"); ?>
    </section>
    </div>
    <div id="formation">
    <section id="formation">
        <h2>formation</h2>
        <h3>les formations que j'ai faite durant ma periode scolaire</h3>
       <?php include("PAGEPHP/formation.php"); ?>
    </section>
    </div>
    <div id="contact">
    <section id="contact">
    <h2>Contact</h2>
   <?php include("PAGEPHP/contact.php"); ?>
    <form method="post">
        <select id="gender" name="gender" required>
            <option value="male">Homme</option>
            <option value="female">Femme</option>
        </select>

      <br>
      <label for="nom">Nom:</label>
      <input type="text" id="nom" name="nom" required>
      <br />
      <label for="prenom">Prénom:</label>
      <input type="text" id="prenom" name="prenom" required>
      <br />
      <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <br />
      <form action="?" method="POST">
      <div class="g-recaptcha" data-sitekey="6LeBSikpAAAAAG7Jtn7IEsEFrn9sAWMyljzTUHKV"></div>
      <br/>
      <input type="submit" value="Submit">
    </form>   
</section>
</div>
    <footer>
        <p>Merci de visiter le meilleur site de france !</p>
    </footer>
    
</div>
</body>
</html>
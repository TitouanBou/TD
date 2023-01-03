<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Mon portfolio - Titouan Bourez</title>
</head>
<body>
  <header>
    <h1>Titouan Bourez</h1>
    <p>Etudiant en SIO à Parcoursup St Ursule</p>
  </header>
  <nav>
    <ul>
      <li><a href="#accueil">Accueil</a></li>
      <li><a href="#a-propos">A propos</a></li>
      <li><a href="#competences">Compétences</a></li>
      <li><a href="#experience">Expérience</a></li>
      <li><a href="#formation">Formation</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>
  <main>
    <section id="accueil">
      <h2>Accueil</h2>
      <p>Bienvenue sur mon portfolio en ligne. Je suis Titouan Bourez, jeune étudiant en SIO. Sur cette page, vous trouverez un aperçu de mon parcours professionnel et de mes compétences.</p>
    </section>
    <section id="a-propos">
      <h2>A propos</h2>
      <p>Je suis étudiant au BTS SIO de l'établissement Parcours Sup St Ursule en spécialité réseaux, j'ai 18ans né le 31/08/2004 à Caen, je suis passioné de football.</p>
    </section>
    <section id="competences">
      <h2>Compétences</h2>
<!-- Barre de compétence en HTML -->
<div class="skill-bar">
  <div class="skill-bar-fill" style="width: 80%;"></div>
</div>
<p>HTML</p>

<!-- Barre de compétence en CSS -->
<div class="skill-bar">
  <div class="skill-bar-fill" style="width: 90%;"></div>
</div>
<p>CSS</p>

<!-- Barre de compétence en PHP -->
<div class="skill-bar">
  <div class="skill-bar-fill" style="width: 70%;"></div>
</div>
<p>PHP</p>

<!-- Barre de compétence en YAML -->
<div class="skill-bar">
  <div class="skill-bar-fill" style="width: 60%;"></div>
</div>
<p>YAML</p>

</div>

    </section>
    <section id="experience">
      <h2>Expérience</h2>
      <h3>Que des études</h3>
      <p>Ecole maternelle Henri Brunet</p>
      <p>Ecole primaire Henri Brunet</p>
      <p>Collège Villey-Desmeserets avec le Brevet mention Bien</p>
      <p>Lycée Jean Rostand avec le Bac STMG sans mention</p>
    </section>
    <section id="formation">
      <h2>Formation</h2>
      <h3>Stage d'observation de 3ième</h3>
      <p>Dans l'entreprise AbysseCorp à Rouen en observant différents pôles</p>
      <p>On peut voir sur mon CV toute mes expériences professionnels en cliquant dessus

      <a href="TBOUREZCV.pdf" title="Télécharger mon CV au format PDF">
  <img src="imagecv.png" alt="Logo CV"width=50px height=50px> 
</a>

</style>

<img src="imagemoi.jpeg" alt="Ma photo" class="photo-profil" width=120.5px>

<section>
			<a name="contact"></a>
			<h1>Contact</h1>
			<form name="mon-formulaire1" action="page-envoi.html" method="get">
<p>
   <input type="radio" name="civi" value="Mme" /> Madame
   <input type="radio" name="civi" value="Mlle" /> Mademoiselle
   <input type="radio" name="civi" value="Mr" /> Monsieur
</p>
<p>
   Votre prénom :<br />
   <input type="text" name="prenom" value="" />
</p>
<p>
   Votre nom :<br />
   <input type="text" name="nom" value="" />
</p>
<p>
   Votre addresse e-mail :<br />
   <input type="password" name="addresse e-mail" value="" />
</p>
   
<p>
   Objet du message :<br />
   <textarea name="le-message" rows="6" cols="40">Vous pouvez saisir ici l'objet du message.</textarea>
</p>
<p>
	Votre message :<br />
   <textarea name="le-message" rows="6" cols="40">Vous pouvez saisir ici un message.</textarea>
</p>
<p>
   <input type="submit" value="Envoyer" />
   <input type="reset" value="Annuler" />
</p>
</form>
		</section>
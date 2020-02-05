<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jarditou 2.0</title>
    <link rel="stylesheet" href="C:/Users/80010-70-09/Documents/Jarditou2.0/assets/CSS/css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
 <div class="container">
<!-- Navbar -->
  <header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="Index.html"><img src="assets/img/jarditou_logo2.png" alt="" title="Logo Jarditou" id="Logo" height="70" class="d-inline-block align-top">2.0</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="Index.html">Accueil<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="Tableau.html">Tableau</a>
              <a class="dropdown-item" href="#">Contact</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <a href="Tableau.html"><img src="C:/Users/80010-70-09/Documents/Jarditou2.0/assets/img/promotion.jpg"  alt="Promo" class="w-100 "></a>
  </header>
<!-- Fin de Navbar -->
  <hr>
    <p id="zone">* Ces zones sont obligatoire </p>
<!-- Début du formulaire -->
    <form action="http://bienvu.net/script.php" method="GET">
      <fieldset>
        <legend>Vos coordonnées</legend>
        <div class="form-row">
          <!-- Le nom -->
          <div class="form-group col-md-6">
            <label for="nom"> Votre nom*: </label>
            <input type="text" id="nom" name="nom" class="form-control">
            <p id="Errnom" class="Erreur"></p>
          </div>
          <!-- Le prénom -->
          <div class="form-group col-md-6">
            <label for="prenom"> Votre prénom*: </label>
            <input type="text" name="prenom" class="form-control" id="prenom">
            <p id="Errprenom" class="Erreur"></p>
          </div>
        </div>
        <!-- Le sexe -->
        <div class="form-row">
          <label class="col-form-label">Sexe*:</label>
          <div class="custom-control custom-radio custom-control-inline">
            <input class="custom-control-input" type="radio" name="sexe" id="feminin" value="femme">
            <label class="custom-control-label" for="feminin">Féminin</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input class="custom-control-input" type="radio" name="sexe" id="masculin" value="homme">
            <label class="custom-control-label" for="masculin">Masculin</label>
          </div>    
        </div>
        <p id="Errsexe" class="Erreur"></p>
        <!-- La date de naissance -->
        <div class="form-group">  
          <label for="naissance"> Date de naissance*: </label>
          <input type="date" id="naissance" name="naissance" class="form-control">
          <p id="Errnaissance" class="Erreur"></p>
        </div>
        <!-- Le code postale -->
        <div class="form-group">
          <label for="code"> Code Postal: </label>
          <input type="text" pattern="^[0-9]+$" id="code" name="code" class="form-control">
          <p id="Errcode" class="Erreur"></p>
        </div>
        <!-- L'adresse -->
        <div class="form-group">
          <label for="adresse"> Adresse: </label>
          <input type="text" id="adresse" class="form-control" name="adresse" placeholder="123 rue du deve">
          <p id="Erradrs" class="Erreur"></p>
        </div>
        <!-- La ville -->
        <div class="form-group">
          <label for="ville"> Ville: </label>
          <input type="text" id="ville" name="ville" class="form-control">
          <p id="Errville" class="Erreur"></p>
        </div>
        <!-- La ville -->
        <div class="form-group">
          <label for="mail"> Email*: </label>
          <input type="email" id="mail" class="form-control" name="email" placeholder="dave.loper@afpa.fr">
          <p id="Errmail" class="Erreur"></p>
        </div>
    </fieldset>
    <fieldset>
        <legend>Votre demande</legend>
        <!-- Le sujet -->
        <div class="form-row">
          <label for="sujet"> Sujet*: </label>
          <select name="sujet" id="sujet" class="form-control">
            <option value="sujet">Sujet</option>
            <option value="commandes">Mes commandes</option>
            <option value="produit">Question sur un produit</option>
            <option value="reclamation">Reclamation</option>
            <option value="autres">Autres</option>
          </select>
          <p id="Errsujet" class="Erreur"></p>
        </div>
        <!-- La question -->
        <div class="form-group">
          <label for="question"> Votre question*: </label>
          <textarea class="form-control" name="question" id="question" cols="20" rows="3"></textarea>
          <p id="Errquestion" class="Erreur"></p>
        </div>
    </fieldset>
    <!-- Check de formulaire -->
        <div class="custom-control custom-checkbox">
          <input class="custom-control-input" type="checkbox" id="accepte">
          <label class="custom-control-label" for="accepte">J'accepte le traitement informatique de ce formulaire.</label>
          <p id="Erraccpt" class="Erreur"></p>
        </div>
          <hr>
          <!-- Les boutons Envoyer et Annuler -->
        <div class="form-group">
          <button type="submit" value="Envoyer" id="envoi" class="btn btn-primary">Envoyer</button>
          <button type="reset" value="Annuler" class="btn btn-danger">Annuler</button>
        </div>
    </form>
          <hr>
<!-- Mentions Legales -->
        <footer>
          <ul class="nav justify-content-center mb-3">
            <li class="nav-item"><a class="nav-link active" href="">Mentions Legales</a></li>
            <li class="nav-item"><a class="nav-link active" href="">Horaires</a></li>
            <li class="nav-item"><a class="nav-link active" href="">Plan du site</a></li>
          </ul>
        </footer>
      </div>
    <script src="assets/JS/js.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
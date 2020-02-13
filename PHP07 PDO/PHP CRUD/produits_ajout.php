<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jarditou PHP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <!-- Navbar -->
    <header>
      <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><img src="assets/img/jarditou_logo2.png" alt="" title="Logo Jarditou" id="Logo" height="70" class="d-inline-block align-top">2.0</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="tableau.php">Tableau</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="formulaire.php">Contact</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
<body>
  <div class="col-12">
  <form action="produits_ajout_script" method="POST">
  <fieldset>
    <div class="form-group">
      <label for="ID">ID</label>
      <input type="text" name="ID" class="form-control" id="ID" value="">
    </div>
    <div class="form-group">
      <label for="reference">Référence</label>
      <input type="text" name="reference" class="form-control" id="reference" value="">
    </div>
    <div class="form-group">
      <label for="categorie">Catégorie</label>
      <input type="text" name="categorie" class="form-control" id="categorie" value="">
    </div>
    <div class="form-group">
      <label for="libelle">Libellé</label>
      <input type="text" name="libelle" class="form-control" id="libelle" value="">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea name="desciption" class="form-control" id="description" value=""></textarea>
    </div>
    <div class="form-group">
      <label for="prix">Prix</label>
      <input type="text" name="prix" class="form-control" id="prix" value="">
    </div>
    <div class="form-group">
      <label for="stock">Stock</label>
      <input type="text" name="stock" class="form-control" id="stock" value="">
    </div>
    <div class="form-group">
      <label for="couleur">Couleur</label>
      <input type="text" name="couleur" class="form-control" id="couleur" value="">
    </div>
    <div class="form">
      <label class="col-form-label" for="bloque">Produit bloqué:</label>
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" name="bloque" id="oui" value="oui">
          <label class="custom-control-label" for="oui">Oui</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input class="custom-control-input" type="radio" name="bloque" id="non" value="non">
          <label class="custom-control-label" for="non">Non</label>
        </div>
    </div>
    <div class="form-group">
      <label for="ajout" >Date d'ajout : </label><p></p>
      <label for="modif">Date de modification : </label><p></p>
    </div>
  </fieldset>
  </form>
  </div>
    <button type="submit" value="envoi" class="btn btn-primary" name="envoi">Envoyer</button>
  </fieldset>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>
<footer>
    <ul class="nav justify-content-center mb-3">
        <li class="nav-item"><a class="nav-link active" href="">Mentions Legales</a></li>
        <li class="nav-item"><a class="nav-link active" href="">Horaires</a></li>
        <li class="nav-item"><a class="nav-link active" href="">Plan du site</a></li>
    </ul>
</footer>
</body>

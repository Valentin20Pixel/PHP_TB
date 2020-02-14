<?php include("header.php"); ?>
<?php
require_once("script.php");

if (isset($_POST["envoi"])) {
  $coo = coord();
  $ver = verif();
};
?>
    <hr>
    <p id="zone">* Ces zones sont obligatoire </p>
    <!-- Début du formulaire -->
    <form action="script.php" method="POST">
      <fieldset>
        <legend>Vos coordonnées</legend>
        <div class="form-row">
          <!-- Le nom -->
          <div class="form-group col-md-6">
            <label for="nom"> Votre nom*: </label>
            <input type="text" id="nom" name="nom" class="form-control" value="<?php if (isset($_POST['nom'])) echo $_POST['nom']; ?>">
            <p id="Errnom" class="Erreur"><?php if (isset($ver['Errnom'])) echo $ver['Errnom']; ?></p>
          </div>
          <!-- Le prénom -->
          <div class="form-group col-md-6">
            <label for="prenom"> Votre prénom*: </label>
            <input type="text" name="prenom" class="form-control" id="prenom" value="<?php if (isset($_POST['prenom'])) echo $_POST['prenom']; ?>">
            <p id="Errprenom" class="Erreur"><?php if (isset($ver['Errprenom'])) echo $ver['Errprenom']; ?></p>
          </div>
        </div>
        <!-- Le sexe -->
        <div class="form-row">
          <label class="col-form-label" for="sex">Sexe*:</label>
          <div class="custom-control custom-radio custom-control-inline">
            <input class="custom-control-input" type="radio" name="sex" id="feminin" value="femme" <?php if (isset($_POST['sex']) && $_POST['sex'] == "femme") echo "checked"; ?>>
            <label class="custom-control-label" for="feminin">Féminin</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input class="custom-control-input" type="radio" name="sex" id="masculin" value="homme" <?php if (isset($_POST['sex']) && $_POST['sex'] == "homme") echo "checked"; ?>>
            <label class="custom-control-label" for="masculin">Masculin</label>
          </div>
        </div>
        <p id="Errsexe" class="Erreur"><?php if (isset($ver['Errsex'])) echo $ver['Errsex']; ?></p>
        <!-- La date de naissance -->
        <div class="form-group">
          <label for="naissance"> Date de naissance*: </label>
          <input type="date" id="naissance" name="naissance" class="form-control" value="<?php if (isset($_POST['naissance'])) echo $_POST['naissance']; ?>">
          <p id="Errnaissance" class="Erreur"><?php if (isset($ver['Errnaissance'])) echo $ver['Errnaissance']; ?></p>
        </div>
        <!-- Le code postale -->
        <div class="form-group">
          <label for="code"> Code Postal: </label>
          <input type="text" pattern="^[0-9]+$" id="code" name="code" class="form-control" value="<?php if (isset($_POST['code'])) echo $_POST['code']; ?>">
          <p id="Errcode" class="Erreur"><?php if (isset($ver['Errcode'])) echo $ver['Errcode']; ?></p>
        </div>
        <!-- L'adresse -->
        <div class="form-group">
          <label for="adresse"> Adresse: </label>
          <input type="text" id="adresse" class="form-control" name="adresse" placeholder="123 rue du deve" value="<?php if (isset($_POST['adresse'])) echo $_POST['adresse']; ?>">
          <p id="Erradrs" class="Erreur"><?php if (isset($ver['Erradrs'])) echo $ver['Erradrs']; ?></p>
        </div>
        <!-- La ville -->
        <div class="form-group">
          <label for="ville"> Ville: </label>
          <input type="text" id="ville" name="ville" class="form-control" value="<?php if (isset($_POST['ville'])) echo $_POST['ville']; ?>">
          <p id="Errville" class="Erreur"><?php if (isset($ver['Errville'])) echo $ver['Errville']; ?></p>
        </div>
        <!-- L'email -->
        <div class="form-group">
          <label for="email"> Email*: </label>
          <input type="email" id="mail" class="form-control" name="email" placeholder="dave.loper@afpa.fr" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
          <p id="Errmail" class="Erreur"><?php if (isset($ver['Errmail'])) echo $ver['Errmail']; ?></p>
        </div>
      </fieldset>
      <fieldset>
        <legend>Votre demande</legend>
        <!-- Le sujet -->
        <div class="form-row">
          <label for="choix"> Sujet*: </label>
          <select name="choix" id="choix" class="form-control">
            <option value="sujet" <?php if (isset($_POST['choix']) && $_POST['choix'] == "sujet") echo "selected"; ?>>Sujet</option>
            <option value="commandes" <?php if (isset($_POST['choix']) && $_POST['choix'] == "commandes") echo "selected"; ?>>Mes commandes</option>
            <option value="produit" <?php if (isset($_POST['choix']) && $_POST['choix'] == "produit") echo "selected"; ?>>Question sur un produit</option>
            <option value="reclamation" <?php if (isset($_POST['choix']) && $_POST['choix'] == "reclamation") echo "selected"; ?>>Reclamation</option>
            <option value="autres" <?php if (isset($_POST['choix']) && $_POST['choix'] == "autres") echo "selected"; ?>>Autres</option>
          </select>
          <p id="Errsujet" class="Erreur"><?php if (isset($ver['Errsujet'])) echo $ver['Errsujet']; ?></p>
        </div>
        <!-- La question -->
        <div class="form-group">
          <label for="question"> Votre question*: </label>
          <textarea class="form-control" name="question" id="question" cols="20" rows="3"><?php if (isset($_POST['question'])) echo $_POST['question']; ?></textarea>
          <p id="Errquestion" class="Erreur"><?php if (isset($ver['Errquestion'])) echo $ver['Errquestion']; ?></p>
        </div>
      </fieldset>
      <!-- Check de formulaire -->
      <div class="custom-control custom-checkbox">
        <input class="custom-control-input" name="check" type="checkbox" id="accepte" value="info" <?php if (isset($_POST['check']) && $_POST['check'] == "info") echo "checked"; ?>>
        <label class="custom-control-label" for="accepte">J'accepte le traitement informatique de ce formulaire.*</label>
        <p id="Erraccpt" class="Erreur"><?php if (isset($ver['Erraccpt'])) echo $ver['Erraccpt']; ?></p>
      </div>
      <hr>
      <!-- Les boutons Envoyer et Annuler -->
      <div class="form-group">
        <button type="submit" value="Envoyer" id="envoi" class="btn btn-primary" name="envoi">Envoyer</button>
        <button type="reset" value="Annuler" name="annuler" class="btn btn-danger">Annuler</button>
      </div>
    </form>
    <?php include("footer.php"); ?>
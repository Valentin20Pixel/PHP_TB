<?php include("header.php"); ?>
  <div class="col-12">
  <form action="produits_ajout_script.php" method="POST">
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
    <button type="reset" value="annule" class="btn btn-danger" name="annule" href="#">Annuler</button>
  </fieldset>
</form>
<?php include("footer.php"); ?>
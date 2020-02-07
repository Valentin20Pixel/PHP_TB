<?php
function verif()
{
// Je déclare mes RegEx 
    $alpha = "/(^[A-Z]+[A-Za-zéèêâîïëûçŒœæ\-\s]+$)/";
    $adresse = "/(^[0-9]+[A-za-zéèêâîïëûçŒœæ\-\s]+$)|^$/";
    $mail = "/(^[A-Za-z0-9éèêâîïëûçŒœæ\-_\.]+@{1}[a-zéèêâîïëûçŒœæ\-_]+[\.]{1}[a-z]+$)/";
    $date = "/(^[1-2][0-9][0-9][0-9][\-]{1}[0-1][0-9]+[\-]{1}[0-3][0-9]+$)/";
    $code = "/(^([0-9]{5})$)|^$/";
    $alphaN = "/(^[A-Z]+[A-Za-zéèêâîïëûçŒœæ\-\s]+$)|^$/";
    $alphaQ = "/([A-Za-zéèêâîïëûçŒœæ\-\s]+$)/";
// Je vais chercher mes variables 
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $naiss = $_POST["naissance"];
    $CP = $_POST["code"];
    $adrs = $_POST["adresse"];
    $city = $_POST["ville"];
    $email = $_POST["email"];
    $sujet = $_POST["choix"];
    $question = $_POST["question"];
// Tableaux des valeurs du formulaire
    $true = [];
    $false = null;

// Je verifie que le nom est valide
    if (preg_match($alpha, $nom)) {
        $true["nom"] = $nom;
    } else if (empty($nom)){
        $false["Errnom"]="Cette zone est obligatoire.";
    } else{
        $false["Errnom"] = "Utilisez que des caractères alphabétiques.";
    };
// Je verifie que le prenom est valide
    if (preg_match($alpha, $prenom)) {
        $true["prenom"] = $prenom;
    } else if (empty($prenom)){
        $false["Errprenom"]="Cette zone est obligatoire.";
    } else {
        $false["Errprenom"] = "Utilisez que des caractères alphabétiques.";
    };
// Je verifie que le sexe soit bien selectionner
    if (isset($_POST['sex'])) {
        $true["sex"] = $_POST["sex"];
    } else {
        $false["Errsex"] = "Cette zone est obligatoire. Selectionnez votre sexe.";
    };
// Je verifie que la date de naissance est valide
    if (preg_match($date, $naiss)) {
        $true["naissance"] = $naiss;
    } else if (empty( $naiss)) {
        $false["Errnaissance"]="Cette zone est obligatoire.";
    } else {
        $false["Errnaissance"] = "Date de naissance non valide.";
    };
// Je verifie que le code postale est valide
    if (!preg_match($code, $CP)) {
        $false["Errcode"] = "Utilisez que des caractères numeriques.";
    } else {
        $true["code"] = $CP;
    };
// Je verifie que l'adresse est valide
    if (!preg_match($adresse, $adrs)) {
        $false["Erradrs"] = "Adresse incorrect.";
    } else {
        $true["adrs"] = $adrs;
    };
// Je verifie que la ville est valide
    if (!preg_match($alphaN, $city)) {
        $false["Errville"] = "Utilisez que des caractères alphabétiques.";
    } else {
        $true["ville"] = $city;
    };
// Je verifie que le mail est valide
    if (preg_match($mail, $email)) {
        $true["mail"] = $email;
    } else if (empty($email)) {
        $false["Errmail"]="Cette zone est obligatoire.";
    } else {
        $false["Errmail"] = "Adresse mail non valide.";
    };
// Je verifie que le sujet soit bien selectionner
    if ($sujet == "sujet") {
        $false["Errsujet"] = "Cette zone est obligatoire. Sélectionnez un sujet.";
    } else {
        $true["sujet"] = $sujet;
    };
// Je verifie que la zone question est valide
    if (preg_match($alphaQ, $question)) {
        $true["question"] = $question;
    } else if (empty($question)) {
        $false["Errquestion"]="Cette zone est obligatoire.";
    } else {
        $false["Errquestion"] = "Utilisez que des caractères alphanumérique.";
    };
// Je verifie que le formulaire soit bien coché
    if (!isset($_POST["check"])) { 
        $false["Erraccpt"] = "Cette zone est obligatoire. Cochez pour valider le formulaire.";
    };
    // foreach ($false as $i=>$value)
    //     echo $i.':'.$value.'<br>';
    // foreach ($true as $i=>$value)
    //     echo $i.':'.$value.'<br>';

        return $false;
        return $true;

};

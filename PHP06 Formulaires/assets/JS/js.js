var check = document.getElementById("envoi");
check.addEventListener("click", function verif(event) {
    var alpha = /(^[A-Z]+[A-Za-zéèêâîïëûçŒœæ\-\s]+$)/;
    var adresse = /(^[0-9]+[A-za-zéèêâîïëûçŒœæ\-\s]+$)|^$/;
    var mail = /(^[A-Za-z0-9éèêâîïëûçŒœæ\-_\.]+@{1}[a-zéèêâîïëûçŒœæ\-_]+[\.]{1}[a-z]+$)/;
    var date = /(^[1-2][0-9][0-9][0-9][\-]{1}[0-1][0-9]+[\-]{1}[0-3][0-9]+$)/;
    var code = /(^([0-9]{5})$)|^$/;
    var alphaN = /(^[A-Z]+[A-Za-zéèêâîïëûçŒœæ\-\s]+$)|^$/;
    var nom = document.getElementById("nom").value;
    var prenom =document.getElementById("prenom").value;
    var sexem = document.getElementById("masculin").checked;
    var sexef = document.getElementById("feminin").checked;
    var naiss = document.getElementById("naissance").value;
    var CP = document.getElementById("code").value;
    var adrs = document.getElementById("adresse").value;
    var city = document.getElementById("ville").value;
    var email = document.getElementById("mail").value;
    var sujet = document.getElementById("sujet").value;
    var question = document.getElementById("question").value;
    var accpt =document.getElementById("accepte").checked;
// Je verifie que le nom est valide
    if(!alpha.test(nom)){
        document.getElementById("Errnom").textContent="Cette zone est obligatoire. Utilisez que des caractères alphabétiques.";
        event.preventDefault();
    }else{
        document.getElementById("Errnom").textContent="";
    }
// Je verifie que le prenom est valide
    if(!alpha.test(prenom)){
        document.getElementById("Errprenom").textContent="Cette zone est obligatoire. Utilisez que des caractères alphabétiques.";
        event.preventDefault();
    }else{
        document.getElementById("Errprenom").textContent="";
    }
// Je verifie que la date de naissance est valide
    if (!date.test(naiss)){
        document.getElementById("Errnaissance").textContent="Cette zone est obligatoire. Date de naissance non valide.";
        event.preventDefault();
    }else{
        document.getElementById("Errnaissance").textContent="";
    }
// Je verifie que le code postale est valide
    if(!code.test(CP)){
        document.getElementById("Errcode").textContent="Utilisez que des caractères numeriques.";
        event.preventDefault();
    }else{
        document.getElementById("Errcode").textContent="";
    }
// Je verifie que l'adresse est valide
    if(!adresse.test(adrs)){
        document.getElementById("Erradrs").textContent="Adresse incorrect.";
        event.preventDefault();
    }else{
        document.getElementById("Erradrs").textContent="";
    }
// Je verifie que la ville est valide
    if(!alphaN.test(city)){
        document.getElementById("Errville").textContent="Utilisez que des caractères alphabétiques.";
        event.preventDefault();
    }else{
        document.getElementById("Errville").textContent="";
    }
// Je verifie que le mail est valide
    if(!mail.test(email)){
        document.getElementById("Errmail").textContent="Cette zone est obligatoire. Adresse mail non valide.";
        event.preventDefault();
    }else{
        document.getElementById("Errmail").textContent="";
    }
// Je verifie que la zone question est valide
    if(!alpha.test(question)){
        document.getElementById("Errquestion").textContent="Cette zone est obligatoire. Utilisez que des caractères numeriques.";
        event.preventDefault();
    }else{
        document.getElementById("Errquestion").textContent="";
    }
// Je verifie que le sexe soit bien selectionner
    if(sexem==false && sexef==false){
        document.getElementById("Errsexe").textContent="Cette zone est obligatoire. Selectionnez votre sexe.";
        event.preventDefault();
    }else{
        document.getElementById("Errsexe").textContent="";
    }
// Je verifie que le sujet soit bien selectionner
    if(sujet=="sujet"){
        document.getElementById("Errsujet").textContent="Cette zone est obligatoire. Sélectionnez un choix.";
        event.preventDefault();
    }else{
        document.getElementById("Errsujet").textContent="";
    }
// Je verifie que le formulaire soit bien coché
    if(!accpt==true){
        document.getElementById("Erraccpt").textContent="Cette zone est obligatoire. Cochez pour validé le formulaire.";
        event.preventDefault();
    }else{
        document.getElementById("Erraccpt").textContent="";
    }
});

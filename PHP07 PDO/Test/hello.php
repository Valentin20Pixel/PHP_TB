	
<?php
// Fichier 'hello.php'
 
function writeMessage($text) {
   $html = "<h1>".$text."</h1>";
   echo $html;
}  
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Inclusion de fichiers PHP</title>
    <link rel="stylesheet" href="css/style.css">        
</head>
<body> 
<?php 
writeMessage($message); 
?>
<br>
<?php 
writeMessage("Bonjour tout le monde !"); 
?>    
</body>
</html>
<html>
<?php
function calculator($a,$b,$c){
if ($c == "+") {
  echo (($a) + ($b));
} else if ($c == "-") {
  echo (($a) - ($b));
} else if ($c == "*") {
  echo (($a) * ($b));
} else if ($c == "/") {
  echo (($a) / ($b));
} else {
  echo ("Erreur!!");
};
};
calculator($a=5,$b=6,$c="*");
?>
</html>
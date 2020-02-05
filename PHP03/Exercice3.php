<?php
 echo '<link rel="stylesheet" href="css.css">';
    echo"<table>";
      echo "<tr>";
      echo "<td>X</td>";
      for ($j = 0 ;$j <= 12 ; $j++)
        echo "<td>".$j."</td>";
      echo "<tr>";
      for ($j = 0 ;$j <= 12; $j++)
      {
        echo "<tr>"; 
        echo  "<td> $j </td>" ;
        for ($i = 0 ;$i <= 12; $i++)
        {
          $res = $i * $j;
          echo "<td>".$res."</td>";
        }
        echo "</tr>";
      }
    echo "<table>";
<?php

/*
  Faire une fonction qui permet de généré un tableaux html à partir d'un
  tableau php.
*/

function generateHtmlArray(array $arr): string {
  $html = '<table style="border: 1px solid black; border-collapse: collapse;"><tbody>';
  foreach ($arr as $item) {
    $html .= "<tr style=\"border: 1px solid black;\"><td style=\"text-align: center; padding: 10px;\">$item</td></tr>";
  }
  $html .= "</tbody></table>";
  return $html;
}

echo generateHtmlArray([
  'oui', 
  'non', 
  'peut-être', 
  'je ne sais pas', 
  'pouvez vous répeter la question'
]);
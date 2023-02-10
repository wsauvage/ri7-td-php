<?php

function pyramide(int $number_of_line): string {
  $pyramide_str = '';
  for ($i = 0; $i < $number_of_line; $i++) { 
    for ($j=0; $j < $i; $j++) { 
      $pyramide_str .= $i;
    }

    $pyramide_str .= "\n";
  }

  return $pyramide_str;
}

echo pyramide(1000);

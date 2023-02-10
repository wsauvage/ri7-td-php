<?php

function biggestNumber(array $arr): int {
  $biggestNumber = -INF;
  foreach ($arr as $n) {
    $biggestNumber = $n > $biggestNumber ? $n : $biggestNumber;
  }
  return $biggestNumber;
}

echo biggestNumber([-100, -10, -193, -234]);

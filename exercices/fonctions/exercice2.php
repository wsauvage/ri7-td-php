<?php

function absolute(int|float $n): int|float {
  return $n < 0 ? -$n : $n;
}

echo absolute(-30);

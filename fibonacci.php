<?php
fib_in_loop(10);
//Fibonacci
function fib_in_loop($x) {
  $sum = 0;
  $a = 0;
  $b = 1;
  for($i = 0; $i < $x; $i++) {
    printf('%d ', $b);
    $sum = $a + $b;
    $a = $b;
    $b = $sum;
  }
  return $sum;
}
?>

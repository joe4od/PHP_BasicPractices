<?php
bubble([214, 242, 435, 100]);
//Bubble sort
function swap($arr, $x, $y) {
  $temp = $arr[$y];
  $arr[$y] = $arr[$x];
  $arr[$x] = $temp;
  return $arr;
}
function bubble($arr) {
  $count = count($arr);
  for($i=1; $i<$count; $i++) {
    for($j=1; $j<$count-$i+1; $j++) {
      if($arr[$j-1] > $arr[$j]) {
        $arr = swap($arr, $j-1, $j);
      }
    }
  }
  return $arr;
}
?>

<?php
$total_loops = 1000000;

$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_array = array();
  for($y = 0; $y < 10; $y++) {
    $my_array[$y] = true;
  }
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'array 10: ' . $t . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_array = array();
  for($y = 0; $y < 10; $y++) {
    $my_array[] = true;
  }
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'array 10 (no key): ' . $t . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_array = array();
  for($y = 0; $y < 10; $y++) {
    array_push($my_array, true);
  }
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'array 10 (push): ' . $t . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_array = new SplFixedArray(10);
  for($y = 0; $y < 10; $y++) {
    $my_array[$y] = true;
  }
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'splfixedarray w/ allocation 10: ' . $t . "\n";



$time_start = microtime(true);
$my_array = new SplFixedArray(10);
for($x = 0; $x < $total_loops; $x++) {
  for($y = 0; $y < 10; $y++) {
    $my_array[$y] = true;
  }
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'splfixedarray w/o allocation 10: ' . $t . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_array = array();
  for($y = 0; $y < 100; $y++) {
    $my_array[$y] = true;
  }
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'array 100: ' . $t . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_array = array();
  for($y = 0; $y < 100; $y++) {
    $my_array[] = true;
  }
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'array 100 (no key): ' . $t . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_array = array();
  for($y = 0; $y < 100; $y++) {
    array_push($my_array, true);
  }
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'array 100 (push): ' . $t . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_array = new SplFixedArray(100);
  for($y = 0; $y < 100; $y++) {
    $my_array[$y] = true;
  }
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'splfixedarray w/ allocation 100: ' . $t . "\n";



$time_start = microtime(true);
$my_array = new SplFixedArray(100);
for($x = 0; $x < $total_loops; $x++) {
  for($y = 0; $y < 100; $y++) {
    $my_array[$y] = true;
  }
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'splfixedarray w/o allocation 100: ' . $t . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_array = array_fill(0, 99, true);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'array_fill 100: ' . $t . "\n";

?>

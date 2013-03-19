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
  $test = array(true, true, true, true, true, true, true, true, true, true);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'array 10 (one call): ' . $t . "\n";



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

// -------

$array1 = array('one', 'two', 'three');
$array2 = array('four', 'five', 'six');
$array3 = array('t1' => 'one', 't2' => 'two', 't3' => 'three');
$array4 = array('t4' => 'four', 't5' => 'five', 't6' => 'six');
$array5 = array('t1' => 'Andrew', 't7' => 'seven', 't8' => 'eight');

$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_array = array_merge($array1, $array2);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'array merge default index: ' . $t . '(' . print_r($my_array, true) . ')' . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_array = array_merge($array3, $array4);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'array merge specified index: ' . $t . '(' . print_r($my_array, true) . ')' . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_array = array_merge($array3, $array5);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'array merge specified index: ' . $t . '(' . print_r($my_array, true) . ')' . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_array = $array1 + $array2;
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'array + default index: ' . $t . '(' . print_r($my_array, true) . ')' . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_array = $array3 + $array4;
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'array + specified index: ' . $t . '(' . print_r($my_array, true) . ')' . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_array = $array3 + $array5;
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'array + specified index: ' . $t . '(' . print_r($my_array, true) . ')' . "\n";



$time_start = microtime(true);
$test_array = array('one' => 'what', 'this' => 9);
for($x = 0; $x < $total_loops; $x++) {
  $new_array = $test_array;
  $new_array['something'] = 'yes';
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'array + individual element: ' . $t . '(' . print_r($new_array, true) . ')' . "\n";



$time_start = microtime(true);
$test_array = array('one' => 'what', 'this' => 9);
for($x = 0; $x < $total_loops; $x++) {
  $new_array = array(
    'something' => 'yes',
  );
  $third_array = array_merge($test_array, $new_array);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'array + array merge: ' . $t . '(' . print_r($third_array, true) . ')' . "\n";
?>

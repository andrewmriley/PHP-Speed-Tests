<?php
$total_loops = 1000000;

$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  if(true) {
    $some_result = true;
  } else {
    $some_result = false;
  }
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(if true) time: ' . $t . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  if(false) {
    $some_result = true;
  } else {
    $some_result = false;
  }
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(if false) time: ' . $t . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $some_result = (true) ? true : false;
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(ternary true) time: ' . $t . "\n";

$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $some_result = (true == true) ? true : false;
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(ternary positive true) time: ' . $t . "\n";

$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $some_result = (true != false) ? true : false;
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(ternary negative true) time: ' . $t . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $some_result = (false) ? true : false;
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(ternary false) time: ' . $t . "\n";

$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $some_result = (true == false) ? true : false;
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(ternary positive false) time: ' . $t . "\n";

$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $some_result = (true != true) ? true : false;
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(ternary negative false) time: ' . $t . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $some_result = (true == true);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(boolean positive true) time: ' . $t . "\n";

$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $some_result = (true != false);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(boolean negative true) time: ' . $t . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $some_result = (true == false);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(boolean positive false) time: ' . $t . "\n";

$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $some_result = (true != true);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(boolean negative false) time: ' . $t . "\n";


$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  switch (true){
    case true:
      $some_result = 'test';
    break;
    case false:
      $some_result = 'test';
    break;
  }
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(switch conditional first) time: ' . $t . "\n";

$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  switch (false){
    case true:
      $some_result = 'test';
    break;
    case false:
      $some_result = 'test';
    break;
  }
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(switch conditional second) time: ' . $t . "\n";

$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  switch (true){
    case true:
      $some_result = 'test';
    break;
    default:
      $some_result = 'test';
    break;
  }
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(switch conditional default not used) time: ' . $t . "\n";

$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  switch (false){
    case true:
      $some_result = 'test';
    break;
    default:
      $some_result = 'test';
    break;
  }
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(switch conditional default) time: ' . $t . "\n";

?>

<?php
$total_loops = 10000000;

$time_start = microtime(true);
$test = 99;
for($x = 0; $x < $total_loops; $x++) {
  $mynum = $test;
  unset($mynum);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(int control) time: ' . $t . "\n";

$time_start = microtime(true);
$test = 'party.';
for($x = 0; $x < $total_loops; $x++) {
  $mynum = (int)$test;
  unset($mynum);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(int string) time: ' . $t . "\n";


$time_start = microtime(true);
$test = 'party.';
for($x = 0; $x < $total_loops; $x++) {
  $mynum = intval($test);
  unset($mynum);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(intval string) time: ' . $t . "\n";

$time_start = microtime(true);
$test = 15;
for($x = 0; $x < $total_loops; $x++) {
  $mynum = (int)$test;
  unset($mynum);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(int int) time: ' . $t . "\n";

$time_start = microtime(true);
$test = 15;
for($x = 0; $x < $total_loops; $x++) {
  $mynum = intval($test);
  unset($mynum);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(intval int) time: ' . $t . "\n";

$time_start = microtime(true);
$test = '42';
for($x = 0; $x < $total_loops; $x++) {
  $mynum = (int)$test;
  unset($mynum);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(int string int) time: ' . $t . "\n";

$time_start = microtime(true);
$test = '42';
for($x = 0; $x < $total_loops; $x++) {
  $mynum = intval($test);
  unset($mynum);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(intval string int) time: ' . $t . "\n";

$time_start = microtime(true);
$test = 3.14159;
for($x = 0; $x < $total_loops; $x++) {
  $mynum = (int)$test;
  unset($mynum);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(int real) time: ' . $t . "\n";

$time_start = microtime(true);
$test = 3.14159;
for($x = 0; $x < $total_loops; $x++) {
  $mynum = intval($test);
  unset($mynum);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(intval real) time: ' . $t . "\n";

?>

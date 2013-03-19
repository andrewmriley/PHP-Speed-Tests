<?php
$total_loops = 1000000;

$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $some_result = 5;
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(no function) time: ' . $t . "\n";




function test_no_arguments() {
  return 5;
}

$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $some_result = test_no_arguments();
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(with function) time: ' . $t . "\n";




$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $some_result = call_user_func('test_no_arguments');
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(with call_user_func) time: ' . $t . "\n";




function test_w_arguments($a) {
  return $a;
}

$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $some_result = test_w_arguments(5);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(with arguments) time: ' . $t . "\n";




function test_w_rel_arguments(&$a) {
  return $a;
}

$b = 5;
$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $some_result = test_w_rel_arguments($b);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(with rel arguments) time: ' . $t . "\n";

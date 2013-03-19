<?php
$total_loops = 1000000;

$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_string = null;
  $my_string = 'test';
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'single quotes: ' . $t . "\n";


$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_string = null;
  $my_string = "test";
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo 'double quotes: ' . $t . "\n";


$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_string = null;
  for($y = 0; $y < 100; $y++) {
	  if($my_string) {
  		$my_string .= "\n";
	  }
  	$my_string .= 'blah';
  }
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(if) time: ' . $t . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_string = null;
  for($y = 0; $y < 100; $y++) {
      $my_string .= "blah\n";
  }
  $my_string = trim($my_string);
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(trim) time: ' . $t . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_array = array();
  for($y = 0; $y < 100; $y++) {
      $my_array[] = 'blah';
  }
  $my_string = implode("\n", $my_array);;
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(array) time: ' . $t . "\n";



$time_start = microtime(true);
$test = 'party.';
for($x = 0; $x < $total_loops; $x++) {
  $my_string = "This is a $test";
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(double quotes) time: ' . $t . "\n";



$time_start = microtime(true);
$test = 'party.';
for($x = 0; $x < $total_loops; $x++) {
  $my_string = 'This is a ' . $test;
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(single quotes) time: ' . $t . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_string = str_replace('[test]', 'party.', 'This is a [test]');
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(str_replace) time: ' . $t . "\n";



$time_start = microtime(true);
for($x = 0; $x < $total_loops; $x++) {
  $my_string = preg_replace('/\[test\]/', 'party.', 'This is a [test]');
}
$time_end = microtime(true);
$t = $time_end - $time_start;
echo '(preg_replace) time: ' . $t . "\n";

?>

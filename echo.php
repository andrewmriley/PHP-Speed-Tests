<?php
$total_loops = 1000000;

$time_start = microtime(true);
$test = 'party.';
for($x = 0; $x < $total_loops; $x++) {
  echo "This is a $test";
}
$time_end = microtime(true);
$r1 = $time_end - $time_start;


$time_start = microtime(true);
$test = 'party.';
for($x = 0; $x < $total_loops; $x++) {
  echo 'This is a ' . $test;
}
$time_end = microtime(true);
$r2 = $time_end - $time_start;


$time_start = microtime(true);
$test = 'party.';
for($x = 0; $x < $total_loops; $x++) {
  echo 'This is a ', $test;
}
$time_end = microtime(true);
$r3 = $time_end - $time_start;

echo "\n\n\n";
echo '(echo replace) time: ' . $r1 . "\n";
echo '(echo concat) time: ' . $r2 . "\n";
echo '(echo concat comma) time: ' . $r3 . "\n";

?>

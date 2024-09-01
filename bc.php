<?php

$digs = '0123456789ABCDEF';
$result = '';
$num = $argv[1];
$base = $argv[2];

if (in_array('-r', $argv)) {
	$num_xpl = explode('.', $num);
	$num = str_split($num_xpl[0]);

	$result = 0;
	
	foreach (array_values($num) as $i => $dig) {
		$result += strpos($digs, $dig) * $base ** (strlen($num_xpl[0])-1-$i);
	}
	
} else {
	$deci = $num % 1;
	$num -= $deci;	
	
	$result = '';

	while ($num != 0) {
		$d = $num % $base;
		$result = $result . $digs[$d];
		$num = floor($num / $base);
	}
	$result = strrev($result);

}
echo 'Result is '.$result.' ';
exit;




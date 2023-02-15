<?php
//Hitchhiker's Guide to PHP Math Functions
$initial = '555';

// Convert the initial number from an octal string to a decimal and print. 
$a = octdec($initial);
echo "$a\n";

// Convert from degrees to radians and print.
$b = deg2rad($a);
echo "$b\n";

// Find the cosine and print.
$c = cos($b);
echo "$c\n";

// Round to 3 decimal places and print.
$d = round($c, 3);
echo "$d\n";

// Find the natural log and print.
$e = log($d);
echo "$e\n";

// Find the absolute value and print.
$f = abs($e);
echo"$f\n";

// Find the arccosine and print. 
$g = acos($f);
echo "$g\n";

// Convert from radians to degrees and print.
$h = rad2deg($g);
echo "$h\n";

// Round down and print.
$i = floor($h);
echo "$i\n";

// Subtract 47 and print the final answer.
$j = $i - 47;
echo "Solution = $j";
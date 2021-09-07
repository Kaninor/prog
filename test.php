<?php

$num = readline("Enter a number: ");
$counter = 0;

for ($i=1; $i <= $num; $i++) { 
	if ($num % $i == 0) {
		$counter++;
		echo $i."\n";
	}
}

if ($counter == 2) {
	echo "p"."\n";;
}else{
	echo "np"."\n";;
}

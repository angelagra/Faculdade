<?php

$a =7;
$b = 7;
$c = 5;

if(($a > $b  && $a < $c) ||($a > $c && $a < $b)){
	echo "O Segundo maior numero é: " .$a;
}

if(($b > $a && $b < $c) || ($b > $c && $b < $a)){
	echo "O Segundo maiorr numero é: " .$b;
}

if(($c > $a && $c < $b)|| ($c > $b && $c < $a )){
	echo "O Segundo Maior Numero é: " .$c;
}

?>
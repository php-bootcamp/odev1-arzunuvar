<?php 

$age = 25;

if ($age<=14):
	print_r("Çocuk");
elseif ($age<=24):
	print_r("Genç");
elseif ($age<=64):
	print_r("Yetişkin");
elseif ($age>=65):
	print_r("Yaşlı");
else:
	print_r("İhtiyar");
endif;

?>


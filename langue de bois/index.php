<?php

$doc= file('web/data.txt');

$i = 0;
$groupe[$i] = array();
	
foreach ($doc as $ligne) {
	if ($ligne !== PHP_EOL) $groupe[$i][] = $ligne; 
	else $i++;	
}

$cache = array($groupe[0][0]);

echo $groupe[0][0].'<br>';


for ($y=0; $y < 4; $y++) { 
			
	if ($y == 0 ){

		for ($i=1; $i < count($groupe); $i++){

			$phrase = $groupe[$i][array_rand($groupe[$i])];

			if (!in_array($phrase, $cache)) {
				echo $phrase.'<br>';
				$cache[] = $phrase;			
			}
		}
	}
	else{
		for ($i=0; $i < count($groupe); $i++){

			$phrase = $groupe[$i][array_rand($groupe[$i])];

			if (!in_array($phrase, $cache)) {
				echo $phrase.'<br>';
				$cache[] = $phrase;			
			}
		}
	}
}

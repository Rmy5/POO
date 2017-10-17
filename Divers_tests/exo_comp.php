<?php

$tabNom=array("paul","mathieu","bob","berthes","george","albert");
$tabNomNote=array("paul"=>12,"mathieu"=>15,"bob"=>2,"berthes"=>19,"george"=>5,"albert"=>8);
$tabNomNote2=array(0=>"edouard",1=>"paul",2=>"pierre",3=>"truc",4=>"machin");

echo '$tabNom : en for:<br>';

for ($i=0; $i < count($tabNom); $i++) { 
	$nom = $tabNom[$i];
	echo $nom.'<br>';
}
echo '<br>en foreach:<br>';

foreach ($tabNom as $value) {
	echo $value.'<br>';
}

echo '<br>$tabNomNote : en foreach:<br>';

foreach ($tabNomNote as $value) {
	echo $value.'<br>';
}

echo '<br>$tabNomNote2 : en foreach:<br>';

foreach ($tabNomNote2 as $value) {
	echo $value.'<br>';
}

echo '<br>en for:<br>';

for ($i=0; $i < count($tabNomNote2); $i++) { 
	$nom = $tabNomNote2[$i];
	echo $nom.'<br>';
}

echo '<br>valeurs et clés non numériques:<br>';

foreach ($tabNomNote as $key => $value) {
	echo $key. '=' .$value.'<br>';
}

echo '<br>sortir paul des trois tableaux :<br>';
echo '<br>$tabNom:<br>';
echo $tabNom[0];
echo '<br>$tabNomNote:<br>';
$nom = array_keys($tabNomNote);
echo $nom[0];
echo '<br>$tabNomNote2:<br>';
echo $tabNomNote2[1];
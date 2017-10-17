<?php
ob_start();

$tabClients = [15=>['nom'=>'Dupont','prenom'=>'Jean','age'=>21,'codePostal'=>34200], 
			   25=>['nom'=>'Vigenère','prenom'=>'Paul','age'=>64,'codePostal'=>78500], 
			   32=>['nom'=>'Verne','prenom'=>'Fanny','age'=>21,'codePostal'=>42500], 
			   33=>['nom'=>'Imbert','prenom'=>'Paul','age'=>44,'codePostal'=>53000],
			   37=>['nom'=>'Buisson','prenom'=>'Jessica','age'=>36,'codePostal'=>22300]]; 




foreach ($tabClients as $id) {
	if (is_numeric($id['codePostal']) && strlen($id['codePostal']) == 5) echo 'le code postal de '.$id['prenom'].' est ok.<br>';
}

echo "<br>";

$dept = [15=>'Hérault',25=>'Yvelines',32=>'Loire',33=>'Mayenne',37=>'Côtes-d\'Armor'];


foreach ($tabClients as $key => $id) echo $id['nom'].' = '.$dept[$key].'<br>';

echo "<br>";

echo '<a href="exo2_simple.php?idClient=32">exo2_simple.php?idClient=32</a>';

if (isset($_GET['idClient']) && $_GET['idClient'] != 0) {

	foreach ($tabClients[''.$_GET['idClient'].''] as $key => $value) echo '<br>'.$key.' = '.$value;
}

if (isset($_GET['idClient']) && !isset($tabClients[''.$_GET['idClient'].''])) {
	header('location:404.php?erreur=noID');
}


echo "<br>";

echo '<br><a href="exo2_simple.php?idClient=40">exo2_simple.php?idClient=40</a>';

echo "<br>";
echo '<br><a href="exo2_simple.php?prenomClient=paul">exo2_simple.php?prenomClient=paul</a>';

if (isset($_GET['prenomClient'])) {
	foreach ($tabClients as $id) {
		if (in_array('Paul', $id)) {
			foreach ($id as $key => $value) {
				echo '<br>'.$key.' = '.$value;
			}
		}
		echo '<br>';
	}
}

echo '<form action="" name="ages" method="POST">';
foreach ($tabClients as $id){
	echo '<input type="checkbox">'.$id['age'].'</input>';
}
echo '<input type="submit"></form>';




ob_end_flush();


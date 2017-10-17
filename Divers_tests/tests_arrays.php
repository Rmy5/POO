<?php
$monTab = array('Pommes', 'Poires', 'Scoubidous', 'Banaene');

var_dump($monTab);
echo '<br><br>';
print_r($monTab);

echo '<br><br>';
$monTab2 = array('fruit1' => 'Pommes');
print_r($monTab2);

echo '<br><br>';
$monTab = array('Pommes', 'Poires', 'Scoubidous', 'Banaene');
foreach($monTab as $mesProduits) {
	echo $mesProduits . '<br>';
}


echo '<br><br>';
$ficheIdentite = array(
    'nom'           => 'TIVELET',
    'prenom'        => 'Damien',
    'anneeNaissance'=> 1982,
    'role'          => 'Formateur',
    'entreprise'    => 'Objectif 3W'
);

foreach($ficheIdentite as $cle=>$valeur) {
    echo 'La clé [' . $cle . '] contient : ' . $valeur . '<br />';
}

echo '<br><br>';


if(array_key_exists('role', $ficheIdentite)){
	echo 'La clé [role] existe dans le tableau. ' . $ficheIdentite['role'];
}

else{
	echo 'La clé n\'existe pas et a pour valeur ';
}


echo '<br><br>';

$maListeDeCourses = array('Pommes', 'Poires', 'Scoubidous');

if(array_search('Poires', $maListeDeCourses)!==false) :
    echo 'La valeur "Poires" est présente dans le tableau à la clé : ' . array_search('Poires', $maListeDeCourses);
else :
    echo 'La valeur "Poires" n\'est pas présente dans le tableau';
endif;

echo '<br />';

if(array_search('Reblochon', $maListeDeCourses)!==false) :
    echo 'La valeur "Reblochon" est présente dans le tableau à la clé : ' . array_search('Poires', $maListeDeCourses);
else :
    echo 'La valeur "Reblochon" n\'est pas présente dans le tableau';
endif;

echo '<br><br>';

$ficheIdentite = array(
    'nom'           => 'TIVELET',
    'prenom'        => 'Damien',
    'anneeNaissance'=> 1982,
    'role'          => 'Formateur',
    'entreprise'    => 'Objectif 3W'
);

if(array_search('1872', $ficheIdentite)!==false) :
    echo 'La valeur "1872" est présente dans le tableau à la clé : ' . array_search('1872', $ficheIdentite);
else :
    echo 'La valeur "1872" n\'est pas présente dans le tableau';
endif;

echo '<br />';
if(array_search('Montpellier', $ficheIdentite)!==false) :
    echo 'La valeur "Montpellier" est présente dans le tableau à la clé : ' . array_search('Montpellier', $ficheIdentite);
else :
    echo 'La valeur "Montpellier" n\'est pas présente dans le tableau';
endif;


echo '<br><br>';


foreach ($ficheIdentite as $data) {
	// array_search($data, $ficheIdentite);
	echo $data . '<br>';
}



echo '<br><br>';


$tableauDimensions = array(
	'elev1'=>array(
		'nom'           => 'TIVELET',
        'prenom'        => 'Damien',
        'anneeNaissance'=> 1982,
        'role'          => 'Formateur',
        'entreprise'    => 'Objectif 3W'
    ),
    'elev2'=>array(
        'nom'           => 'MCFLY',
        'prenom'        => 'Marty',
        'anneeNaissance'=> 1955,
        'role'          => 'Voyageur du temps et père de lui-même',
        'entreprise'    => 'DOC INC.'
    ),
    'elev3'=>array(
        'nom'           => 'BROWN',
        'prenom'        => 'Emmett',
        'anneeNaissance'=> 1914,
        'role'          => 'Savant excentrique',
        'entreprise'    => 'DeLorean'
    )
);


print_r($tableauDimensions);

echo'<br />';
echo'<br />Array(';

foreach($tableauDimensions as $key=>$dimension) : // Pour chaque élément de $tableauDimensions crée la variable $dimensions

    echo'<br />    [' . $key . '] => Array(';

    foreach($dimension as $cle=>$element) : // Pour chaque élément de $dimensions crée la variable $element

        echo '<br />        [' . $cle . '] => ' . $element . ' ';

    endforeach;
    echo '<br />    )';
endforeach;
echo '<br />)';

?>
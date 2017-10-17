<?php
echo 'OK';
// print_r($_POST);
	
	// if (empty($_POST['nom']) || !preg_match('#[^0-9]{2,}#', $_POST['nom'])) $_GET['erreur'][0] = 'Entrez un nom valide !';
	// else $_GET['erreur'][0] = '';
	

	// if (empty($_POST['mdp1']) || !preg_match('#[a-zA-Z0-9][^/\\*<>]{8,15}#', $_POST['mdp1'])) $_GET['erreur'][1] = 'Entrez un mot de passe valide !';
	// else $_GET['erreur'][1] = '';
	

	// if ($_POST['mdp1'] != $_POST['mdp2']) $_GET['erreur'][2] = 'Les mots de passe ne sont pas identiques';
	// else $_GET['erreur'][2] = '';
	








	// if (empty($_POST['nom']) || is_numeric($_POST['nom'])) $_GET['erreur'][0] = 'Entrez un nom valide !';
	
	// else $_GET['erreur'][0] = '';
	

	// if ( empty($_POST['mdp1']) || strlen($_POST['mdp1']) < 8 || strlen($_POST['mdp1']) > 15 ) $_GET['erreur'][1] = 'Min 8 caractères et max 15 caractères !';

	// else $_GET['erreur'][1] = '';





	// $exclus = ['/','\\','*','<','>'];
	// $exclus = '/';

	// for ($i=0; $i < count($exclus); $i++) { 
	// 	$pos = strpos($_POST['mdp1'], $exclus[$i]);
	// }

	
	// 	$pos = strpos($_POST['mdp1'], $exclus);
	

	// if ($pos !== false) {
	// 	$_GET['erreur'][3] = 'les caractères /, \\, *, <, >, ne sont pas autorisés.';
	// }

	// else{
	// 	$_GET['erreur'][3] = '';
	// }

	// echo $pos;

	





	// if ($_POST['mdp1'] != $_POST['mdp2']) {
	// 	$_GET['erreur'][2] = 'Les mots de passe ne sont pas identiques';
	// }

	// else{
	// 	$_GET['erreur'][2] = '';
	// }


	




	


// $recup='';

// foreach ($_POST as $key => $data) {
// 	$recup=$recup.$key."=".$data.'&';
// }

// $recup2='';

// foreach ($_GET['erreur'] as $key => $data) {
// 	$recup2=$recup2.$key."=".$data.'&';
// }



// print_r($_GET['erreur']);



// if ($_GET['erreur'][0] != '' || $_GET['erreur'][1] != '' || $_GET['erreur'][2] != '') {
// 	header('location:form2.php?'.$recup.''.$recup2.'');
// }

// else{
// 	echo 'Bonjour '.$_POST['nom'].' ! <br>Form OK.';
// }



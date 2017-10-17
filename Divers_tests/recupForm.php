<?php

if (empty($_POST['Nom']) || !preg_match('#^[a-zA-Z][^0-9]{2,}#i', $_POST['Nom'])) { $_GET['erreur2'] = 'Entrez un nom valide'; }

else{ $_GET['erreur2'] = ''; }

if (empty($_POST['Prenom']) || !preg_match('#[a-z]{2,}#i', $_POST['Prenom'])) { $_GET['erreur3'] = 'Entrez un nom valide'; }

else{ $_GET['erreur3'] = ''; }

if (empty($_POST['nomRue']) || !preg_match('#[^0-9]{2,}#', $_POST['nomRue'])) { $_GET['erreur4'] = 'Entrez un nom valide'; }

else{ $_GET['erreur4'] = ''; }

if (empty($_POST['codePostal']) || !preg_match('#[0-9]{5}#', $_POST['codePostal'])) { $_GET['erreur5'] = 'Non valide'; }

else{ $_GET['erreur5'] = ''; }

if (empty($_POST['ville']) || !preg_match('#[^0-9]{2,}#', $_POST['ville'])) { $_GET['erreur6'] = 'Entrez un nom valide'; }

else{ $_GET['erreur6'] = ''; }

if (empty($_POST['email']) || !preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['email'])) { $_GET['erreur7'] = 'Entrez un mail valide'; }

else{ $_GET['erreur7'] = ''; }

if (!preg_match('#^0[1-5]([.\s-]?[0-9]{2}){4}#', $_POST['tel'])){ $_GET['erreur8'] = 'Entrez un tel valide'; }

else{ $_GET['erreur8'] = ''; }

if (empty($_POST['tel2'])  || !preg_match('#^0[67]([.\s-]?[0-9]{2}){4}#', $_POST['tel2'])){ $_GET['erreur8'] = 'Entrez un tel valide'; }

else{ $_GET['erreur8'] = ''; }







$recup='';

foreach ($_POST as $key => $data) {
	$recup=$recup.$key."=".$data.'&';
}

$recup2='';

foreach ($_GET as $key => $data) {
	$recup2=$recup2.$key."=".$data.'&';
}


header('location:form.php?'.$recup.''.$recup2.'');






	


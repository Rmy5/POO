<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<style type="text/css">
			form{
				width: 220px;
				margin: auto;
			}
			label{
				display: inline-block;
			}
			input{
				margin: 10px 0 10px 5px; 
			}
			#nom{
				position: absolute;
				top: 20px;
				right: 440px;
				font-weight: bold;
				color: red;
			}
			#mdp1{
				position: absolute;
				top: 60px;
				right: 330px;
				font-weight: bold;
				color: red;
			}

			#mdp2{
				position: absolute;
				top: 100px;
				right: 285px;
				font-weight: bold;
				color: red;
			}

		</style>
	</head>
	<body>
		<?php




	// TRAITEMENT
	//****************************************************************
	// $exclus = array('/','\\','*','<','>');
	// $erreur='';

	// if (isset($_POST['nom']) && is_numeric($_POST['nom'])) {
	// 	echo  '<br>Entrez un nom valide !';
	// }
	// else{	
	// 	if (isset($_POST['mdp1']) && strlen($_POST['mdp1']) < 8 || strlen($_POST['mdp1']) > 15 ){ 

	// 			echo '<br>Min 8 caractères et max 15 caractères !';
	// 		}
	// 	}

	// 	else{		
	// 		for ($i=0; $i < count($exclus); $i++) { 

	// 			if(isset($_POST['mdp1']) && strpos($_POST['mdp1'],$exclus[$i])===TRUE)	$erreur='<br>caractères interdits !';									

	// 				if($erreur==''){

	// 					if ($_POST['mdp1'] === $_POST['mdp2']){

	// 						echo 'OK';
	// 						// header('location:OK.php');
	// 					}

	// 					else {echo "<br>confirm PB !";}
	// 				}
	// 			else echo $erreur;
	// 		}
	// 	}

	// }



	if (isset($_POST['nom']) && preg_match('#[0-9]{2,}#', $_POST['nom'])) $erreur[0] = 'Entrez un nom valide !';
	
	if (isset($_POST['mdp1']) && !preg_match('#^[a-zA-Z0-9][^/\\*<>]{8,15}#', $_POST['mdp1'])) $erreur[1] = 'Entrez un mot de passe valide !';
	
	if (isset($_POST['mdp1']) && $_POST['mdp1'] != $_POST['mdp2']) $erreur[2] = 'Les mots de passe ne sont pas identiques';

	if (count($_POST) > 0 && count($erreur) < 1) header("location: OK.php?nom=".$_POST['nom']."&mdp1=".$_POST['mdp1']."");


	



		?>




		<form action="" method="POST">
			<label>Nom</label> <input type="text" name="nom"> <?php if (isset($erreur[0])) echo $erreur[0];?>
			<label>Mdp</label><input type="password" maxlength="15" name="mdp1"> <?php if (isset($erreur[1])) echo $erreur[1];?>
			<label>Mdp</label><input type="password" maxlength="15" name="mdp2"> <?php if (isset($erreur[2])) echo $erreur[2];?>
			<input type="submit">
		</form>
	</body>
</html>
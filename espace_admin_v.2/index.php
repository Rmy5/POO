<?php
	//test de l'existence de la combinaison pseudo/mot de passe dans la table
	if (isset($_POST['login']) && preg_match('#[a-z0-9._-]{3,15}#i', $_POST['login']))
	{
		//Recherche de l'existence du pseudo
		try{
			$bdd = new PDO('mysql:host=localhost; dbname=admin_exercice; charset=utf8', 'root', '');
		}
		catch(exception $e){
			die('Erreur '.$e->getMessage());
		}

		$req = $bdd->prepare('SELECT u.id, u.pseudo, u.mdp, r.lib 
							  FROM utilisateur u
							  INNER JOIN role r
							  ON u.id_role = r.id
							  WHERE pseudo = ?');

		$req->execute(array($_POST['login']));

		$resultat = $req->fetch();

		$req->closeCursor();

		//Si le compte existe on vérifie le mot de passe
		if ($resultat) 
		{
			if (isset($_POST['pwd']) && preg_match('#[a-z0-9._-]{3,20}#', $_POST['pwd']))
			{
				if (password_verify($_POST['pwd'], $resultat['mdp'])) 
				{
					//Si le mot de passe est valide on ouvre une session
					if (!isset($_SESSION)) 
					{
						session_start();
						$_SESSION['id'] = $resultat['id'];
						$_SESSION['pseudo'] = $resultat['pseudo'];
						$_SESSION['classe'] = $resultat['lib']; 

						header('location: admin.php');
					}
				}

				// Affichage des messages d'erreur en placeholder	
				else {
					$placeholder['login'] = 'Pseudo';
					$placeholder['pwd'] = 'Mot de passe incorrect';
				}
			}
			elseif ($_POST['pwd'] == '') {
				$placeholder['login'] = 'login';
				$placeholder['pwd'] = 'Vous devez entrer un mot de passe';
			}
		}
		else {
			$placeholder['login'] = 'Aucun compte ne correspond à ce login';
			$placeholder['pwd'] = 'Mot de passe';
		}	
	}
	elseif (isset($_POST['login']) && !preg_match('#[a-z0-9._-]{3,15}#i', $_POST['login'])){
		$placeholder['login'] = 'Vous devez entrer un login';
		$placeholder['pwd'] = 'Mot de passe';
	}
	//Affichage des placeholder par défaut
	else {
		$placeholder['login'] = 'login';
		$placeholder['pwd'] = 'Mot de passe';
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Mon espace membres</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<div id="wrap">
			<div class="connexion">
				<h1>Se Connecter</h1>
				<form method="POST" action="">
					<input type="text" name="login" placeholder="<?php echo $placeholder['login'];?>" id="pseudo" pattern=""><br>
					<input type="password" name="pwd" placeholder="<?php echo $placeholder['pwd'];?>" id="mot_de_passe"><br>
					<input type="submit" value="connexion" id="login"><br>
				</form>
			</div>
		</div>
	</body>
</html>

<?php 
	if (isset($_SESSION)) {
		var_dump($_SESSION);
	}
?>


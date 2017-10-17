<?php
session_start();

if (isset($_GET['logout']) && $_GET['logout'] == 1) {
	if (isset($_SESSION)) {
		session_destroy();
		header('location: index.php');
	}
}
if (isset($_POST['addSubmit'])) {
							
	if (isset($_POST['login']) && preg_match('#[a-z0-9._-]{3,15}#i', $_POST['login'])) {
			
			if (isset($_POST['pwd']) && preg_match('#[a-z0-9._-]{3,15}#i', $_POST['pwd'])) {

				if (isset($_POST['prenom']) && preg_match('#[a-z0-9._-]{3,15}#i', $_POST['prenom'])) {

					if (isset($_POST['nom']) && preg_match('#[a-z0-9._-]{3,15}#i', $_POST['nom'])) {
				
						try{
							$bdd = new PDO('mysql:host=localhost; dbname=admin_exercice; charset=utf8', 'root', '');
							$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						}
						catch(exception $e){
							die('Erreur '.$e->getMessage());
						}

						$req = $bdd->prepare('SELECT id, pseudo, mdp FROM utilisateur WHERE pseudo = ?');
						$req->execute(array($_POST['login']));
						$resultat = $req->fetch();
						$req->closeCursor();

						if (!$resultat) {

							$req = $bdd->prepare('INSERT INTO utilisateur(pseudo, mdp, nom, prenom, id_role) VALUES (?,?,?,?,?)');

							$login = strip_tags($_POST['login']);
							$pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
							$lastname = strip_tags($_POST['nom']);
							$firstname = strip_tags($_POST['prenom']);
							$id_role = $_POST['class'];

							$req->execute(array($login, $pwd, $lastname, $firstname, $id_role));
							$req->closeCursor();

						}
						elseif($resultat){
							$placeholder['login'] = 'Login existant';
						}
					}
					elseif (isset($_POST['nom']) && !preg_match('#[a-z0-9._-]{3,15}#i', $_POST['nom'])){

						$placeholder['nom'] = '3 caractères mini';
					}
				}
				elseif (isset($_POST['prenom']) && !preg_match('#[a-z0-9._-]{3,15}#i', $_POST['prenom'])){

					$placeholder['prenom'] = '3 caractères mini';
				}
			}
			elseif (isset($_POST['pwd']) && !preg_match('#[a-z0-9._-]{3,15}#i', $_POST['pwd'])){

				$placeholder['pwd'] = '3 caractères mini';
			}
	}
	elseif (isset($_POST['login']) && !preg_match('#[a-z0-9._-]{3,15}#i', $_POST['login'])){

		$placeholder['login'] = '3 caractères mini';
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mon espace membres</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style_admin.css">
	</head>

	<body>
		<div id="bloc_page">
			<h1>Espace Admin</h1>
			<div id="top">
				Bienvenue sur l'espace admin.
				<div id="nav">
					<ul>
						<li><a href="admin.php">Acceuil</a></li>
						<li><a href="?list=1">Liste des utilisateurs</a></li>
						<li><a href="?add=1">Ajouter un utilisateur</a></li>
						<li id="lgt"><a href="?logout=1">Deconnexion</a></li>
					</ul>
					</div id="lr">
						<span id="identifié">Vous êtes identifié(e) en tant que <a href="#" id="pseudo"><?php echo $_SESSION['pseudo'];?></a> (<?php echo $_SESSION['classe'];?>).</span>
					</div>
					<div id="displayNews">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum architecto doloremque ipsum nihil quidem mollitia eligendi, unde dolores accusantium minus laborum nostrum, error quae, quas omnis officiis ullam. Maiores, ratione!<br><br>

						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, sed, nulla consequatur tempora ut excepturi omnis minus laborum eos deleniti reprehenderit error in alias. Quo cumque assumenda iste et ut!
					</div>

					<?php 
						if (isset($_GET['add']) && $_GET['add'] == 1) { 
							echo '<style>#displayNews{display:none;}</style>';?>
								<style type="text/css">#news{display:none;}</style>
								<div id="addForm">
									<h4>Ajouter un utilisateur</h4>
									<form action="" method="POST">
										<table>
											<tr><td>Pseudo</td><td><input type="text" name="login" placeholder="<?php if (isset($placeholder['login'])) echo $placeholder['login'];?>"></td></tr>
											<tr><td>Mot de passe</td><td><input type="text" name="pwd" placeholder="<?php if (isset($placeholder['pwd'])) echo $placeholder['pwd'];?>"></td></tr>
											<tr><td>Prénom</td><td><input type="text" name="prenom" placeholder="<?php if (isset($placeholder['prenom'])) echo $placeholder['prenom'];?>"></td></tr>
											<tr><td>Nom</td><td><input type="text" name="nom" placeholder="<?php if (isset($placeholder['nom'])) echo $placeholder['nom'];?>"></td></tr>
											<tr><td>Classe</td><td>
												<select name="class">
													<option value="1">Invité</option>
													<option value="2">Admin</option>
													<option value="3">SuperAdmin</option>
												</select></td></tr>
										</table>
										<input type="submit" name="addSubmit">
									</form>
								</div>
					<?php }

						if (isset($_GET['list']) && $_GET['list'] == 1) { 
							echo '<style>#displayNews{display:none;}</style>';
							try{
								$bdd = new PDO('mysql:host=localhost; dbname=admin_exercice; charset=utf8', 'root', '');
								$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							}
							catch(exception $e){
								die('Erreur '.$e->getMessage());
							}

							$req = $bdd->query('SELECT u.id, u.pseudo, u.nom, u.prenom, r.lib
												FROM utilisateur u
												LEFT JOIN role r
												ON u.id_role = r.id');
							?>
							<style type="text/css">#news{display:none;}</style>
							<div id="displayList"><span id="ttl">Utilisateurs :</span>
								<table>
									<tr>
										<td>id</td><td>Pseudo</td><td>Nom</td><td>Prénom</td><td>Classe</td></tr>
							<?php
							while ($r = $req->fetch(PDO::FETCH_ASSOC)) {
								echo'<tr><td>'.$r['id'].'</td><td>'.$r['pseudo'].'</td><td>'.$r['nom'].'</td><td>'.$r['prenom'].'</td><td>'.$r['lib'].'</td><td><a href="?list=1&modif=1&id='.$r['id'].'">modifier</a></td><td><a href="?list=1&del=1&id'.$r['id'].'">supprimer</a></td></tr>';
							}
							?>
							</table>
								</div>
							<?php }

							if (isset($_GET['modif']) && $_GET['modif'] == 1) { 
								
								?>
								<div id="addForm">
									<h4>Modifier un utilisateur</h4>
									<form action="" method="POST">
										<table>
											<tr><td>Pseudo</td><td><input type="text" name="login" placeholder="<?php if (isset($placeholder['login'])) echo $placeholder['login'];?>"></td></tr>
											<tr><td>Mot de passe</td><td><input type="text" name="pwd" placeholder="<?php if (isset($placeholder['pwd'])) echo $placeholder['pwd'];?>"></td></tr>
											<tr><td>Prénom</td><td><input type="text" name="prenom" placeholder="<?php if (isset($placeholder['prenom'])) echo $placeholder['prenom'];?>"></td></tr>
											<tr><td>Nom</td><td><input type="text" name="nom" placeholder="<?php if (isset($placeholder['nom'])) echo $placeholder['nom'];?>"></td></tr>
											<tr><td>Classe</td><td>
												<select name="class">
													<option value="1">Invité</option>
													<option value="2">Admin</option>
													<option value="3">SuperAdmin</option>
												</select></td></tr>
										</table>
										<input type="submit" name="modifSubmit">
									</form>
								</div>
							<?php }

							if (isset($_POST['modifSubmit'])) {
								# code...
							}
					?>
				</div>
			</div>
		</div>
	</body>
</html>
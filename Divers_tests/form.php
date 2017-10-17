<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<style type="text/css">
			form{
				width: 560px;
				margin: 50px auto;
				border: 2px solid black;
				padding: 40px 0px 50px 40px;
				font-family: arial;
				font-style: italic;
				font-weight: bold;
				font-size: 15px;
				background-color: rgb(239,239,239);
			}

			.Block{
				display: block;
			}
			h1{
				margin: 0 0 0 10px;
			}
			#sep{
				height: 1px;
				width: 400px;
				border-bottom: 1px solid rgba(0,0,0,.2);
				margin-left: 30px;
				margin-top: 20px;
			}
			.Mr{
				margin-top: 40px;
			}
			.Mr1{
				margin-top: 20px;
				margin-left: 5px;
			}
			.civ{
				margin-right: 20px;
			}

			.topMrg{
				margin-top: 30px;
				margin-left: 5px;
			}

			.topField{
				margin-top: 6px;
			}
			.width175{
				width: 175px;
			}
			.num{
				width: 70px;
			}
			.inL{
				display: inline-block;
			}
			.rMrg{
				margin-right: 150px;
			}
			.rMrg2{
				margin-right: 400px;
			}
			.Spc{
				margin-right: 25px;
			}
			.mrg10{
				margin-right: 10px;
			}
			input{
				padding: 5px 0 5px 10px;
				font-style: italic;
  				border: solid 1px lightgrey;
  				transition: box-shadow 0.3s, border 0.3s;
			}
			input:focus{
				border: solid 1px #707070;
				box-shadow: 0 0 3px 1px #969696;
			}
			select{
				font-style: italic;
			}
			span{
				position: relative;
				bottom: 10px;
				margin: 0 17px 0 15px;
				font-size: 12px;
			}
			.bouton{
				width: 175px;
				cursor:pointer;
				background-color: #838583;
				border: 1px solid rgba(0,0,0,.3);
				font-weight: bold;
				color: white;
			}
			.bouton:hover{
				background-color: #9A9B9A;
 				transition: .2s;
			}
			#affichage{
				width: 560px;
				margin: auto;
				font-family: arial;
				font-weight: bold;
				font-style: italic;
				border: 2px solid black;
				overflow: hidden;
				padding: 0 0 40px 40px;
				line-height: 22px;
			}
			h5{
				font-size: 15px;
				font-weight: bold;
				font-style: italic;
				text-transform: uppercase;
			}

		</style>
	</head>

	<body>


	

	<?php
		function check($tab, $civ){
			if (isset($_GET['radio']) && $_GET['radio'] == $civ) {
					echo 'checked="checked"';}
		}

		function value($clef,$clef2){
			if(count($_GET) > 0){
				if (!empty($_GET[$clef])) {
					echo 'value="'.$_GET[$clef].'"'; 
					echo 'style="box-shadow: 0 0 3px 1px #e90000;"';
				}
				if (!empty($_GET[$clef2])){
					echo 'value="'.$_GET[$clef2].'"';
				}
			}
		}

		function selected($clef, $case){
			if(count($_GET) > 0){
				if ($_GET[$clef] == $case) {
					echo 'selected="selected"';
				}
			} 
		}

		function selectedLoop($clef){
			for($i=1;$i<=31;$i++){
				if ($_GET[$clef] == $i) {
					$selected =  'selected="selected"';}
				else {$selected = '';}
					echo '<option '.$selected.'>'.$i.'</option>';}
		}

		function selectedLoop2($clef){
			$mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
			foreach ($mois as $key => $leMois) {
				if (isset($_GET[$clef]) && $_GET[$clef] == $leMois) {
					$selected =  'selected="selected"';}
				else{$selected = '';}
				echo '<option '.$selected.'>'.$leMois.'</option>';}
		}


		function selectedLoop3($clef){
			for($i=2017;$i>1900;$i--){
				if ($_GET[$clef] == $i) {
					$selected =  'selected="selected"';}
				else {$selected = '';}
					echo '<option '.$selected.'>'.$i.'</option>';}
		}
	?>
	
		<form action="recupForm.php" method="POST">
				<h1>Vos informations Personnelles</h1>
				<div id="sep"></div>
				<input class="Mr" type="radio" name="radio" value="Mr" <?php check($_GET,'Mr'); ?>>
				<label class="civ">Mr</label>
				<input type="radio" name="radio" value="Mme" <?php check($_GET,'Mme') ?>>
				<label class="rMrg2">Mme</label>
			
				<div class="inL Spc">
					<label class="Mr1 Block">Nom</label>
					<input class="topField width175 " type="text" name="Nom" placeholder="Nom" <?php value('erreur2', 'Nom'); ?>>
				</div>

				<div class="inL">
					<label class="Mr1 Block">Prénom</label>
					<input class="topField width175 "  type="text" name="Prenom" placeholder="Prénom" <?php value('erreur3', 'Prenom'); ?>>
				</div>

		
				<label class="topMrg Block">Date de naissance</label>

				<select class="topField mrg10" name="jour"><?php selectedLoop('jour');?></select>

				<select name="mois" class="mrg10">

					<?php selectedLoop2('mois');
					// $mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
					// 	foreach ($mois as $key => $leMois) {
					// 		if (isset($_GET['mois']) && $_GET['mois'] == $leMois) {
					// 		$selected2 =  'selected="selected"';}
					// 	else{$selected2 = '';}
					// 		echo '<option '.$selected2.'>'.$leMois.'</option>';}
					?>

				</select>
				<select name="annee"><?php selectedLoop3('annee');?></select>
			
			
				<label class="topMrg Block">Adresse</label>
				<input class="topField num mrg10" type="number" name="numero" placeholder="Numéro" value="<?php if (isset($_GET['numero'])) {
						echo $_GET['numero'];}?>">
				<select name="voie" class="mrg10">
					<option value="Rue" <?php selected('voie', 'Rue'); ?>>Rue</option>
					<option value="Impasse" <?php selected('voie', 'Impasse'); ?>>Impasse</option>
					<option value="Voie" <?php selected('voie', 'Voie'); ?>>Voie</option>
				</select>
				<input class="width175 rMrg" type="text" name="nomRue" placeholder="ex : de la Gare" <?php value('erreur4', 'nomRue');?>>

				<div class="inL width175">
					<label class="topMrg Block">Code postal</label>
					<input class="topField" type="number" name="codePostal" placeholder="ex : 34000" <?php value('erreur5', 'codePostal'); ?>>
				</div>

				<div class="inL">
					<label class="topMrg Block">Ville</label>
					<input class="topField" type="text" name="ville" placeholder="ex : Montpellier" <?php value('erreur6', 'ville'); ?>>
				</div>
			

			
				<label class="topMrg Block">Adresse mail</label>
				<input class="topField rMrg2 width175" type="text" name="email" placeholder="ex : mon.mail@wam.com" <?php value('erreur7', 'email'); ?>>

				<div class="inL style="border: 1px solid black; width: 250px;" >
					<label class="topMrg Block">Tel fixe</label>
					<input class="topField" type="tel" name="tel" placeholder="ex : 04 25 25 25 25" <?php value('erreur8', 'tel'); ?>>
				</div>

				<span>Ou</span>

				<div class="inL">
					<label class="topMrg Block">Tel portable</label>
					<input class="topField" type="tel" name="tel2" placeholder="ex : 06 25 25 25 25" <?php value('erreur8', 'tel2'); ?>>
				</div>
			

			<label class="topMrg Block">Vous êtes venu par ?</label>
			<select class="topField" name="origine">
				<option value="ami" <?php selected('origine', 'ami');?> >Ami</option>
				<option value="Google" <?php selected('origine', 'Google');?> >Google</option>
				<option value="lien sponsor" <?php selected('origine', 'lien sponsor');?>>lien sponsor</option>
				<option value="autre" <?php selected('origine', 'autre');?> >autre</option>
			</select>


			<input class="topMrg Block bouton" type="submit" value="OK">

		</form>
		
		
		<?php
		if (count($_GET) > 0) {
			if (empty($_GET['erreur2'])) {
				if (empty($_GET['erreur3'])) {
					if (empty($_GET['erreur4'])) {
						if (empty($_GET['erreur5'])) {
							if (empty($_GET['erreur6'])) {
								if (empty($_GET['erreur7'])) {
									if (empty($_GET['erreur8'])) {
										echo '<div id="affichage"><h5>Les données on bien été envoyées !</h5>';
										echo 'Nom : '.$_GET['radio'].' '.$_GET['Nom'].' '.$_GET['Prenom'].'<br>';
										echo 'Date de naissance : le '.$_GET['jour'].' '.$_GET['mois'].' '.$_GET['annee'].'<br>';
										echo 'Adresse :'.$_GET['numero'].' '.$_GET['voie'].' '.$_GET['nomRue'].' '.$_GET['codePostal'].' '.$_GET['ville'].'<br>';
										echo 'Adresse mail : '.$_GET['email'].'<br>';
										echo 'Tel fixe : '.$_GET['tel'].' / Tel mobile : '.$_GET['tel2'].'<br>';
										echo 'Vous nous avez trouvé par : '.$_GET['origine'];
										echo '</div>';
									}
								}
							}
						}
					}
				}
			}
		}

		?>
		


	</body>
</html>



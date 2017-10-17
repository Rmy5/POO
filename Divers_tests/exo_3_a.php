<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<style type="text/css">
			body{
				text-align: center;
			}

			div{
				display: inline-block;
				border: solid 1px black;
				padding: 15px 20px 10px 20px;
				margin: 20px;
				background-color: lightgreen;
			}
			h5{
				font-family: arial;
				border-bottom: 1px solid rgba(0,0,0,.4);
				padding-bottom: 20px;
			}
		</style>
	</head>
	<body>
		<?php
			$_arr_articles = array(
			    array( 'titre'=>'Titre 1', 'texte'=>'Texte du produit 1', 'image'=>'assets/images/image1.jpg' ), 
			    array( 'titre'=>'Titre 2', 'texte'=>'Texte du produit 2', 'image'=>'assets/images/image2.jpg' ), 
			    array( 'titre'=>'Titre 3', 'texte'=>'Texte du produit 3', 'image'=>'assets/images/image3.jpg' ), 
			    array( 'titre'=>'Titre 4', 'texte'=>'Texte du produit 4', 'image'=>'assets/images/image4.jpg' ), 
			    array( 'titre'=>'Titre 5', 'texte'=>'Texte du produit 5', 'image'=>'assets/images/image5.jpg' ) 
			);

			shuffle($_arr_articles);


			$tabRand=array();
			

			// print_r($tabRand);
			// shuffle($tabRand);
			// echo "<br>";
			// print_r($tabRand);

			// print_r($_arr_articles);

			
			for($i=0;$i<5;$i++){
				shuffle($_arr_articles[$i]);
			}

			$tabRand = $_arr_articles;

			

		

				
        for($i=0;$i<3;$i++) {
        	?>
        	<div>
				<div style="width: 80px; height: 95px; background: url(<?php echo $tabRand[$i][0];?>) no-repeat;"></div>
				<h5><?php echo $tabRand[$i][1];?></h5>
				<p><?php echo $tabRand[$i][2];?></p>
			</div>
			<?php
        }
        ?>
	</body>
</html>
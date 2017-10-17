<?php
ob_start(); // On initialise le tampon de sortie.
echo '<p>Lorem ipsum dolor sit amet</p>'; // On ajoute une balise HTML et du texte au tampon de sortie.
$tampon = ob_get_contents(); // On stocke le résultat des instructions précéentes dans une variable.
ob_end_clean(); // On ferme le tampon de sortie et le vide.
file_put_contents( 'cache/tampon.html', $tampon ); // On crée un fichier "tampon.html" dans un sous-dossier pour y écrire le contenu de la variable. Si le fichier existe déjà, la fonction le remplacera.

readfile( 'cache/tampon.html' ); // On lit le fichier "tampon.html" et affiche son contenu.
?>
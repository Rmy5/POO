<?php
	class Board{
		function __construct(){

			echo '<table>';

				for ($i=0; $i < 11; $i++) echo '<td>'.$i.'</td>';

				for ($a='a';$a<'k';$a++){ 

					echo '<tr><td>'.$a.'</td>';

					for ($i=1; $i <= 10; $i++) echo '<td id="'.$a.$i.'"><a href="?tir='.$a.$i.'"></a></td>';
				}

			echo '</table>';
		}
	}
?>
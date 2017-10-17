<?php

class Test{

	const HIT = 0;


	public function getConst(){

		return HIT;
	}
}


// class selectImage{

// 	private $_dir = 'images/pics';
// 	private $_imageList;
// 	private $_err;

// 	public function displayImages(int $p){
// 		$this->clicImage();
// 		$this->validImage($p);
// 		$this->startImage($p);

// 		$this->_imageList = scandir($this->_dir);
// 		unset($this->_imageList[0], $this->_imageList[1]);
// 		$this->_imageList = array_values($this->_imageList);

		
		
// 		if (!isset($_SESSION['S_F']['plyr'.$p])) {
// 			echo '<h5 class="name">'.$_SESSION['S_F']['nom'.$p].'</h5>';
// 			echo '<span class="msg2">';
// 			self::displayE($p);
// 			echo '</span><div class="pics" id="pic'.$p.'">'; 
// 			foreach ($this->_imageList  as $key => $image) {
// 				echo '<a href="?perso='.$p.'&id='.$key.'" class="pic" style="background-image: url(images/pics/'.$image.')" id="a'.$p.$key.'"></a>';	
// 			}
// 			echo '<form method="POST"><input type="submit" name="okBtn'.$p.'"" value="OK" id="okBtn'.$p.'"></form></div>';
// 		}	
// 	}

// 	public function clicImage(){

// 		if (isset($_GET['perso']) && $_GET['perso'] == 1) echo '<style>#a'.$_GET['perso'].$_GET['id'].'{box-shadow:inset 0px 0px 0px 5px yellow};</style>';
// 		elseif (isset($_GET['perso']) && $_GET['perso'] == 2) echo '<style>#a'.$_GET['perso'].$_GET['id'].'{box-shadow:inset 0px 0px 0px 6px red};</style>';	
// 	}

// 	public function validImage(int $p){

// 		if (isset($_POST['okBtn'.$p]) && isset($_GET['perso']) && $_GET['perso'] == $p ){
// 			$_SESSION['S_F']['plyr'.$p] = ($_GET['id']+1);
// 		}
// 		else{
// 			$this->_err = 'Choisissez un perso';
// 		}
// 	}

// 	public function startImage(int $p){

// 		if (isset($_SESSION['S_F']['plyr'.$p])) {
// 			echo '<div class="spWrap"><h5 class="name">'.$_SESSION['S_F']['nom'.$p].'</h5><div class="startPic" style="background-image: url(images/pics/'.$_SESSION['S_F']['plyr'.$p].'.png)"></div></div>';
// 			echo '<style>.name{display:inline-block;margin:auto;}<style>';
// 			var_dump($_SESSION['S_F']);
// 		}
// 	}

// 	private function displayE(int $p){
// 		if (isset($_POST['okBtn'.$p]) && !is_null($this->_err)) {
// 			echo $this->_err;
// 		}
// 	}
// }

















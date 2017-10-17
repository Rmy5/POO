<?php

	// $ch = curl_init();

	// curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts");
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	// $result = curl_exec($ch);
	// if (curl_errno($ch)) {
	//     echo 'Error:' . curl_error($ch);
	// }

	// // var_dump($result);


	// $source = $result;

	// $data = json_decode($source, true);

	// foreach ($data as $v) {
	// 	echo 'User ID : '.$v['userId'].'<br>';
	// 	echo 'ID : '.$v['id'].'<br>';
	// 	echo 'Title : '.$v['title'].'<br>';
	// 	echo 'Body : '.$v['body'].'<br><br>';
	// }
	 

	// curl_close ($ch);





	class curlLecture{
		private $ch;
		private $ch2;
		private $lien;
		private $result;
		private $jsonSource;
		private $jsonData;

		function __construct($lien){
			$this->lien = $lien;
			$this->ch = curl_init();
		}

		function setOpt(){
			curl_setopt($this->ch, CURLOPT_URL, $this->lien);
			curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($this->ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, 0);
			return $this;
		}

		function Result(){
			$this->result = curl_exec($this->ch);
			if (curl_errno($this->ch)) {
			    echo 'Error:' . curl_error($this->ch);
			}
			return $this;
		}

		function Affiche(){
			$this->jsonSource = $this->result;
			$this->jsonData = json_decode($this->jsonSource, true);

			foreach ($this->jsonData as $v) {
				echo 'User ID : '.$v['userId'].'<br>';
				echo 'ID : '.$v['id'].'<br>';
				echo 'Title : '.$v['title'].'<br>';
				echo 'Body : '.$v['body'].'<br><br>';
			}

		}

		function CLose(){
			curl_close ($this->ch);
			return $this;
		}

	}


	$curl = new curlLecture('https://jsonplaceholder.typicode.com/posts');
	$curl->setOpt()->Result()->Affiche()->Close();


?>
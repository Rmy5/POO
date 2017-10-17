<?php
	interface Cri{

		public function criDuFelin();

	}


	class Chat implements Cri{
		protected $type;

		function __construct($type){
			$this->type = $type;
		}

		public function criDuFelin(){
			echo 'miaou miaou';
		}


	}

	class Lion implements Cri{
		protected $type;

		function __construct($type){
			$this->type = $type;
		}

		public function criDuFelin(){
			echo 'waou waou';
		}
	}

$chat = new Chat('matou');
$chat->criDuFelin();

echo '<br>';

$lion = new Lion('roi lion');
$lion->criDuFelin();




?>
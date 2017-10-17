<?php
	abstract class Felin{

		abstract protected function criDuFelin();

	}


	class Chat extends Felin{
		protected $type;

		function __construct($type){
			$this->type = $type;
		}

		public function criDuFelin(){
			echo 'miaou miaou';
		}


	}

	class Lion extends Felin{
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
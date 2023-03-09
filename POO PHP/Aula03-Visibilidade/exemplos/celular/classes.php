
<?php 
	class Celular{
		public $modelo;
		public $polegadas;
		public $camera;
		public $modo;
		public $bateria;

		public function ligar(){
			if ($this->modo == true){
				echo 'ja esta ligado';
				echo "<br>";
			}
			else{
				$this->modo = true;
				echo 'foi ligado';
				echo "<br>";
			}

		}

		public function desligar(){
			if ($this->modo == false){
				echo "ja está desligado";
				echo "<br>";
			}
			else{
				$this->modo = false;
				echo "foi desligado";
				echo "<br>";
			
			}
		}

		public function bateria(){
			echo "a bateria está em ". $this->bateria."%<br>";
		}
	}


?>

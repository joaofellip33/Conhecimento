<!DOCTYPE html>
<html>
		<head>
		<title>Aula 02 POO</title>
	</head>
	<body>
		<?php  
			class Caneta { //classe
				public $modelo;
				public $cor;
				private $ponta;	
				protected $carga;	
				protected $tampada;

				public function rabiscar(){ //metodos
					if ($this->tampada == true){
						echo "<br> Nao rabiscando";		
					}
					else{
						echo "<br> rabiscando";		
					}
				}

				public function tampar(){
					$this->tampada = true; // referencia a uma variavel da propria classe
				}

				private function destampar(){
					$this->tampada = false; // referencia a uma variavel da propria classe
				}
			}	
		?>
	</body>
</html>
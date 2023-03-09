<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php 
			class Celular{
				var $modelo;
				var $polegadas;
				var $camera;
				var $modo;
				var $bateria;

				function ligar(){
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

				function desligar(){
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

				function bateria(){
					echo "a bateria está em ". $this->bateria."%<br>";
				}
			}


		?>
	</body>
</html>
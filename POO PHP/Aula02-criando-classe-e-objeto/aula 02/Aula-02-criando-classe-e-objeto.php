<!DOCTYPE html>
<html>
		<head>
		<title>Aula 02 POO</title>
	</head>
	<body>
		<?php  
			class Caneta { //classe
				var $modelo;
				var $cor;
				var $ponta;	
				var $carga;	
				var $tampada;

				function rabiscar(){ //metodos
					if ($this->tampada == true){
						echo "<br> Nao rabiscando";		
					}
					else{
						echo "<br> rabiscando";		
					}
				}

				function tampar(){
					$this->tampada = true; // referencia a uma variavel da propria classe
				}

				function destampar(){
					$this->tampada = false; // referencia a uma variavel da propria classe
				}
			}	
		?>
	</body>
</html>
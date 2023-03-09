
<?php
	class Moto{
		var $cilindradas;
		var $modelo;
		var $marca;
		var $km;
		var $ligada;
		var $km_l;

		function ligar(){
			$this->ligada=true;
			echo "ligada<br>";
		} 
		function desligar(){
			$this->ligada=false;
			echo "desligada<br>";
		}
	}
?>

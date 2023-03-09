<?php
	class Caneta {
		public $modelo;
		private $cor;
		private $ponta;
		private $tampada;

		//assim cria um metodo construtor __construct() ou so colocar o nome da classe Caneta()
		public function __construct ($m, $c, $p){
			$this->setModelo($m);
			$this->setCor($c);
			$this->setPonta($p);

			$this->tampar();

		}

		public function getModelo() {
			return $this->modelo;
		}

		public function setModelo($m) {
			$this->modelo = $m;
		}

		public function getCor(){
			return $this->cor;
		}

		public function setCor($c){
			$this->cor = $c;
		}			

		public function getPonta(){
			return $this->ponta;
		}

		public function setPonta($p){
			$this->ponta = $p;
		}

		public function getTampada (){
			return $this->tampada; 
		}

		public function setTampada ($t){
			$this->tampada = $t;
		} 


		public function tampar(){
			$this->setTampada(true);
		}


	}
?>
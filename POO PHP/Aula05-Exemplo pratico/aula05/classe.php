<?php
/**
 CLASSE BANCO
 */
class Banco{		
	private $numConta;
	private $tipo;
	private $dono;
	public $saldo;
	public $status;

	function __construct ($num, $tip, $don,$sald){
		$this->setNumConta($num);
		$this->setTipo($tip);
		$this->setDono($don);
		$this->setSaldo($sald);
		//$this->setStatus($statu);

	}

	function getNumConta (){
		return $this->numConta;
	}

	function setNumConta ($num){
		$this->numConta = $num;
	}


	function getTipo () {
		return $this->tipo;
	}

	function setTipo ($tip){
		$this->tipo = $tip;
	}


	function getDono (){
		return $this->dono;
	}

	function setDono ($don){
		$this->dono = $don;  
	}


	function getSaldo(){
		return $this->saldo;
	}

	function setSaldo($sald){
		$this->saldo = $sald;
	}


	function getStatus(){
		return $this->status;
	}	

	function setStatus($statu){
		$this->status = $statu;
	}

	function abrirConta(){
		$this->setStatus(true);
	}

	function fecharConta(){
		if($this->getSaldo() > 0 ){
			echo "não é possível fechar a conta saldo positivo <br>";
		}
		elseif ($this->getSaldo() < 0) {
			echo "não é possível fechar a conta saldo negativo <br>";
		}
		else{
			$this->setStatus(false);
			echo "Conta fechada <br>";
		}
	}
}


?>
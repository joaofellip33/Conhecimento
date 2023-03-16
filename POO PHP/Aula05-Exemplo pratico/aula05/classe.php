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

	public function getNumConta (){
		return $this->numConta;
	}

	public function setNumConta ($num){
		$this->numConta = $num;
	}


	public function getTipo () {
		return $this->tipo;
	}

	public function setTipo ($tip){
		$this->tipo = $tip;
	}


	public function getDono (){
		return $this->dono;
	}

	public function setDono ($don){
		$this->dono = $don;  
	}


	public function getSaldo(){
		return $this->saldo;
	}

	public function setSaldo($sald){
		$this->saldo = $sald;
	}


	public function getStatus(){
		return $this->status;
	}	

	public function setStatus($statu){
		$this->status = $statu;
	}

	public function abrirConta(){
		$this->setStatus(true);
	}

	public function fecharConta(){
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
	
	public function depositar ($depositar) {
		if ($this->getStatus() != true) {
			echo "essa conta nao esta aberta <br>";
		}
		else {
			//$depositar = $depositar + $this->getSaldo(); 
			$this->setSaldo($this->getSaldo() + $depositar);


		}
	}

	public function sacar ($sacar){
		if ($this->getStatus() != true ){
			echo "essa conta nao esta aberta <br>" ;
		}
		else{
			$sacar = $this->getSaldo() - $sacar;
			$this->setSaldo($sacar); 
		}
	
	}

	public function pagarMensal(){
		if($this->getTipo() == "cc" ){
			$pagar = $this->getSaldo() - 20;
			$this->setSaldo($pagar);
		}
		else{
			$pagar = $this->getSaldo() - 10;
		}
	}
}


?>
<?php
require_once 'src/operacoes.php';
/**
 * Classe de contaPoupanca
 *
 */
class ContaPoupanca extends Conta{
    use operacoes, consultaExtrato;
    public function validaSaque($valor){
    	if($valor>1000){
    		echo "-<b>Valor de saque para Conta Poupança excedeu o limite</b>- <br>";
    	}else if ($valor>0){
    		$this->sacar($valor);
        array_push($this->operacao, 0.80,'sacar');
    		$this->saldo-=0.80;
    	}

    }
  } 

?>
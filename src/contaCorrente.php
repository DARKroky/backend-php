<?php
require_once 'src/operacoes.php';
/**
 * Classe de contaCorrente
 *
 */

class ContaCorrente extends Conta{
    use operacoes, consultaExtrato;
     public function validaSaque($valor){
    	if($valor>600){
    		echo "-<b>Valor de saque para Conta Corrente excedeu o limite</b>-<br>";
    	}else if ($valor>0){
    		$this->sacar($valor);
    		array_push($this->operacao, 2.50,'saque');
    		$this->saldo-=2.50;
    	}

    }
  } 
  ?>
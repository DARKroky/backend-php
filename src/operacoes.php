<?php
require_once 'src/conta.php';
     
  trait operacoes {
    public function depositar($valor){
      $this->saldo += $valor;
      $this->Deposito = $valor;
      
    }
    public function sacar($valor){
      if($this->saldo >= $valor){
        $this->saldo -= $valor;
      }
    }
    public function transferir($valor,$destino){
      $this->Vtransferencia = $valor;
      if($this->saldo >= $valor){
        $destino->depositar($valor);
        $this->saldo -= $valor;
      }
    }
  }
    
  trait consultaExtrato{
    public function getSaldo(){
      echo "Saldo disponivel com taxas aplicadas: B$ $this->saldo<br>";
    }

    public function getTransferenciaC(){
      echo "Valor enviado para Poupança: B$ $this->Vtransferencia<br>";
    }

    public function getTransferenciaP(){
      echo "Valor enviado para Conta Corrente: B$ $this->Vtransferencia<br>";
    }
    
  } 
    

  ?>

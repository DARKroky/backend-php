<?php
class Conta {
  public $saldo = 0;
  public $operacao = [];
  public function getDescontos(){
    foreach ($this->operacao as $key => $value) {
      //echo $value;
    }
  }
} 
?>
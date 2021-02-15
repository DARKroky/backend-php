<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once 'src/operacoes.php';
require_once 'src/contaCorrente.php';
require_once 'src/contaPoupanca.php';

/**
 * Classe de Main
 *
 */

  $poupanca = new ContaPoupanca();
  $corrente = new ContaCorrente();
  
  //informe o valor de deposito para conta poupança
  $poupanca->depositar(1200);
  //informe o valor de deposito para conta corrente
  $corrente->depositar(1200);

   //informe o valor para transferir da conta corrente para conta poupança
  $corrente->transferir(0,$poupanca);
   //informe o valor para transferir da conta poupança para conta corrente
  $poupanca->transferir(0,$corrente);
  
  //informe o valor de saque para conta poupança
  $poupanca->validaSaque(0);
  //informe o valor de saque para conta corrente
  $corrente->validaSaque(0);
  

  echo "<br>-<b>Conta Poupança</b>-<br>";
  $poupanca->getTransferenciaP();
  $poupanca->getSaldo();
  echo "<br>-<b>Conta Corrente</b>-<br>";
  $corrente->getTransferenciaC();
  $corrente->getSaldo();
<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-00', 'Daniel Moraes');
$segundaConta = new Conta('456.789.123-00', 'João da Silva');

var_dump($primeiraConta);
var_dump($segundaConta);

echo Conta::getNumeroDeContas() . PHP_EOL;

unset($segundaConta);

echo Conta::getNumeroDeContas() . PHP_EOL;
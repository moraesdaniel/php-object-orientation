<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('05840590940', 'Daniel Moraes');
$primeiraConta->depositar(500);
var_dump($primeiraConta);
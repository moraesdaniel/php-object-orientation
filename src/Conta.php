<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function sacar(float $valor): void
    {
        if ($valor > $this->saldo) {
            echo 'Saldo insuficiente!';
            return;
        };

        $this->saldo -= $valor;
    }

    public function depositar(float $valor): void
    {
        if ($valor < 0) {
            echo 'O valor precisa ser positivo!';
            return;
        };
            
        $this->saldo += $valor;
    }

    public function transferir(float $valor, Conta $contaDestino): void
    {
        if ($valor > $this->saldo) {
            echo 'Saldo indisponível!';
            return;
        };
        
        $this->sacar($valor);
        $contaDestino->depositar($valor);
    }
}
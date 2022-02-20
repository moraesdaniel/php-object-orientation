<?php

class Cpf {
    private string $cpf;

    public function __construct($cpf) 
    {
        $this->validarCpf($cpf);
        $this->cpf = $cpf;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    private function validarCpf($cpf)
    {
        if (strlen($cpf) < 11) {
            echo "CPF deve ter no mínimo 11 caracteres!";
            exit;
        }
    }
}
<?php

class Pessoa
{
    // Propriedade pública: acessível de qualquer lugar, inclusive fora da classe
    public $nome = "Keylllian";

    // Propriedade protegida: acessível apenas dentro da classe e por classes herdeiras
    protected $idade = 18;

    // Propriedade privada: acessível somente dentro da própria classe
    private $senha = 12345678;

    // Método público que exibe as propriedades
    public function exibirDados()
    {
        // Dentro do método da classe, todas as propriedades (inclusive privadas) são acessíveis
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$pessoa = new Pessoa();

// Tentativa de acessar a propriedade privada fora da classe resultaria em erro:
// echo $pessoa->senha; // erro, pois "senha" é privado e não acessível fora da classe

// Chamada ao método público que exibe as propriedades dentro da classe, incluindo a privada
$pessoa->exibirDados();

?>
<?php

class Pessoa
{
    // Propriedade pública: acessível em qualquer lugar, inclusive fora da classe
    public $nome = "Keylllian";
    // Propriedade protegida: acessível apenas dentro da classe e em classes herdeiras
    protected $idade = 18;
    // Propriedade privada: acessível apenas dentro da própria classe
    private $senha = 12345678;

    public function exibirDados()
    {
        // Exibe o nome da classe que está executando o método
        echo get_class($this) . "<br>";

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";  // "senha" é privada, mas acessível dentro da classe "Pessoa"
    }
}

class Programador extends Pessoa
{
    // Método sobrescrito para exibir dados na classe "Programador"
    public function exibirDados()
    {
        // Exibe o nome da classe que está executando o método
        echo get_class($this) . "<br>";

        // Acessa as propriedades herdadas de "Pessoa"
        echo $this->nome . "<br>";    // Público, acessível
        echo $this->idade . "<br>";   // Protegido, acessível na classe filha

        // Erro ao tentar acessar $this->senha, pois é privado e acessível apenas na classe "Pessoa"
        echo $this->senha . "<br>";   // Gera um erro, pois "senha" é privado
    }
}

$pessoa = new Programador();
$pessoa->exibirDados();

?>
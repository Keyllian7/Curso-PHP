<?php

class Pessoa { // Classe Pessoa
    public $nome; // Atributo público da classe (pode ser acessado de fora da classe)

    public function falar(){ // Método da classe (ação que a classe pode realizar)
        return "O meu nome é ".$this->nome;
    }

}

$pessoa = new Pessoa(); // Instância da classe Pessoa (criação de um objeto da classe)
$pessoa->nome = "Keyllian"; // Atribuição de valor ao atributo $nome da instância criada
echo $pessoa->falar();

?>
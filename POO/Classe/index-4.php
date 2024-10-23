<?php

class Endereco {
    private $logradouro;
    private $numero;
    private $cidade;

    // Método mágico __construct -> Esse método é automaticamente chamado ao instanciar a classe.
    public function __construct($l, $n, $c) {
        // Atribuindo valores recebidos como parâmetros às propriedades privadas
        $this->logradouro = $l;
        $this->numero = $n;
        $this->cidade = $c;
    }

    // Método mágico __destruct -> É chamado automaticamente quando o objeto é destruído ou ao final do script.
    public function __destruct() {
        // Exibe uma mensagem de depuração ao destruir o objeto
        var_dump("Destruir");
    }

    // Método mágico __toString -> Esse método é invocado automaticamente quando tentamos imprimir o objeto como string.
    public function __toString(){
        return $this->logradouro . ", " . $this->numero . " - " . $this->cidade;
    }
}

// Criando uma nova instância da classe Endereco
$dados = new Endereco("Rua Franscisco Paulo", 745, "Baraúna");

var_dump($dados);

// unset($dados); // Opcional: destrói o objeto manualmente antes do final do script

echo $dados;

?>

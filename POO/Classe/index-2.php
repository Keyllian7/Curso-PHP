<?php

// Definição da classe Carro, que contém atributos e métodos.
class Carro{
    // Atributos privados para encapsulamento.
    private $modelo;
    private $motor;
    private $ano;

    // Método getter para o atributo 'modelo'.
    public function getModelo(){
        return $this->modelo;
    }

    // Método setter para o atributo 'modelo'.
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    // Método getter para o atributo 'motor', com definição de retorno como float.
    public function getMotor(): float{
        return $this->motor;
    }

    // Método setter para o atributo 'motor'.
    public function setMotor($motor){
        $this->motor = $motor;
    }

    // Método getter para o atributo 'ano', com definição de retorno como inteiro.
    public function getAno(): int{
        return $this->ano;
    }

    // Método setter para o atributo 'ano'.
    public function setAno($ano){
        $this->ano = $ano;
    }

    // Método exibir que retorna os atributos em forma de array.
    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno(),
        );
    }

}

// Criação de um novo objeto da classe Carro.
$gol = new Carro();

// Uso dos métodos setters para definir os valores dos atributos do objeto.
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

// Exibição dos valores dos atributos através do método exibir.
var_dump($gol->exibir());

?>

<?php

class Documento
{
    private $numero;

    // Método getter para obter o número do documento
    public function getNumero()
    {
        return $this->numero;
    }

    // Método setter para definir o número do documento
    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }
}

class CPF extends Documento
{
    // Método para validar o CPF (aqui sempre retorna true, mas poderia incluir a lógica de validação)
    public function validar(): bool
    {
        $numeroCPF = $this->getNumero();
        // Implementar lógica de validação para o CPF
        return true;
    }
}

$documento = new CPF();
$documento->setNumero("123.345.567-89");

var_dump($documento->validar());
echo "<br>";
echo $documento->getNumero();

?>
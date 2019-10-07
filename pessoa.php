<?php

class pessoa
{
    private $nome;
    private $nasc;
    public $peso;
    public $altura;
    private $testecpf;
    private $realCPF;

    public function validaCPF()
    {
        if (strlen($this->testecpf) == 11) {
            setCPF();
        } else {
            echo 'CPF inválido!!!';
        }
    }

    public function calculaIMC()
    {
        $imc = number_format($this->peso / ($this->altura * $this->altura), 2);

        if ($imc < 18.5) {
            echo "O seu IMC é:", $imc . PHP_EOL;
            echo "Você está abaixo do peso!" . PHP_EOL;
        } elseif (($imc > 18.5) && ($imc < 24.9)) {
            echo "O seu IMC é:", $imc . PHP_EOL;
            echo "Você está com o peso normal!" . PHP_EOL;
        } else if (($imc > 25) && ($imc < 29.9)) {
            echo " O seu IMC é:", $imc . PHP_EOL;
            echo "Você está com sobrepeso!" . PHP_EOL;
        } else if (($imc > 30) && ($imc < 34.9)) {
            echo "O seu IMC é:", $imc . PHP_EOL;
            echo "Você está com Obesidade grau 1!" . PHP_EOL;
        } else if (($imc > 35) && ($imc < 39.9)) {
            echo "O seu IMC é:", $imc . PHP_EOL;
            echo "Você está com Obesidade grau 2!" . PHP_EOL;
        } else if ($imc > 40) {
            echo "O seu IMC é:", $imc . PHP_EOL;
            echo "Você está com Obesidade grau 3!" . PHP_EOL;
        }
    }
    public function calculaIdade()
    {
        $data = $this->nasc;
        $agr = new DateTime($data);
        $idade =  $agr->diff(new DateTime((date('d-m-Y'))));
        echo $idade->format('%Y anos');
    }

    public function setCPF()
    {
        $this->realCPF = $this->testecpfcpf;
    }

    public function __construct($nome, $altura, $peso, $nasc, $testecpf)
    {
        $this->nome = $nome;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->nasc = $nasc;
        $this->testecpfpf = $testecpf;
    }
}

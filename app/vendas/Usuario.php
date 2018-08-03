<?php

namespace app\vendas;

class Usuario
{
    public $nome;
    public $idade;

    public function cadastrar($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function imprimir()
    {
        $r = 'Nome: '.$this->nome.'<br>';
        $r .= 'Idade: '.$this->idade.'<br>';

        return $r;
    }
}

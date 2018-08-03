<?php

namespace app\estoque;

class Produto
{
    public $id;
    public $descricao;
    public $quantidade;

    public function cadastrar($id, $descricao, $quantidade)
    {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;
    }

    public function imprimir()
    {
        $r = 'Produto id: '.$this->id.' | ';
        $r .= 'Descricao: '.$this->descricao.' <br> ';
        $r .= 'Quantidade: '.$this->quantidade.' <br> ';

        return $r;
    }
}

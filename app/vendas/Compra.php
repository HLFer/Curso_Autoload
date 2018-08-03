<?php

namespace app\vendas;

class Compra
{
    public $id;
    public $produtos;
    public $usuario;

    public function cadastrar(array $produtos, Usuario $usuario)
    {
        $this->id = rand(0, 1000);
        $this->produtos = $produtos;
        $this->usuario = $usuario;
    }

    public function imprimir()
    {
        $r = 'Compra id: '.$this->id.'<hr>';
        $r .= 'Produtos: '.'<br>';

        foreach ($this->produtos as $produto) {
            $r .= $produto->imprimir();
        }

        $r .= '<hr>';
        $r .= $this->usuario->imprimir();

        return $r;
    }
}

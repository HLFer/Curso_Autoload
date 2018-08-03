<?php

namespace app\estoque;

class Estoque
{
    private $total;

    public function __construct()
    {
        $this->total = rand(0, 5000);
    }

    public function getTotal()
    {
        return $this->total;
    }
}

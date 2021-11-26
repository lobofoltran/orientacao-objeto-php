<?php

class Produto
{
    public $nome;
    public $codigo;
    public $valor;
    public $qtdeEstoque;
    public function consultarEstoque() : int
    {
        echo 'Consultando estoque do produto' . $this->nome . '\n';
    }
    public function baixarEstoque() : bool 
    {
        echo 'Baixando estoque do produto' . $this->nome . '\n';
    }
}
    
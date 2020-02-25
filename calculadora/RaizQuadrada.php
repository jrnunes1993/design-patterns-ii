<?php
class RaizQuadrada implements Expressao 
{
    private $expressao;

    public function __construct(Expressao $e) 
    {
        $this->expressao = $e;
    }

    public function avalia() 
    {
        return (int) sqrt($this->expressao->avalia());
    }
}
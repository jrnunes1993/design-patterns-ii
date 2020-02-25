<?php
class PreFixaVisitor implements Visitor 
{
    public function visitaSoma(Soma $soma) 
    {
        echo " + ";
        echo "(";
        $soma->getEsquerda()->aceita($this);
        $soma->getDireita()->aceita($this);
        echo ")";
    }

    public function visitaSubtracao(Subtracao $subtracao) 
    {
        echo " - ";
        echo "(";
        $subtracao->getEsquerda()->aceita($this);
        $subtracao->getDireita()->aceita($this);
        echo ")";
    }

    public function visitaNumero(Numero $numero) 
    {
        echo $numero->getNumero();
    }
}
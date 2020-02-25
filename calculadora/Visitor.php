<?php
interface Visitor 
{
    public function visitaSoma(Soma $soma);
    public function visitaSubtracao(Subtracao $subtracao);
    public function visitaNumero(Numero $numero);
}
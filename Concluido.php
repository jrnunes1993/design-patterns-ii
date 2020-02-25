<?php
class Concluido implements TipoDeContrato 
{
    public function avanca($contrato) {
        // não faz nada
		/* Ou, também podemos lançar uma exceção.
        throw new Exception("Este contrato ja se encontra finalizado");
        */
    }
}
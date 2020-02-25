<?php
class Acertado implements TipoDeContrato 
{
    public function avanca(Contrato $contrato) {
        $contrato->setTipo(new Concluido());
    }
}
<?php


class Estado {
    private $contrato;
    private $horaGerada;

    function __construct(Contrato $contrato)
    {
        $this->contrato = $contrato;
        $this->horaGerada = date("h:i:s");
    }

    public function getContrato()
    {
        return $this->contrato;
    }


}
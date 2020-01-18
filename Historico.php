<?php

class Historico{
    private $estadosContrato;

    function __construct()
    {
        $this->estadosContrato = array();
    }

    public function getEstado($index)
    {
        return $this->estadosContrato[$index];
    }

    public function addEstado(Estado $estado)
    {
        $this->estadosContrato[] = $estado;
    }
}

?>
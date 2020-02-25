<?php
class ServicoSingleton 
{
    private static $instancia;

    public function getInstancia() 
    {
        if(is_null($this->instancia)) {
           $this->instancia = new Servico();
        }

        return $this->instancia;
    }
}
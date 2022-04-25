<?php

require_once ('Interfaces/OperationInterface.php');

class Customer {

    protected $operation;

    public function __construct(OperationInterface $operation)
    {
        $this->operation = $operation;
    }
  
    public function executeRegister(){
        return $this->operation->register();
    }

    public function executeDelete(){
        return $this->operation->delete();
    }

    public function executeEdit(){
        return $this->operation->edit();
    }

    
  
}


?>
<?php

Class Customer

{
    private $_idCustomer;
    private $_customerName;


public function __construct($idCustomer,$customerName)

{
    $this->_idCustomer=$idCustomer;
    $this->_customerName=$customerName;

}

 /*******************************************ACCESSEURS******************************/

    public function get_idCustomer()
    {
        return $this->_idCustomer;
    }

    public function get_customerName()
    {
        return $this->_customerName;
    }

}




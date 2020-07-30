<?php

Class Recovery

{
    private $_idRecovery;
    private $_paintNameRecovery;
    private $_customerNameRecovery;
    private $_quantityRecovery;
    private $_recoveryDate;
    private $_idPiece;


    public function __construct($idRecovery, $paintNameRecovery, $customerNameRecovery, $quantityRecovery, $recoveryDate,$idPiece)

    {
        $this->_idRecovery = $idRecovery;
        $this->_paintNameRecovery = $paintNameRecovery;
        $this->_customerNameRecovery = $customerNameRecovery;
        $this->_quantityRecovery = $quantityRecovery;
        $this->_recoveryDate = $recoveryDate;
        $this->_idPiece = $idPiece;

    }

    /*******************************************ACCESSEURS******************************/
   
    public function get_idRecovery()
    {
        return $this->_idRecovery;
    }

    public function get_paintNameRecovery()
    {
        return $this->_paintNameRecovery;
    }

    public function get_customerNameRecovery()
    {
        return $this->_customerNameRecovery;
    }

    public function get_quantityRecovery()
    {
        return $this->_quantityRecovery;
    }

    public function get_recoveryDate()
    {
        return $this->_recoveryDate;
    }

    public function get_idPiece()
    {
        return $this->_idPiece;
    }
}

    
<?php

class Piece

{
    private $_id_Piece;
    private $_quantity;
    private $_id_Customer;

    public function __construct($idPiece, $quantity, $idCustomer)
    {
        $this->_id_Piece = $idPiece;
        $this->_quantity = $quantity;
        $this->_id_Customer = $idCustomer;
    }

    /*******************************************ACCESSEURS******************************/

    public function get_id_piece()
    {
        return $this->_id_Piece;
    }

    public function get_quantity()
    {
        return $this->_quantity;
    }

    public function get_id_Customer()
    {
        return $this->_id_Customer;
    }
}

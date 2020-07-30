<?php

class Apply

{
    private $_id_Paint;
    private $_id_Piece;
    private $_date;

    public function __construct($idPaint, $idPiece, $date)
    {
        $this->_id_Paint = $idPaint;
        $this->_id_Piece = $idPiece;
        $this->_date = $date;
    }

/*******************************************ACCESSEURS******************************/

    public function get_id_Paint()
    {
        return $this->_id_Paint;
    }

    public function get_id_Piece()
    {
        return $this->_id_Piece;
    }


    public function get_date()
    {
        return $this->_date;
    }
}

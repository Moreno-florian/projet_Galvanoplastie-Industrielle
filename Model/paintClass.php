<?php

Class Paint

{
    private $_idPaint;
    private $paintName;


public function __construct($idPaint,$paintName)

{
    $this->_idPaint = $idPaint;
    $this->paintName = $paintName;

}  


 /*******************************************ACCESSEURS******************************/
    public function get_idPaint()
    {
        return $this->_idPaint;
    }

    public function getPaintName()
    {
        return $this->paintName;
    }

}


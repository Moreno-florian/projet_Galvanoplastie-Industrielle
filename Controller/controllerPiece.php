<?php
require_once '../Model/Dao/dbConnect.php'; // To connect from the BDD.
require_once '../Model/pieceClass.php'; // To call stadium class code.
require_once '../Model/Dao/daoPiece.php'; // To call daoStadium class code.


    /*$list = (new daoPiece())->addPiece();
    var_dump($list);*/

 /* $list = (new daoPiece())->deletePiece();
    var_dump($list);*/

   /*$list = (new daoPiece())->modifyPiece();
    var_dump($list);*/

   $list = (new daoPiece())->showPiece();
    var_dump($list);
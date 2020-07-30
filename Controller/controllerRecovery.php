<?php
require_once '../Model/Dao/dbConnect.php'; // To connect from the BDD.
require_once '../Model/recoveryClass.php'; // To call stadium class code.
require_once '../Model/Dao/daoRecovery.php'; // To call daoStadium class code.


/*$list = (new daoRecovery())->addRecovery();
var_dump($list);*/

/* $list = (new daoRecovery())->deleteRecovery();
    var_dump($list);*/

/* $list = (new daoRecovery())->modifyRecovery();
    var_dump($list);*/

$list = (new daoRecovery())->showRecovery();
var_dump($list);

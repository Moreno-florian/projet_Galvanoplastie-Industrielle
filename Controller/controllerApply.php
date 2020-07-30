<?php
require_once '../Model/Dao/dbConnect.php';
require_once '../Model/applyClass.php';
require_once '../Model/Dao/daoApply.php';

$list = (new daoApply())->addApply();
var_dump($list);

/*$list = (new daoApply())->modifyApply();
var_dump($list);*/

/*$list = (new daoApply())->deleteApply();
var_dump($list);*/

/*$list = (new daoApply())->showApply();
var_dump($list);*/
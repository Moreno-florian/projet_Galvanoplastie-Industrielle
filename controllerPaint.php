<?php
require_once '../Model/Dao/dbConnect.php';
require_once '../Model/paintClass.php';
require_once '../Model/Dao/daoPaint.php';


/*****************************************************************Add Name_Paint************************************************************************* */

if (isset($_POST['Name'])) {

    if (!empty($_POST["Name"])) {  // If an important field is empty

        $newPaint = new Paint(null, addslashes(htmlspecialchars(ucfirst($_POST["Name"]))));
        (new daoPaint())->addPaint($newPaint);


        header('Location: ../View/formAddPaint.phtml');
    } else {
        echo ('Le champ est vide est le \'required\' à était désactivé !');                   // if requiered is disabled
        header("refresh:3;url=../View/formAddPaint.phtml"); // if requiered is disabled
    }
}
/********************************************************************************************************************************************************* */

/*include_once "View/formAddpaint.phtml";
$list = (new daoPaint())->showPaint();    // Call function showStadiumList() from "Dao/daoStadium.php"
var_dump($list);*/
      



/*$list = (new daoPaint())->modifyPaint();
var_dump($list);*/

/*$list = (new daoPaint())->deletePaint();
var_dump($list);*/

/*$list = (new daoPaint())->showPaint();
var_dump($list);*/
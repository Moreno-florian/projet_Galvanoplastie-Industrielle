<?php
require_once '../Model/Dao/dbConnect.php';
require_once '../Model/customerClass.php';
require_once '../Model/Dao/daoCustomer.php';


/*****************************************************************Add Name_Customer************************************************************************* */
if (isset($_POST['Name'])) {

    if (!empty($_POST["Name"])) {  // If an important field is empty

        $newCustomer = new Customer(null, addslashes(htmlspecialchars(ucfirst($_POST["Name"]))));
        (new daoCustomer())->addCustomer($newCustomer);
        header('Location: ../View/formAddCustomer.phtml');
    } else {

        echo ('Le champ est vide est le \'required\' à était désactivé !');
        header("refresh:3;url=../View/formAddCustomer.phtml"); // if requiered is disabled


    }
}
/********************************************************************************************************************************************************* */

/*$list = (new daoCustomer())->showCustomer();    // Call function showStadiumList() from "Dao/daoStadium.php"
var_dump($list);*/

//$list2 = (new DaoCustomer())->modifyCustomer();

//$list4 = (new DaoCustomer())->deleteCustomer();
        
//$list3 = (new DaoCustomer())->showCustomer();

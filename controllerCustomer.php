<?php
require_once '../Model/Dao/dbConnect.php';
require_once '../Model/customerClass.php';
require_once '../Model/Dao/daoCustomer.php';

//switch (key($_GET)) {
        /*****************************************************************Add Name_Customer************************************************************************* */
    //case 'formAddCustomer':

        if (isset($_POST['Name'])) {

            if (!empty($_POST["Name"])) {  // If an important field is empty

                $newCustomer = new Customer(null, addslashes(htmlspecialchars(ucfirst($_POST["Name"]))));
                (new daoCustomer())->addCustomer($newCustomer);
                header('Location: ../View/formAddCustomer.phtml');
            } else {

                echo ('Le champ est vide est le \'required\' à était désactivé !');
                header("refresh:3;url=../View/formAddCustomer.phtml"); // if 'requiered' in HTML is disabled
            }
        }
       // break;
        /********************************************************************************************************************************************************* */
    //case 'showCustomer':
        
        $list = (new DaoCustomer())->showCustomer();    // Call function showCustomer() from "Dao/daoCustomer.php"
        include_once "./formShowCustomer.phtml";
        header('./formShowCustomer.phtml');

       // break;
        
//}





/*$list=(new DaoCustomer())->showCustomer();
include_once '../View/formShowCustomer.phtml';*/

//$list2 = (new DaoCustomer())->modifyCustomer();

//$list4 = (new DaoCustomer())->deleteCustomer();
        
//$list3 = (new DaoCustomer())->showCustomer();

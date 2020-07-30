<?php
class DaoRecovery
{
    public function addRecovery(): void
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("INSERT INTO reprise (Nom_peinture_reprise,Nom_client_reprise,Quantite_reprise,Date_reprise,Id_piece) VALUES (?,?,?,?,?)");  // Prepare the request to be execute

        try {
            $request->execute(array('A1000','Satis',21,'2020-05-22',2));    // Execute the request
            


        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.		
        }
    }


    public function deleteRecovery(): void
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("DELETE FROM reprise WHERE Id_reprise=?");  // Prepare the request to be execute

        try {
            $request->execute(array(2));    // Execute the request
            


        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.		
        }
    }

    public function modifyRecovery(): void
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("UPDATE reprise SET Nom_peinture_reprise=?,Nom_client_reprise=?,Quantite_reprise=?,Date_reprise=?,Id_piece=? WHERE Id_reprise=?");  // Prepare the request to be execute

        try {
            $request->execute(array('p60','Thales',25,'2020-12-12',2,2));    // Execute the request
            


        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.		
        }
    }

    public function showRecovery(): array
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("SELECT * FROM reprise");  // Prepare the request to be execute
        try {
            $request->execute();    // Execute the request

            while ($line = $request->fetch(PDO::FETCH_ASSOC))   // While all datas are not display the loop keeps going
            {
                $line['Id_reprise'];
                $line['Nom_peinture_reprise'];
                $line['Nom_client_reprise'];
                $line['Quantite_reprise'];
                $line['Date_reprise'];
                $line['Id_Piece'];

                $tab[] = $line;  //  $tab is where $line's containt is stocked
               
            }
            $request->closeCursor();
            return $tab;
            
        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.		
        }
    }
}

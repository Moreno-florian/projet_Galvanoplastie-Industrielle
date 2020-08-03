<?php
class DaoApply
{
    public function addApply(): void
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("INSERT INTO appliquer (Id_peinture,Id_Piece,Date) VALUES (?,?,?)");  // Prepare the request to be execute

        try {
            $request->execute(array(1, 2, '2020-05-22'));    // Execute the request
            
        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.		
        }
    }


    public function deleteApply(): void
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("DELETE FROM appliquer WHERE id_piece=?");  // Prepare the request to be execute

        try {
            $request->execute(array(2));    // Execute the request
            

        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.		
        }
    }

    public function modifyApply(): void
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("UPDATE appliquer SET Id_Piece=?,Id_peinture=?,Date=? WHERE Id_Piece=?");  // Prepare the request to be execute

        try {
            $request->execute(array(2,1,'2020-07-08',2));    // Execute the request
            
        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.		
        }
    }

    public function showApply(): array
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("SELECT * FROM appliquer");  // Prepare the request to be execute
        try {
            $request->execute();    // Execute the request

            while ($line = $request->fetch(PDO::FETCH_ASSOC))   // While all datas are not display the loop keeps going
            {
                $line['Id_Peinture'];
                $line['Date'];
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

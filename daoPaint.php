<?php

class DaoPaint
{

    public function showPaint(): array
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $tab = [];
        $request = $pdo->prepare("SELECT * FROM peinture"); // Prepare the request to be execute

        try {
            $request->execute();    // Execute the request

            while ($line = $request->fetch(PDO::FETCH_ASSOC))   // While all datas are not display the loop keeps going
            {
                $line['Id_peinture'];
                $line['Nom_peinture'];

                $tab[] = $line;  //  $tab is where $line's containt is stocked
            }
            return $tab;
            $request->closeCursor();
            
        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.		
        }
    }

    public function addPaint($newPaint): void
    {

        $pdo = Dao::getConnection($newPaint);     // Connection to the DB
        $request = $pdo->prepare("INSERT INTO peinture (Nom_peinture) VALUES (?)");     // Prepare the request to be execute
        try {
            $request->execute(array($newPaint->get_paintName()));    // Execute the request

        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.		
        }
    }

    public function modifyPaint(): void
    {

        $pdo = Dao::getConnection();     // Connection to the DB

        $request = $pdo->prepare("UPDATE peinture SET Nom_peinture= 'pac 33' WHERE Id_peinture= 1");  // Prepare the request to be execute

        try {
            $request->execute();    // Execute the request

        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.		
        }
    }

    public function deletePaint(): void
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("DELETE FROM peinture WHERE Id_peinture= 1"); // Prepare the request to be execute

        try {
            $request->execute();    // Execute the request
        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.		
        }
    }
}

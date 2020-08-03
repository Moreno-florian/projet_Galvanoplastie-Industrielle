<?php

class DaoPiece
{
    public function addPiece(): void
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("INSERT INTO piece (Quantite,Id_client) VALUES (?,?)");  // Prepare the request to be execute




        try {
            $request->execute(array(6325, 1)); // Faudra mettre des GET pour récupérer les valeurs entrées au clavier
            // permet de cloturer la requête

        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.		
        }
    }


    public function deletePiece(): void
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("DELETE FROM piece WHERE id_piece=?");  // Prepare the request to be execute

        try {
            $request->execute(array(3));    // Execute the request
            // permet de cloturer la requête


        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.		
        }
    }

    public function modifyPiece(): void
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("UPDATE piece SET Id_Piece=?,Quantite=?,Id_client=? WHERE id_Piece=?");  // Prepare the request to be execute

        try {
            $request->execute(array(2, 123456, 1, 2));    // Execute the request
            // permet de cloturer la requête

        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.		
        }
    }

    public function showPiece(): array
    {
        $pdo = Dao::getConnection();     // Connection to the DB
        $request = $pdo->prepare("SELECT * FROM piece");  // Prepare the request to be execute
        try {
            $request->execute();    // Execute the request

            while ($line = $request->fetch(PDO::FETCH_ASSOC))   // While all datas are not display the loop keeps going
            {
                $line['Id_Piece'];
                $line['Quantite'];
                $line['Id_client'];

                $tab[] = $line;  //  $tab is where $line's containt is stocked
            }
            $request->closeCursor();// permet de cloturer la requête
            return $tab;
            

        } catch (Exception $e) {
            echo ('Erreur : ' . $e->getMessage() . ' ! ');    // Send the error message.		
        }
    }
}

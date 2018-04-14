<?php


  function data_base_connect ()
   {
     $dbh = new PDO("mysql:host=localhost;dbname=Budgeto;charset=utf8", "root", "");
     
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     return ($dbh);
   }
            $db = data_base_connect ();


            $statement = $db->prepare('INSERT
             INTO ressource ( idCRes, nomRessource)
                                          
                       VALUES ( :idCRes, :nomRessource )');

    $statement->bindParam(':idCRes', $_POST['catres']);
    $statement->bindParam(':nomRessource', $_POST['nomres']);
                

                if(isset($_POST['nomres']))
                {
                     try{
                               $statement->execute();
                    }catch (Exception $e) {
                            exit($e ->getMessage());
echo "Ressource Non inséré";
                       }
                }
          $id = $db->lastInsertId('idRes');



        $statement2 = $db->prepare('INSERT
             INTO Utiliser ( idRes, idCol,nbRessource,prix_reel,date)
                                          
                       VALUES ( :idRes, :idCol, :nbRessource, :prix_reel, :date)');

  $statement2->bindParam(':idRes', $id);
  $statement2->bindParam(':idCol', $_POST['idCol']);
  $statement2->bindParam(':nbRessource', $_POST['nbRessource']);
  $statement2->bindParam(':prix_reel', $_POST['prix_reel']);
  $statement2->bindParam(':date', $_POST['date']);
      

                if(isset($id))
                {
                     try{
                               $statement2->execute();
echo "Ressource inséré avec succés ";
                    }catch (Exception $e) {
                            exit($e ->getMessage());
echo "Ressource Non inséré";
                       }
                }

?>
<?php

  function data_base_connect ()
   {
     $dbh = new PDO("mysql:host=localhost;dbname=Budgeto;charset=utf8", "root", "");
     
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     return ($dbh);
   }


    
   
            $db = data_base_connect ();

            $statement = $db->prepare('INSERT
             INTO categorieRessource ( nomCategorie )
                                          
                       VALUES ( :nomCategorie )');

                if(isset($_POST['categor_personnel']))
                {
                    $clean['categor_personnel'] = $_POST['categor_personnel'];
                    $statement->bindParam(':nomCategorie', $clean['categor_personnel']);
                }

                if(isset($_POST['categor_personnel']))
                {
                     try{
                               $statement->execute();
      echo "Catégorie de Ressource : ".$_POST['categor_personnel']." inséré avec succés";
                    }catch (Exception $e) {
                            exit($e ->getMessage());
                       }
                }

?>
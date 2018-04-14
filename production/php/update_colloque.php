<?php

include("connexion.php");
session_start();
            $db = data_base_connect ();
               $fin  = strtotime($_POST['date_F']);
               $debut  = strtotime($_POST['date_D']);
if(strcmp($debut,$fin)>0){
    echo "Erreur dans la date ( date fin avant date debut !! )";
}else{
            $statement = $db->prepare('UPDATE Colloque SET nomCol= :nomCol , dateColDebut=:dateColDebut, dateColFin = :dateColFin, lieuCol =  :lieuCol , descCol = :descCol, droitCol = :droitCol, nbParticipants = :nbParticipants where idCol=:id');
                if(isset($_POST['nom']))
                {
                    $clean['nom'] = $_POST['nom'];  
                    $statement->bindParam(':nomCol', $clean['nom']);
                }
                if(isset($_POST['date_D']))
                {
                    $date1 = strtotime($_POST['date_D']);
                    $dated = date('Y-m-d',$date1);
                    $clean['date_D'] = $dated;
                    $statement->bindParam(':dateColDebut', $clean['date_D']);
                }
                if(isset($_POST['date_F']))
                {
                    $date2 = strtotime($_POST['date_F']);
                    $datef = date('Y-m-d',$date2);
                    $clean['date_F'] = $datef;
                    $statement->bindParam(':dateColFin', $clean['date_F']);
                }
                if(isset($_POST['lieu']))
                {
                    $clean['lieu'] = $_POST['lieu']; 
                    $statement->bindParam(':lieuCol',$clean['lieu']);
                }
                if(isset($_POST['Theme']))
                {
                    $clean['Theme'] = $_POST['Theme'];  
                    $statement->bindParam(':descCol',$clean['Theme']);
                }
        
                if(isset($_POST['droit']))
                {
                    $clean['droit'] = $_POST['droit'];  
                    $statement->bindParam(':droitCol',$clean['droit']);
                }
                if(isset($_POST['nbparticipant']))
                {
                    $clean['nbparticipant'] = $_POST['nbparticipant'];  
                    $statement->bindParam(':nbParticipants',$clean['nbparticipant']);
                }
                    $statement->bindParam(':id',$_POST['id']);

                if(isset($_POST['nom']))
                {
                     try{
                                
                               $statement->execute();
echo "Colloque : ".$_POST['nom']." Modofier avec succés";
                    }catch (Exception $e) {
                            echo "non inséré";
                            exit($e ->getMessage());

                 
                       }
                }else
                {
                  echo "non inséré";
                }
            }
?>
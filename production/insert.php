
<?php

include("connexion.php");
            $db = data_base_connect ();
                
            $statement = $db->prepare('INSERT
             INTO Salle ( nomSalle , adresse , tarif , capacite , typeSalle  )
                                          
                       VALUES ( :nomSalle , :adresse , :tarif , :capacite , :typeSalle )');

       
                if(isset($_POST['nom']))
                {
                    $clean['nom'] = $_POST['nom'];  
                    $statement->bindParam(':nomSalle', $clean['nom']);
                }
                if(isset($_POST['adr']))
                {
                    $clean['adr'] = $_POST['adr'];  
                    $statement->bindParam(':adresse', $clean['adr']);
                }
                if(isset($_POST['tarif']))
                {
                    $clean['tarif'] = $_POST['tarif'];  
                    $statement->bindParam(':tarif', $clean['tarif']);
                }
                if(isset($_POST['nbplace']))
                {
                    $clean['nbplace'] = $_POST['nbplace']; 
                    $statement->bindParam(':capacite',$clean['nbplace']);
                }
                if(isset($_POST['type']))
                {
                    $clean['type'] = $_POST['type'];  
                    $statement->bindParam(':typeSalle',$clean['type']);
                }

               
                    try{
                                echo "inserted";
                               $statement->execute();
                    }catch (Exception $e) {
                            echo "notinserted";
                            exit($e ->getMessage());

                 
                    }

?>
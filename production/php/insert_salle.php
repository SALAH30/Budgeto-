
<?php

            include("connexion.php");
            $db = data_base_connect ();
                
            $statement = $db->prepare('INSERT
             INTO Salle ( nomSalle , adresse , prix_estime , capacite , typeSalle , surface )
                                          
                       VALUES ( :nomSalle , :adresse , :tarif , :capacite , :typeSalle , :surface )');

            
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

                if(isset($_POST['surface']))
                {
                    $clean['surface'] = $_POST['surface'];  
                    $statement->bindParam(':surface',$clean['surface']);
                }

               if(isset($_POST['nom'])){
                    try{
      echo "Salle : ".$_POST['nom']." inséré avec succés";
                               $statement->execute();
                    }catch (Exception $e) {
                            echo "non inséré";
                            exit($e ->getMessage());

                 
                    }
                }else{
                    echo "non inséré";
                }

?>

<?php

  function data_base_connect ()
   {
     $dbh = new PDO("mysql:host=localhost;dbname=Budgeto;charset=utf8", "root", "");
     
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     return ($dbh);
   } 
   
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

                if(isset($_POST['type'])||isset($_POST['nbplace'])||isset($_POST['nom'])||isset($_POST['adr'])||isset($_POST['tarif']))
                {
                     try{
                                echo "insertezd";
                               $statement->execute();
                    }catch (Exception $e) {
                            echo "notinsertezd";
                            exit($e ->getMessage());

                 
                       }
                }else
                {
                  echo "notinsertezd";
                }


/*

            $statement = $db->prepare('INSERT
             INTO Salle ( nomCol , dateColDebut , dateColFin , lieuCol , descCol , nbParticipants , droitCol )
                                          
                       VALUES ( :nomCol , :dateColDebut , :dateColFin , :lieuCol , :descCol , :nbParticipants , :droitCol )');
                if(isset($_POST['']))
                {
                    $clean[''] = $_POST[''];  
                    $statement->bindParam(':nomCol', $clean['']);
                }
                if(isset($_POST['']))
                {
                    $clean[''] = $_POST[''];  
                    $statement->bindParam(':dateColDebut', $clean['']);
                }
                if(isset($_POST['']))
                {
                    $clean[''] = $_POST[''];  
                    $statement->bindParam(':dateColFin', $clean['']);
                }
                if(isset($_POST['']))
                {
                    $clean[''] = $_POST['']; 
                    $statement->bindParam(':lieuCol',$clean['']);
                }
                if(isset($_POST['']))
                {
                    $clean[''] = $_POST[''];  
                    $statement->bindParam(':descCol',$clean['']);
                }
                if(isset($_POST['']))
                {
                    $clean[''] = $_POST[''];
                    $statement->bindParam (':nbParticipants',$clean['']);
                }
                if(isset($_POST['']))
                {
                    $clean[''] = $_POST[''];
                    $statement->bindParam (':droitCol',$clean['']);
                }

                if(isset($_POST[''])||isset($_POST[''])||isset($_POST[''])||isset($_POST[''])||isset($_POST[''])||isset($_POST[''])||isset($_POST['']))
                {
                     try{
                               $statement->execute();
                    }catch (Exception $e) {
                            exit($e ->getMessage());
                       }
                }
*/
?>
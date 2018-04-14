
<?php

include("connexion.php");
            $db = data_base_connect ();
             
        
            $statement = $db->prepare('INSERT
             INTO participant ( status , nombre , remise  )
                                          
                       VALUES ( :status , :nombre , :remise  )');
                if(isset($_POST['status_participant']))
                {
                    $clean['status_participant'] = $_POST['status_participant'];  
                    $statement->bindParam(':status', $clean['status_participant']);
                }
                if(isset($_POST['placepar_participant']))
                {
                    $clean['placepar_participant'] = $_POST['placepar_participant'];  
                    $statement->bindParam(':nombre', $clean['placepar_participant']);
                }
                if(isset($_POST['remise_participant']))
                {
                    $clean['remise_participant'] = $_POST['remise_participant'];  
                    $statement->bindParam(':remise', $clean['remise_participant']);
                }

                if(isset($_POST['status_participant'])||isset($_POST['placepar_participant'])||isset($_POST['remise_participant']))
                {
                     try{
                                echo "inserted";
                               $statement->execute();
                    }catch (Exception $e) {
                            echo "notinserted";
                            exit($e ->getMessage());

                 
                       }
                }else
                {
                  echo "notinserted";
                }

?>
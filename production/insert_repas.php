
<?php

            include("connexion.php");
            $db = data_base_connect ();
             
        
            $statement = $db->prepare('INSERT
             INTO Repas ( nomRepas , nombre , coutRepas  )
                                          
                       VALUES ( :nomRepas , :nombre , :coutRepas  )');
               
                if(isset($_POST['Repas1']))
                {
                    $clean['Repas1'] = $_POST['Repas1'];  
                    $statement->bindParam(':nomRepas', $clean['Repas1']);
                }

                if(isset($_POST['nb']))
                {
                    $clean['nb'] = $_POST['nb'];  
                    $statement->bindParam(':nombre', $clean['nb']);
                }
                
                if(isset($_POST['coutg']))
                {
                    $clean['coutg'] = $_POST['coutg'];  
                    $statement->bindParam(':coutRepas', $clean['coutg']);
                }

                if(isset($_POST['Repas1']))
                {
                     try{
                                echo "inserted";
                               $statement->execute();
                    }catch (Exception $e) {
                            echo "not inserted1";
                            exit($e ->getMessage());

                 
                       }
                }else
                {
                  echo "not inserted2";
                }

?>
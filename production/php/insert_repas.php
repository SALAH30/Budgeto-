
<?php

            include("connexion.php");
            $db = data_base_connect ();
             
        
            $statement = $db->prepare('INSERT
             INTO Repas ( nomRepas  , prix_estime  )
                                          
                       VALUES ( :nomRepas , :coutRepas  )');
               
                if(isset($_POST['Repas1']))
                {
                    $clean['Repas1'] = $_POST['Repas1'];  
                    $statement->bindParam(':nomRepas', $clean['Repas1']);
                }

                
                if(isset($_POST['coutg']))
                {
                    $clean['coutg'] = $_POST['coutg'];  
                    $statement->bindParam(':coutRepas', $clean['coutg']);
                }

                if(isset($_POST['Repas1']))
                {
                     try{
echo "Repas : ".$_POST['Repas1']." inséré avec succés";
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
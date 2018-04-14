<?php
include ("connexion.php");




$db = data_base_connect ();
    
$exist=0;
$verifi = $db->prepare("SELECT * FROM Travailler");
$verifi->execute();
    while ($res = $verifi->fetch()) {
       if(($res['idCat']==$_POST['Pers'])&&($res['idCol']==$_POST['idCol'])){
        $exist=1;}
        # code...
    }




    if($exist==0){
            $statement = $db->prepare('INSERT
             INTO Travailler ( idCol, idCat, nbrCategorie, remuneration)
                                          
                       VALUES ( :idCol, :nomCategorie, :nbrCategorie, :remuneration)');
                
                if(isset($_POST['idCol']))
                {
                    $clean['idCol'] = $_POST['idCol'];
                    $statement->bindParam(':idCol', $clean['idCol']);
                }
                if(isset($_POST['Pers']))
                {
                    $clean['Pers'] = $_POST['Pers'];
                    $statement->bindParam(':nomCategorie', $clean['Pers']);
                }
                if(isset($_POST['nombre_personnel']))
                {
                    $clean['nombre_personnel'] = $_POST['nombre_personnel'];
                    $statement->bindParam(':nbrCategorie', $clean['nombre_personnel']);
                }
                if(isset($_POST['renum_personnel']))
                {
                    $clean['renum_personnel'] = $_POST['renum_personnel'];
                    $statement->bindParam(':remuneration', $clean['renum_personnel']);
                }



                if(isset($_POST['Pers']))
                {
                     try{
                               $statement->execute();
echo "Personnle Inséré Avec succés ";
                    }catch (Exception $e) {
                            exit($e ->getMessage());
                       }
                }

            }else{

                echo "Personnle exist déja";
            }

?>
<?php

include ("connexion.php");




$db = data_base_connect ();
$exist=0;
$verifi = $db->prepare("SELECT * FROM Servir");
$verifi->execute();
    while ($res = $verifi->fetch()) {
    if(($res['idRepas']==$_POST['repas'])&&($res['idCol']==$_POST['idCol'])){
        $exist=1;}
        # code...
    }

    if($exist==0){

$publicite_ins = $db->prepare('INSERT
INTO Servir ( idCol, idRepas, nbRepas, dateR, prix_reel) 
VALUES ( :idCol , :idRepas , :nbRepas, :dateR, :prix_reel)');


    $publicite_ins->bindParam(':idCol', $_POST['idCol']);

    $publicite_ins->bindParam(':idRepas', $_POST['repas']);

    $publicite_ins->bindParam(':nbRepas', $_POST['nb_Repas']);

    $publicite_ins->bindParam(':dateR', $_POST['date']);

    $publicite_ins->bindParam(':prix_reel', $_POST['prix_reel']);


if(isset($_POST['idCol']))
{
    try{
        $publicite_ins->execute();
echo "Repas Inséré Avec succés ";
        
    }catch (Exception $e) {
        exit($e ->getMessage());
    }
}
}else{

    echo "repas exist déja";
}
?>
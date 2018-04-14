<?php

include ("connexion.php");




$db = data_base_connect ();
$exist=0;
$verifi = $db->prepare("SELECT * FROM Location");

$verifi->execute(array($_POST['salle'],$_POST['idCol']));

    while ($res = $verifi->fetch()) {
        if(($res['idSalle']==$_POST['salle'])&&($res['idCol']==$_POST['idCol'])){
        $exist=1;}
        # code...
    }


    if($exist==0){


$publicite_ins = $db->prepare('INSERT
INTO Location ( idCol , idSalle , dateS , duree, prix_reel) 
VALUES ( :idCol , :nomSalle , :dateS ,:duree, :prix_reel)');

    $publicite_ins->bindParam(':idCol', $_POST['idCol']);
    $publicite_ins->bindParam(':nomSalle', $_POST['salle']);
    $publicite_ins->bindParam(':dateS', $_POST['dateS']);
    $publicite_ins->bindParam(':duree', $_POST['duree']);
    $publicite_ins->bindParam(':prix_reel', $_POST['prix_reel']);


if(isset($_POST['idCol']))
{
    try{
        $publicite_ins->execute();
echo "Salle inséré avec succés ";
        
    }catch (Exception $e) {
        exit($e ->getMessage());
    }

}}else{

    echo "salle exist déja";
}

?>
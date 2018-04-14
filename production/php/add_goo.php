<?php

include ("connexion.php");




$db = data_base_connect ();

$exist=0;
$verifi = $db->prepare("SELECT * FROM distribuer");
$verifi->execute();
    while ($res = $verifi->fetch()) {
       if(($res['idGoo']==$_POST['goo'])&&($res['idCol']==$_POST['idCol'])){
        $exist=1;}
        # code...
    }

    if($exist==0){
$publicite_ins = $db->prepare('INSERT
INTO distribuer ( idCol , idGoo , nbGoo , prix_reel, date) 
VALUES ( :idCol , :idGoo , :nbGoo, :prix_reel, :date)');

    $publicite_ins->bindParam(':idCol', $_POST['idCol']);

    $publicite_ins->bindParam(':idGoo', $_POST['goo']);

    $publicite_ins->bindParam(':nbGoo', $_POST['exempg']);

    $publicite_ins->bindParam(':prix_reel', $_POST['prix_reel']);

    $publicite_ins->bindParam(':date', $_POST['date']);


if(isset($_POST['idCol']))
{
    try{
        $publicite_ins->execute();
echo "goodies Inséré Avec succés ";
        
    }catch (Exception $e) {
        exit($e ->getMessage());
    }
}}else{

    echo "goodies exist déja";
}

?>
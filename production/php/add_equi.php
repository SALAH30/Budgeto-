<?php
include ("connexion.php");

$db = data_base_connect ();

$exist=0;
$verifi = $db->prepare("SELECT * FROM Equiper");
$verifi->execute(array($_POST['equi'],$_POST['idCol']));
    while ($res = $verifi->fetch()) {
         if(($res['nomEquipement']==$_POST['equi'])&&($res['idCol']==$_POST['idCol'])){
        $exist=1;}
        # code...
    }

    if($exist==0){

$publicite_ins = $db->prepare('INSERT
INTO Equiper ( idCol ,idEqui , nomEquipement , nbexemplaire , LivraisonEqui , prix_reel,date) 
VALUES ( :idCol , :idEqui , :nomEquipement , :nbexemplaire , :LivraisonEqui, :prix_reel, :date )');

    $publicite_ins->bindParam(':idCol', $_POST['idCol']);

$nom=explode(",",$_POST['equi']);
    
    $publicite_ins->bindParam(':idEqui', $nom[1]);

    $publicite_ins->bindParam(':nomEquipement', $nom[0]);

    $publicite_ins->bindParam(':prix_reel', $_POST['prix_reel']);

    $publicite_ins->bindParam(':date', $_POST['date']);

    $publicite_ins->bindParam(':nbexemplaire', $_POST['exemplaire_equipement'] );
    
    $publicite_ins->bindParam(':LivraisonEqui', $_POST['livraison_equipement'] );


if(isset($_POST['idCol']))
{
    try{
        $publicite_ins->execute();    
        echo "Equipement : ".$nom[0]." Inséré Avec succés ";
    }catch (Exception $e) {
        exit($e ->getMessage());
    }
}

}else{
        echo "Equipement exist déj";

}
?>
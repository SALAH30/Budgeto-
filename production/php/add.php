<?php

include ("connexion.php");
$db = data_base_connect ();


$publicite_add = $db->prepare('SELECT * FROM Equipement WHERE nomEquipement='.$_POST['equi'])
$publicite_add->execute();
while($ren = $publicite_add->fetch()){ 

                $nomEquipement = $ren['nomEquipement'];
                $coutUnite = $ren['coutUnite'];
                $nbexemplaire = $ren['nbexemplaire'];
          }

$publicite_ins = $db->prepare('INSERT
INTO Equiper ( idCol , nomEquipement , nbexemplaire , coutUnite ) 
VALUES ( :idCol , :nomEquipement , :nbexemplaire , :coutUnite )');

	$publicite_ins->bindParam(':idCol', $_POST['idCol']);

	$publicite_ins->bindParam(':nomEquipement', $nomEquipement);

    $publicite_ins->bindParam(':nbexemplaire', $coutUnite);
    
    $publicite_ins->bindParam(':coutUnite', $nbexemplaire);


if(isset($_POST['idCol']))
{
    try{
        $publicite_ins->execute();
        echo "INSERTed";
        
    }catch (Exception $e) {
        exit($e ->getMessage());
    }
}

/*
$publicite_add = $db->prepare('SELECT * FROM publicite WHERE typePub='.$_POST['pub'])
$publicite_add->execute();
while($ren = $publicite_add->fetch()){ 

                $ren_intervenant = $ren['renum'];
            


            }

*/









?>
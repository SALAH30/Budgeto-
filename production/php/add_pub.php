<?php

include ("connexion.php");




$db = data_base_connect ();
$exist=0;
$verifi = $db->prepare("SELECT * FROM publier");
$verifi->execute();
    while ($res = $verifi->fetch()) {
        if(($res['idPub']==$_POST['pub'])&&($res['idCol']==$_POST['idCol'])){
        $exist=1;}
        # code...
    }

    if($exist==0){

$publicite_ins = $db->prepare('INSERT
INTO publier ( idCol , idPub , prix_reel ) 
VALUES ( :idCol , :idPub , :coutPub )');

	$publicite_ins->bindParam(':idCol', $_POST['idCol']);

	$publicite_ins->bindParam(':idPub', $_POST['pub']);

    $publicite_ins->bindParam(':coutPub', $_POST['coutpub']);




if(isset($_POST['idCol']))
{
    try{
        $publicite_ins->execute();
echo "Publicité Inséré Avec succés ";
        
    }catch (Exception $e) {
        exit($e ->getMessage());
    }
}
}else{

    echo "publicite exist déja";
}
/*
$publicite_add = $db->prepare('SELECT * FROM publicite WHERE typePub='.$_POST['pub'])
$publicite_add->execute();
while($ren = $publicite_add->fetch()){ 

                $ren_intervenant = $ren['renum'];
            


            }

*/









?>
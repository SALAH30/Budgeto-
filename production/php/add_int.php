<?php

include ("connexion.php");

$db = data_base_connect ();
$exist=0;
$verifi = $db->prepare("SELECT * FROM intervenir");
$verifi->execute();
    while ($res = $verifi->fetch()) {
    if(($res['idIntervenant']==$_POST['Int'])&&($res['idCol']==$_POST['idCol'])){
        $exist=1;}
        # code...
    }




    if($exist==0){
$publicite_ins = $db->prepare('INSERT
INTO intervenir ( idCol , idIntervenant, renumInt, dateDebut , dateFin)
VALUES ( :idCol , :idIntervenant , :renumInt, :dateDebut , :dateFin )');

	$publicite_ins->bindParam(':idCol', $_POST['idCol']);

    $publicite_ins->bindParam(':idIntervenant', $_POST['Int']);
	
    $publicite_ins->bindParam(':renumInt', $_POST['renum_Int']);

    $publicite_ins->bindParam(':dateDebut', $_POST['date_Di']);
    
    $publicite_ins->bindParam(':dateFin', $_POST['date_Fi']);



if(isset($_POST['idCol']))
{
    try{
        $publicite_ins->execute();
echo "intervenant Inséré Avec succés <br>";
        
    }catch (Exception $e) {
        //exit($e ->getMessage());
    }
}



if(isset($_POST['heb_Int'])) {  
if($_POST['heb_Int']=="on"){
    $statement2 = $db->prepare('INSERT
    INTO Hebergement ( nomH, adresse, prix_estime, duree )
    VALUES ( :nomH, :adresse, :tarifH, :duree)');


    if (isset($_POST['nom_heb'])) {
        $clean['nom_heb'] = $_POST['nom_heb'];
        $statement2->bindParam(':nomH', $clean['nom_heb']);
    }

    if (isset($_POST['adr_heb'])) {
        $clean['adr_heb'] = $_POST['adr_heb'];
        $statement2->bindParam(':adresse', $clean['adr_heb']);
    }

    if (isset($_POST['cout_heb'])) {
        $clean['cout_heb'] = $_POST['cout_heb'];
        $statement2->bindParam(':tarifH', $clean['cout_heb']);
    }

    if (isset($_POST['dure_heb'])) {
        $clean['dure_heb'] = $_POST['dure_heb'];
        $statement2->bindParam(':duree', $clean['dure_heb']);
    }

    if (isset($_POST['nom_heb'])) {
        try {
            $statement2->execute();
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    $id = $db->lastInsertId('idH');
    
    $statement4 = $db->prepare('INSERT INTO heberger ( idIntervenant, idH, prix_reel) VALUES (:idIntervenant, :idH, :prix_reel)');


        $statement4->bindParam(':idIntervenant', $_POST['Int']);

        $statement4->bindParam(':idH', $id);

        $statement4->bindParam(':prix_reel', $_POST['cout_heb']);

    if (isset($_POST['nom_heb'])) {
        try {
echo "Hebergement Inséré Avec succés <br>";
            $statement4->execute();
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }
}
}


if(isset($_POST['trans_Int'])) {
    if($_POST['trans_Int']=="on"){
    $statement3 = $db->prepare('INSERT
    INTO Transport ( typeTransport, classe, cout, lieuDepart, lieuArrivee , dateDepart, dateArrivee)                                                              
    VALUES ( :typeTransport, :classe, :cout, :lieuDepart, :lieuArrivee, :dateDepart, :dateArrivee)');

     $statement3->bindParam(':dateDepart', $_POST['datedp']);
 
     $statement3->bindParam(':dateArrivee', $_POST['datear']);


    if (isset($_POST['type_trans'])) {
        $clean['type_trans'] = $_POST['type_trans'];
        $statement3->bindParam(':typeTransport', $clean['type_trans']);
    }
    if (isset($_POST['classe_trans'])) {
        $clean['classe_trans'] = $_POST['classe_trans'];
        $statement3->bindParam(':classe', $clean['classe_trans']);
    }
    if (isset($_POST['cout_trans'])) {
        $clean['cout_trans'] = $_POST['cout_trans'];
        $statement3->bindParam(':cout', $clean['cout_trans']);
    }
    if (isset($_POST['lieud_trans'])) {
        $clean['lieud_trans'] = $_POST['lieud_trans'];
        $statement3->bindParam(':lieuDepart', $clean['lieud_trans']);
    }
    if (isset($_POST['lieua_trans'])) {
        $clean['lieua_trans'] = $_POST['lieua_trans'];
        $statement3->bindParam(':lieuArrivee', $clean['lieua_trans']);
    }

    if (isset($_POST['type_trans']))
     {
        try {
            $statement3->execute();
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }


    $id2 = $db->lastInsertId('idTransport');

    $statement5 = $db->prepare('INSERT
    INTO voyager ( idIntervenant, idTransport , prix_reel )              
    VALUES ( :idIntervenant, :idTransport , :prix_reel)');

        $statement5->bindParam(':idIntervenant', $_POST['Int']);
        $statement5->bindParam(':idTransport', $id2);
        $statement5->bindParam(':prix_reel', $_POST['cout_trans']);


    try {
echo "Transport Inséré Avec succés ";
            $statement5->execute();
        } catch (Exception $e) {
            exit($e->getMessage());
        }




}
}
}else{

    echo "intervenant exist déja";
}
?>
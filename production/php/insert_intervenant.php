<?php

  function data_base_connect ()
   {
     $dbh = new PDO("mysql:host=localhost;dbname=Budgeto;charset=utf8", "root", "");
     
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     return ($dbh);
   } 

            $db = data_base_connect ();

            $statement1 = $db->prepare('INSERT
             INTO Intervenant ( nom, prenome , remuneration)
                                          
                       VALUES ( :nom, :prenome, :remuneration)');



                if(isset($_POST['nom_Int']))
                {
                    $clean['nom_Int'] = $_POST['nom_Int'];
                    $statement1->bindParam(':nom', $clean['nom_Int']);
                }
                if(isset($_POST['prenom_Int'])) {
                    $clean['prenom_Int'] = $_POST['prenom_Int'];
                    $statement1->bindParam(':prenome', $clean['prenom_Int']);
                }
                if(isset($_POST['cout'])) {
                    $clean['cout'] = $_POST['cout'];
                    $statement1->bindParam(':remuneration', $clean['cout']);
                }



                if(isset($_POST['nom_Int']))
                {
                     try{
echo "Intervenant : ".$_POST['nom_Int']." ".$_POST['prenom_Int']." inséré avec succés";
                               $statement1->execute();
                    }catch (Exception $e) {
                            exit($e ->getMessage());
                       }
                }

//////////////////////////////////////////////::::
/*
if(isset($_POST['heb_Int'])) {

    $statement2 = $db->prepare('INSERT
    INTO Hebergement ( nomH, adresse, tarifH, duree )
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
            echo "Inserted Hebergement";
            $statement2->execute();
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }
    }

if(isset($_POST['trans_Int'])) {
    $statement3 = $db->prepare('INSERT
    INTO Transport ( typeTransport, classe, cout, lieuDepart, lieuArrivee)                                                              
    VALUES ( :typeTransport, :classe, :cout, :lieuDepart, :lieuArrivee)');


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
            echo "Inserted Transport";
            $statement3->execute();
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }
    }*/
?>
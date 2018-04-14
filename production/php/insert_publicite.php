<?php

include ("connexion.php");
$db = data_base_connect ();


$statement1 = $db->prepare('INSERT
INTO publicite ( typePub , prix_estime )
VALUES ( :type , :coutpub)');



if(isset($_POST['typepub']))
{
    $clean['typepub'] = $_POST['typepub'];
    $statement1->bindParam(':type', $clean['typepub']);
}
if(isset($_POST['coutpub']))
{
    $clean['coutpub'] = $_POST['coutpub'];
    $statement1->bindParam(':coutpub', $clean['coutpub']);
}


if(isset($_POST['typepub']))
{
    try{
echo "Publicité : ".$_POST['typepub']." inséré avec succés";     
   $statement1->execute();
        
    }catch (Exception $e) {
        echo "Not inserted";
        exit($e ->getMessage());
    }
}


/*
$statement = $db->prepare('INSERT
INTO Publier ( idCol, typePub, coutPub)
VALUES ( :idCol , :typePub , :coutPub)');



if(isset($_POST['colloque']))
{
    $clean['colloque'] = $_POST['colloque'];
    $statement->bindParam(':idCol', $clean['colloque']);
}

if(isset($_POST['typepub']))
{
    $clean['typepub'] = $_POST['typepub'];
    $statement->bindParam(':typePub', $clean['typepub']);
}
if(isset($_POST['coutpub']))
{
    $clean['coutpub'] = $_POST['coutpub'];
    $statement->bindParam(':coutPub', $clean['coutpub']);
}

if(isset($_POST['colloque'])||isset($_POST['coutpub']))
{
    try{

        echo "inserted";
        $statement->execute();
        
    }catch (Exception $e) {
        exit($e ->getMessage());
    }
}*/

?>
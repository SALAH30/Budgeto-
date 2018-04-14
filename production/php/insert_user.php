<?php

function data_base_connect ()
{
    $dbh = new PDO("mysql:host=localhost;dbname=Budgeto;charset=utf8", "root", "");

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return ($dbh);
}

$db = data_base_connect ();

$statement = $db->prepare('INSERT
             INTO user ( nom, prenom, nomuser, motpasse, adressemail, numtel)
                                          
                       VALUES ( :nom, :prenom, :nomuser, :motpasse, :adressemail, :numtel)');
if(isset($_POST['nom']))
{
    $clean['nom'] = $_POST['nom'];
    $statement->bindParam(':nom', $clean['nom']);
}
if(isset($_POST['prenom']))
{
    $clean['prenom'] = $_POST['prenom'];
    $statement->bindParam(':prenom', $clean['prenom']);
}
if(isset($_POST['username']))
{
    $clean['username'] = $_POST['username'];
    $statement->bindParam(':nomuser', $clean['username']);
}
if(isset($_POST['password']))
{
    $clean['password'] = $_POST['password'];
    $statement->bindParam(':motpasse', md5($clean['password']));
}
if(isset($_POST['adressmail']))
{
    $clean['adressmail'] = $_POST['adressmail'];
    $statement->bindParam(':adressemail', $clean['adressmail']);
}
if(isset($_POST['tel']))
{
    $clean['tel'] = $_POST['tel'];
    $statement->bindParam(':numtel', $clean['tel']);
}

if(isset($_POST['nom'])||isset($_POST['prenom'])||isset($_POST['nomuser'])||isset($_POST['motpasse'])||isset($_POST['adressemail'])||isset($_POST['numtel']))
{
    try{
        $statement->execute();
        header('Location: ../index_colloque.php');
    }catch (Exception $e) {
        exit($e ->getMessage());
    }
}
?>
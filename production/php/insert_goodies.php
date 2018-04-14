<?php

function data_base_connect ()
{
    $dbh = new PDO("mysql:host=localhost;dbname=Budgeto;charset=utf8", "root", "");

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return ($dbh);
}

$db = data_base_connect ();


$statement = $db->prepare('INSERT
             INTO Goodies ( nomGoo, coutGoo)
                                          
                       VALUES ( :nomGoo, :coutGoo)');
if(isset($_POST['nomg']))
{
    $clean['nomg'] = $_POST['nomg'];
    $statement->bindParam(':nomGoo', $clean['nomg']);
}
if(isset($_POST['coutg']))
{
    $clean['coutg'] = $_POST['coutg'];
    $statement->bindParam(':coutGoo', $clean['coutg']);
}



if(isset($_POST['nomg'])||isset($_POST['coutg']))
{
    try{
        $statement->execute();
echo "Goodies : ".$_POST['nomg']." inséré avec succés";
    }catch (Exception $e) {
        exit($e ->getMessage());
    }
}

?>
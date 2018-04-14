<?php
header('Location: index_colloque.html');
function data_base_connect ()
{
    $dbh = new PDO("mysql:host=localhost;dbname=Budgeto;charset=utf8", "root", "");

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return ($dbh);
}

$db = data_base_connect ();

$statement = $db->prepare('UPDATE user SET motpasse = :passm WHERE adressemail = :adrm');


$statement->execute(array(
    ':passm' => md5($_POST['passm']),
    ':adrm' => $_POST['adrm']
));
header('Location: ../index_colloque.php');
?>
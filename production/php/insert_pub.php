<?php

include ("connexion.php");
$db = data_base_connect ();


$statement1 = $db->prepare('INSERT
INTO publicite ( typePub )
VALUES ( :type )');



if(isset($_POST['type']))
{
    $clean['type'] = $_POST['type'];
    $statement1->bindParam(':type', $clean['type']);
}

if(isset($_POST['type']))
{
    try{
        $statement1->execute();
echo "Type publicite : ".$_POST['type']." inséré avec succés";
        
    }catch (Exception $e) {
        exit($e ->getMessage());
    }
}
/*
            $statement = $db->prepare('SELECT typePub FROM publicite');
            try {
             $statement->execute();   
            } catch (Exception $e) {
                exit($e->getMessage());
            }



 while($option1 = $statement->fetch()){ ?>
          <option value="<?php echo $option1['typePub']; ?>" > <?php echo $option1['typePub']; ?></option>
                 <?php } ?>

*/
?>
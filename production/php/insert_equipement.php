<?php
include("connexion.php");
    $bdd = data_base_connect ();

    $req = $bdd->prepare('INSERT
    INTO Equipement ( nomEquipement,  cout_estime )
    VALUES (:nomEquipement, :coutUnite)');
                
            
               
                if(isset($_POST['nom']))
                {
                    $clean['nom'] = $_POST['nom'];
                    $req->bindParam(':nomEquipement', $clean['nom']);
                }
              
            
                if(isset($_POST['achat'])) {
                    $clean['achat'] = $_POST['achat'];
                    $req->bindParam(':coutUnite', $clean['achat']);
                }

try{
        $req->execute();
echo "Equipement : ".$_POST['nom']." inséré avec succés";
    }
catch (Exception $e) {
    exit($e ->getMessage());
}
?>
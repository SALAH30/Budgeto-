
<?php


$now   = time(); 
function dateDiff($date1, $date2){
    $diff = abs($date1 - $date2); // abs pour avoir la valeur absolute, ainsi éviter d'avoir une différence négative
    $retour = array();
 
    $tmp = $diff;
    $retour['second'] = $tmp % 60;
 
    $tmp = floor( ($tmp - $retour['second']) /60 );
    $retour['minute'] = $tmp % 60;
 
    $tmp = floor( ($tmp - $retour['minute'])/60 );
    $retour['hour'] = $tmp % 24;
 
    $tmp = floor( ($tmp - $retour['hour'])  /24 );
    $retour['day'] = $tmp;
 
    return $retour;
}



// Colloque 
$nomColloque="";
$nomCol=$db->prepare('SELECT * FROM colloque where colloque.idCol='.$colloque);
try {
  $nomCol->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($nom = $nomCol->fetch()){ 
                $nbParticipants = $nom['nbParticipants'];
                $nomColloque = $nom['nomCol'];
            }



// Cout des Intervenant
$ren_intervenant=0;
$interv_ren=$db->prepare('SELECT Sum(renumInt) as renum FROM intervenant join colloque join intervenir where colloque.idCol=intervenir.idCol AND intervenir.idIntervenant=intervenant.idIntervenant AND intervenir.idCOl='.$colloque);
try {
  $interv_ren->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $interv_ren->fetch()){ 

                $ren_intervenant = $ren['renum'];
            }

// cout de transport 

$couttrens=0;

$cout_equiper=$db->prepare('SELECT Sum(cout) as coutT FROM voyager join transport join intervenir join colloque where colloque.idCol=intervenir.idCol AND voyager.idIntervenant=intervenir.idIntervenant AND transport.idTransport=voyager.idTransport AND Colloque.idCol='.$colloque);
try {
  $cout_equiper->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_equiper->fetch()){ 

                $couttrens = $ren['coutT'];
            }
// cout Hebergement 
$coutheb=0;
$cout_equiper=$db->prepare('SELECT Sum(prix_reel) as coutH FROM heberger join intervenir join colloque where colloque.idCol=intervenir.idCol AND intervenir.idIntervenant=heberger.idIntervenant AND Colloque.idCol='.$colloque);
try {
  $cout_equiper->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_equiper->fetch()){ 

                $coutheb = $ren['coutH'];
            }
  // Cout de publicité
            $cout_pub=0;
$pub_cout=$db->prepare('SELECT Sum(prix_reel) as cout FROM Publier join colloque where colloque.idCol=Publier.idCol AND colloque.idCol='.$colloque  );
try {
  $pub_cout->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $pub_cout->fetch()){ 

                $cout_pub = $ren['cout'];
            }

// renumeration Personnel
$ren_personnel=0;
$trav_ren=$db->prepare('SELECT Sum(remuneration*nbrCategorie) as renum FROM Travailler join colloque join CategoriePersonnel where colloque.idCol=Travailler.idCol AND CategoriePersonnel.idCat=Travailler.idCat AND Colloque.idCol='.$colloque);
try {
  $trav_ren->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $trav_ren->fetch()){ 

                $ren_personnel = $ren['renum'];
            }

// Cout Salle
            $coutsalle=0;
$cout_salle=$db->prepare('SELECT Sum(prix_reel) as tarif FROM Salle join Location join colloque where colloque.idCol=Location.idCol AND Salle.idSalle=Location.idSalle AND Colloque.idCol='.$colloque);
try {
  $cout_salle->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_salle->fetch()){ 

                $coutsalle = $ren['tarif'];
            }


// cout Repas
            $coutrepas=0;
$cout_repas=$db->prepare('SELECT Sum(prix_reel*nbRepas) as cout FROM Repas join colloque join Servir where colloque.idCol=Servir.idCol AND Repas.idRepas=Servir.idRepas AND Colloque.idCol='.$colloque);
try {
  $cout_repas->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_repas->fetch()){ 

                $coutrepas = $ren['cout'];
            }


// cout Equipement 
            $coutequiper=0;
$cout_equiper=$db->prepare('SELECT Sum(prix_reel*nbexemplaire+livraisonEqui) as coutE FROM Equiper join colloque join Equipement where Equiper.idEqui=Equipement.idEqui AND colloque.idCol=Equiper.idCol AND Colloque.idCol='.$colloque);
try {
  $cout_equiper->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_equiper->fetch()){ 

                $coutequiper = $ren['coutE'];
            }
// cout goodies
$coutGoo=0;            
$cout_equiper=$db->prepare('SELECT Sum(prix_reel*nbGoo) as coutG FROM distribuer join goodies join colloque where colloque.idCol=distribuer.idCol and distribuer.idGoo=goodies.idGoo AND Colloque.idCol='.$colloque);
try {
  $cout_equiper->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_equiper->fetch()){ 

                $coutGoo = $ren['coutG'];
            }


// cout Ressource
$coutR=0;
$cout_equiper=$db->prepare('SELECT Sum(prix_reel*nbRessource) as coutR FROM Utiliser join colloque where colloque.idCol=Utiliser.idCol AND Colloque.idCol='.$colloque);
try {
  $cout_equiper->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_equiper->fetch()){ 

                $coutR = $ren['coutR'];
            }

// nombre intervenants
            $nbInt=0;
$cout_equiper=$db->prepare('SELECT count(*) as nb FROM intervenir join colloque where colloque.idCol=Intervenir.idCol AND Colloque.idCol='.$colloque);
try {
  $cout_equiper->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_equiper->fetch()){ 

                $nbInt = $ren['nb'];
            }
// nombre personnel
$nbpar=0;
$cout_equiper=$db->prepare('SELECT SUM(nbrCategorie) as sum FROM Travailler join colloque where colloque.idCol=Travailler.idCol AND colloque.idCol='.$colloque);
try {

  $cout_equiper->execute();  
 
} catch (Exception $e) {
  exit($e ->getMessage());
}
            
 while($ren = $cout_equiper->fetch()){ 

                $nbpar = $ren['sum'];
            }
$Budget =$ren_intervenant+$coutheb+$couttrens+$coutrepas+$coutsalle+$coutequiper+$coutGoo+$cout_pub+$ren_personnel;

    $statement = $db->prepare('SELECT * FROM Colloque WHERE idCol='.$colloque);
            try {
             $statement->execute(); 
            } catch (Exception $e) {
                  exit($e ->getMessage());
            }
           

?>

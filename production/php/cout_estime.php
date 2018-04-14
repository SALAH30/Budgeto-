
<?php

// Colloque 
$nomColloque="";
$nomCol=$db->prepare('SELECT * FROM colloque where colloque.idCol='.$colloque);
try {
  $nomCol->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($nom = $nomCol->fetch()){ 

                $nomColloque = $nom['nomCol'];
            }



// Cout des Intervenant
$ren_intervenant_estime=0;
$interv_ren=$db->prepare('SELECT Sum(remuneration) as renum FROM intervenant join colloque join intervenir where colloque.idCol=intervenir.idCol AND intervenir.idIntervenant=intervenant.idIntervenant AND intervenir.idCOl='.$colloque);
try {
  $interv_ren->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $interv_ren->fetch()){ 

                $ren_intervenant_estime = $ren['renum'];
            }

// cout de transport 

$couttrens_estime=0;

$cout_equiper=$db->prepare('SELECT Sum(cout) as coutT FROM voyager join transport join intervenir join colloque where colloque.idCol=intervenir.idCol AND voyager.idIntervenant=intervenir.idIntervenant AND transport.idTransport=voyager.idTransport AND Colloque.idCol='.$colloque);
try {
  $cout_equiper->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_equiper->fetch()){ 

                $couttrens_estime = $ren['coutT'];
            }
// cout Hebergement 
$coutheb_estime=0;
$cout_equiper=$db->prepare('SELECT Sum(prix_estime) as coutH FROM heberger join intervenir join Hebergement join colloque where colloque.idCol=intervenir.idCol AND Hebergement.idH=heberger.idH AND intervenir.idIntervenant=heberger.idIntervenant AND Colloque.idCol='.$colloque);
try {
  $cout_equiper->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_equiper->fetch()){ 

                $coutheb_estime = $ren['coutH'];
            }
  // Cout de publicité
            $cout_pub_estime=0;
$pub_cout=$db->prepare('SELECT Sum(prix_estime) as cout FROM Publier join colloque join publicite where colloque.idCol=Publier.idCol AND publicite.idPub=Publier.idPub AND colloque.idCol='.$colloque  );
try {
  $pub_cout->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $pub_cout->fetch()){ 

                $cout_pub_estime = $ren['cout'];
            }

// renumeration Personnel
$ren_personnel_estime=0;
$trav_ren=$db->prepare('SELECT Sum(prix_estime*nbrCategorie) as renum FROM Travailler join colloque join CategoriePersonnel where colloque.idCol=Travailler.idCol AND CategoriePersonnel.idCat=Travailler.idCat AND Colloque.idCol='.$colloque);
try {
  $trav_ren->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $trav_ren->fetch()){ 

                $ren_personnel_estime = $ren['renum'];
            }

// Cout Salle
            $coutsalle_estime=0;
$cout_salle=$db->prepare('SELECT Sum(prix_estime) as tarif FROM Salle join Location join colloque where colloque.idCol=Location.idCol AND Salle.idSalle=Location.idSalle AND Colloque.idCol='.$colloque);
try {
  $cout_salle->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_salle->fetch()){ 

                $coutsalle_estime = $ren['tarif'];
            }


// cout Repas
            $coutrepas_estime=0;
$cout_repas=$db->prepare('SELECT Sum(prix_estime*nbRepas) as cout FROM Repas join colloque join Servir where colloque.idCol=Servir.idCol AND Repas.idRepas=Servir.idRepas AND Colloque.idCol='.$colloque);
try {
  $cout_repas->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_repas->fetch()){ 

                $coutrepas_estime = $ren['cout'];
            }


// cout Equipement 
            $coutequiper_estime=0;
$cout_equiper=$db->prepare('SELECT Sum(cout_estime*nbexemplaire+livraisonEqui) as coutE FROM Equiper join colloque join Equipement where Equiper.idEqui=Equipement.idEqui AND colloque.idCol=Equiper.idCol AND Colloque.idCol='.$colloque);
try {
  $cout_equiper->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_equiper->fetch()){ 

                $coutequiper_estime = $ren['coutE'];
            }
// cout goodies
$coutGoo_estime=0;            
$cout_equiper=$db->prepare('SELECT Sum(coutGoo*nbGoo) as coutG FROM distribuer join goodies join colloque where colloque.idCol=distribuer.idCol and distribuer.idGoo=goodies.idGoo AND Colloque.idCol='.$colloque);
try {
  $cout_equiper->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_equiper->fetch()){ 

                $coutGoo_estime = $ren['coutG'];
            }


// cout Ressource
$coutR_estime=0;
$cout_equiper=$db->prepare('SELECT Sum(prix_reel*nbRessource) as coutR FROM Utiliser join colloque where colloque.idCol=Utiliser.idCol AND Colloque.idCol='.$colloque);
try {
  $cout_equiper->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_equiper->fetch()){ 

                $coutR_estime = $ren['coutR'];
            }
$Budget_estime =$ren_intervenant_estime+$coutheb_estime+$couttrens_estime+$coutrepas_estime+$coutsalle_estime+$coutequiper_estime+$coutGoo_estime+$cout_pub_estime+$ren_personnel_estime;

    $statement = $db->prepare('SELECT * FROM Colloque WHERE idCol='.$colloque);
            try {
             $statement->execute(); 
            } catch (Exception $e) {
                  exit($e ->getMessage());
            }
           

?>

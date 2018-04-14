<?php 


$eventG = array();
$eventS= array();
$eventR= array();
$eventU= array();
$eventDI= array();
$eventE= array();

// Events de goodies 
$Date=$db->prepare('SELECT date FROM distribuer join colloque where colloque.idCol=distribuer.idCol AND colloque.idCol='.$_SESSION['idCol']);
try {
  $Date->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
$i=0;
            while($ren = $Date->fetch()){ 
     
                $eventG[$i] = $ren['date'];
     $i++;
            }
// Events de salle ____________________________________________
$i=0;
$Date=$db->prepare('SELECT dateS,duree FROM location join colloque where colloque.idCol=location.idCol AND Colloque.idCol='.$_SESSION['idCol']);
try {
  $Date->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}

            while($ren = $Date->fetch()){ 
     			$dure[$i] = $ren['duree'];
                $eventS[$i] = $ren['dateS'];
     $i++;
            }
// Events de Repas ____________________________________________
$i=0;
$Date=$db->prepare('SELECT dateR FROM servir join colloque where colloque.idCol=servir.idCol AND Colloque.idCol='.$_SESSION['idCol']);
try {
  $Date->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}

            while($ren = $Date->fetch()){ 
     
                $eventR[$i] = $ren['dateR'];
     $i++;
            }

// Events de Ressource ____________________________________________
$i=0;
$Date=$db->prepare('SELECT date FROM utiliser join colloque where colloque.idCol=utiliser.idCol AND Colloque.idCol='.$_SESSION['idCol']);
try {
  $Date->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}

            while($ren = $Date->fetch()){ 
     
                $eventU[$i] = $ren['date'];
     $i++;
            }


// Events de Equipement ____________________________________________
$i=0;
$Date=$db->prepare('SELECT date FROM equiper join colloque where colloque.idCol=equiper.idCol AND Colloque.idCol='.$_SESSION['idCol']);
try {
  $Date->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}

            while($ren = $Date->fetch()){ 
     
                $eventE[$i] = $ren['date'];
     $i++;
            }

// Events de Intervenant ____________________________________________
$i=0;
$Date=$db->prepare('SELECT dateDebut,dateFin FROM intervenir join colloque where colloque.idCol=intervenir.idCol AND Colloque.idCol='.$_SESSION['idCol']);
try {
  $Date->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}

            while($ren = $Date->fetch()){ 
     
                $eventDI[$i] = $ren['dateDebut'];
				$eventFI[$i] = $ren['dateFin'];
     $i++;
            }
//__________________________________________________________________


/// Affichage des evenements ///////////////////////////////////////
$i=0;

while($i<count($eventG)){

echo "{  
        title: 'goodies',
        start: new Date('<?php echo $eventG[$i];?>'),
        className : 'bg-danger',
      },
      ";
      $i++;
}
$i=0;
while($i<count($eventDI)){
echo "{  
        title: 'Intervenant',
        start: new Date('<?php echo $eventDI[$i];?>'),
        end: new Date('<?php echo $eventFI[$i];?>'),
        className : 'bg-success',
      },
      ";
      $i++;
}

$i=0;
while($i<count($eventE)){
echo "{  
        title: 'Equipement',
        start: new Date('<?php echo $eventE[$i];?>'),
        className : 'bg-linkedin',
      },
      ";
      $i++;
}

$i=0;
while($i<count($eventS)){
	$j=1;
	$eventFin[$i]=$eventS[$i];
	while($j<$dure[$i]){
		$eventFin[$i]++;
		$j++;
	}
echo "{  
        title: 'salle',
        start: new Date('<?php echo $eventS[$i];?>'),
        end: new Date('<?php echo $eventFin[$i];?>'), 
        className : 'bg-warning',
      },
      ";
      $i++;
}

$i=0;
while($i<count($eventU)){
echo "{  
        title: 'Ressource',
        start: new Date('<?php echo $eventU[$i];?>'),
        className : 'bg-twitter',
      },
      ";
      $i++;
}

$i=0;
while($i<count($eventR)){
echo "{  
        title: 'Repas',
        start: new Date('<?php echo $eventR[$i];?>'),
        className : 'bg-fb',
      },
      ";
      $i++;
}


      ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Budgito | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
  <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">

        <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">



    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">

       <?php 

include('php/sidebare.php'); ?>

<?php
$now   = time();
$date2 = strtotime('2016-05-14 16:01:05');
 
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
 
// Test de la fonction
$retour = dateDiff($now, $date2);
$day = $retour['day'];
?>



    <?php 
    if(isset($_GET['id'])){
// Cout des Intervenant
$interv_ren=$db->prepare('SELECT Sum(renumInt) as renum FROM intervenant join colloque join intervenir where colloque.idCol=intervenir.idCol AND intervenir.idIntervenant=intervenant.idIntervenant AND intervenir.idCOl='.$_GET['id']);
try {
  $interv_ren->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $interv_ren->fetch()){ 

                $ren_intervenant = $ren['renum'];
            }
  // Cout de publicité
$pub_cout=$db->prepare('SELECT Sum(prix_reel) as cout FROM Publier join colloque where colloque.idCol=Publier.idCol AND colloque.idCol='.$_GET['id']  );
try {
  $pub_cout->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $pub_cout->fetch()){ 

                $cout_pub = $ren['cout'];
            }

// renumeration Personnel

$trav_ren=$db->prepare('SELECT Sum(remuneration*nbrCategorie) as renum FROM Travailler join colloque join CategoriePersonnel where colloque.idCol=Travailler.idCol AND CategoriePersonnel.idCat=Travailler.idCat AND Colloque.idCol='.$_GET['id']);
try {
  $trav_ren->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $trav_ren->fetch()){ 

                $ren_personnel = $ren['renum'];
            }

// Cout Salle
$cout_salle=$db->prepare('SELECT Sum(prix_reel) as tarif FROM Salle join Location join colloque where colloque.idCol=Location.idCol AND Salle.idSalle=Location.idSalle AND Colloque.idCol='.$_GET['id']);
try {
  $cout_salle->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_salle->fetch()){ 

                $coutsalle = $ren['tarif'];
            }


// cout Repas
$cout_repas=$db->prepare('SELECT Sum(prix_reel*nbRepas) as cout FROM Repas join colloque join Servir where colloque.idCol=Servir.idCol AND Repas.idRepas=Servir.idRepas AND Colloque.idCol='.$_GET['id']);
try {
  $cout_repas->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_repas->fetch()){ 

                $coutrepas = $ren['cout'];
            }


// cout Equipement 
$cout_equiper=$db->prepare('SELECT Sum(prix_reel*nbexemplaire+livraisonEqui) as coutE FROM Equiper join colloque join Equipement where Equiper.idEqui=Equipement.idEqui AND colloque.idCol=Equiper.idCol AND Colloque.idCol='.$_GET['id']);
try {
  $cout_equiper->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_equiper->fetch()){ 

                $coutequiper = $ren['coutE'];
            }
// cout goodies            
$cout_equiper=$db->prepare('SELECT Sum(prix_reel*nbGoo) as coutG FROM distribuer join goodies join colloque where colloque.idCol=distribuer.idCol and distribuer.idGoo=goodies.idGoo AND Colloque.idCol='.$_GET['id']);
try {
  $cout_equiper->execute();  
} catch (Exception $e) {
  exit($e ->getMessage());
}
            while($ren = $cout_equiper->fetch()){ 

                $coutGoo = $ren['coutG'];
            }
// nombre intervenants
$cout_equiper=$db->prepare('SELECT count(*) as nb FROM intervenir join colloque where colloque.idCol=Intervenir.idCol AND Colloque.idCol='.$_GET['id']);
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
$cout_equiper=$db->prepare('SELECT SUM(nbrCategorie) as sum FROM Travailler join colloque where colloque.idCol=Travailler.idCol AND colloque.idCol='.$_GET['id']);
try {

  $cout_equiper->execute();  
 
} catch (Exception $e) {
  exit($e ->getMessage());
}
            
 while($ren = $cout_equiper->fetch()){ 

                $nbpar = $ren['sum'];
            }
$Budget =$ren_intervenant+$coutrepas+$coutsalle+$coutequiper+$coutGoo+$cout_pub+$ren_personnel;

    $statement = $db->prepare('SELECT * FROM Colloque WHERE idCol='.$_GET['id']);
            try {
             $statement->execute(); 
            } catch (Exception $e) {
                  exit($e ->getMessage());
            }
            while($option = $statement->fetch()){ 

$date1 = strtotime($option['dateColDebut']." 00:00:00 ");
$date2 = strtotime($option['dateColFin']." 00:00:00");

$dure = dateDiff($date2, $date1);
$day = $dure['day']; 
$day=$day+1;
$now   = time();

$dure2 = dateDiff($now,$date2);
$rest = $dure2['day']; 

?>
        <!-- page content -->
        <div class="right_col" role="main">

          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Budget</span>
              <div class="count"><?php echo $Budget; ?></div>
              <span class="count_bottom"><i class="green"></i> dinars algerien</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-calendar"></i> Jours restant</span>
              <div class="count"><?php echo $rest; ?></div>
              <span class="count_bottom"><i class="green"> date :</i>  12/08/2016</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Nbr participant</span>
              <div class="count green"><?php echo $option['nbParticipants'];?></div>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i>Nbr intervanant</span>
              <div class="count"><?php echo $nbInt; ?> </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Nbr Personnel</span>
              <div class="count"><?php
               echo $nbpar;
              ?></div>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Durée</span>
              <div class="count"><?php echo $day;
?> </div>
              <span class="count_bottom"><i class="green"></i> jours</span>
            </div>
          </div>
          <!-- /top tiles -->
<?php } ?>
          <br />
        
			
			 <?php 

    $statement = $db->prepare('SELECT * FROM Colloque WHERE idCol='.$_GET['id']);
            try {
             $statement->execute(); 
            } catch (Exception $e) {
                  exit($e ->getMessage());
            }
            while($option = $statement->fetch()){ ?>


          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_330">
                <div class="x_title">
                  <h2>répartition du budget </h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <h4>répartition du budget</h4>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Intervenants</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php try {
                            echo $ren_intervenant*100/$Budget;
                          } catch (Exception $e) {
                            
                          } ?>%;">
                          <span class="sr-only"><?php try {
                            echo $ren_intervenant*100/$Budget;
                          } catch (Exception $e) {
                            
                          } ?> %</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span><?php echo $ren_intervenant; ?></span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Personnel</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: <?php try {
                            echo $ren_personnel*100/$Budget;
                          } catch (Exception $e) {
                            
                          } ?>%;">
                          <span class="sr-only"><?php try {
                            echo $ren_personnel*100/$Budget;
                          } catch (Exception $e) {
                            
                          } ?>%</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
<span><?php echo $ren_personnel;?></span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>salle</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php try {
                            echo $coutsalle*100/$Budget;
                          } catch (Exception $e) {
                            
                          } ?>%;">
                          <span class="sr-only"><?php try {
                            echo $coutsalle*100/$Budget;
                          } catch (Exception $e) {
                            
                          } ?>%</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span><?php echo $coutsalle;?></span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Equipements</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php try {
                            echo $coutequiper*100/$Budget;
                          } catch (Exception $e) {
                            
                          } ?>%;">
                          <span class="sr-only" id="equi2"><?php try {
                            echo $coutequiper*100/$Budget;
                          } catch (Exception $e) {
                            
                          } ?>%</span>
                        </div>
                      </div>
                    </div>
                    <div id="eqiup" class="w_right w_20">
                      <span><?php echo $coutequiper;?></span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Repas</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php try {
                            echo $coutrepas*100/$Budget;
                          } catch (Exception $e) {
                            
                          } ?>%;">
                          <span class="sr-only"><?php try {
                            echo $coutrepas*100/$Budget;
                          } catch (Exception $e) {
                            
                          } ?>% </span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span><?php echo $coutrepas;?></span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
				  
				   <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Publicité/Goodies</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php 
$sum=$coutGoo+$cout_pub;
                        try 
                        {
                            echo $sum*100/$Budget;
                          } catch (Exception $e) {
                            
                          } ?>%;">
                          <span class="sr-only"><?php try {
                            echo $sum*100/$Budget;
                          } catch (Exception $e) {
                            
                          } ?>% </span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span><?php 
                      
                      echo $sum; ?></span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                </div>
              </div>
            </div>

      <div class="col-md-5 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_330">
                <div class="x_title">
                  <h2>Resultats</h2>

                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                
      <div id="resultat_pers">
                  
<button type="button" onclick="changeForm('tr');" class="btn btn-success col-sm-12 col-xs-12">Ajouter Personne</button> 
          </div>
                
                <div id="resultat_repas">
<button type="button" onclick="changeForm('rp');" class="btn btn-success col-sm-12 col-xs-12">Ajouter repas</button>           

                </div>

                <div>
<button type="button" onclick="changeForm('eq');" class="btn btn-success col-sm-12 col-xs-12">Ajouter Equipement</button> 
                </div>
                <div id="resultat_goo">
<button type="button" onclick="changeForm('gd');" class="btn btn-success col-sm-12 col-xs-12">Ajouter Goodies</button> 

                </div>
                <div id="resultat_salle">
<button type="button" onclick="changeForm('sl');" class="btn btn-success col-sm-12 col-xs-12">Ajouter Salle</button>                 


                </div>
                <div id="resultat_int">
<button type="button" onclick="changeForm('in');" class="btn btn-success col-sm-12 col-xs-12">Ajouter Intervenant</button>                


                </div>
                <div id="resultat_pub">
<button type="button" onclick="changeForm('pb');" class="btn btn-success col-sm-12 col-xs-12">Ajouter Publicité</button>             


                </div>

</div>
</div>  
</div>

           <div id="tr" class="col-md-12 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_330">
                <div class="x_title">
                  <h2>Travailleur</h2>

                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Personnel <span class="required">*</span>          
    </label>
                      <div class="col-md-6 col-sm-6 col-xs-8">
                      <select id="Pers" class="form-control chzn-select" tabindex="2" name ="Pers">
<?php   $statement1 = $db->prepare('SELECT nomCategorie FROM CategoriePersonnel');
$statement1->execute();  

while($option1 = $statement1->fetch()){ ?>

<option value="<?php echo $option1['nomCategorie']; ?>" >

 <?php echo $option1['nomCategorie']; ?>
   

 </option>
 
<?php } ?>

                      </select>   

                      </div> 
                      </div>


                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">nombre de personnes <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="nombre_personnel" name="nombre_personnel" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                      </div>

                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Rénumération <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="renum_personnel" name="renum_personnel" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                      </div>
                      <div class="col-md-3 col-sm-10 col-xs-12 col-md-offset-10">
<button type="button" onclick="add_pers();" class="btn btn-success col-sm-7">Ajouter Personne</button>
                        </div>

<input id="idCol" name="idCol" type="text" hidden value="<?php echo $_GET['id']; ?>">
</form>

</div>
</div>
</div>

            <div id="sl" class="col-md-12 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_330">
                <div class="x_title">
                  <h2>Salle</h2>

                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  

<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

          <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Salle <span class="required">*</span>          
    </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
        <select id="salle" class="form-control chzn-select" tabindex="2" name ="salle">
  <?php   $statement1 = $db->prepare('SELECT nomSalle FROM salle');
             $statement1->execute();  

 while($option1 = $statement1->fetch()){ ?>
          <option value="<?php echo $option1['nomSalle']; ?>" > <?php echo $option1['nomSalle']; ?></option>
                 <?php } ?>

                        </select>   

</div>

</div>

                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Date <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="dateS" name="dateS" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Durée <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="duree" name="duree" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                      </div>


                      <div class="col-md-3 col-sm-10 col-xs-12 col-md-offset-10">

 <button type="button" onclick="add_salle();" class="btn btn-success">Ajouter Salle</button></div>
<input id="idCol" name="idCol" value="<?php echo $_GET['id'];?>" type="text" hidden>
</form>

     </div>
              </div>
            </div>

                  <div id="eq" class="col-md-12 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_330">
                <div class="x_title">
                  <h2>Equipement</h2>

                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  


   <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

          <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Equipement <span class="required">*</span>          
    </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
        <select id="equi" class="form-control chzn-select" tabindex="2" name ="equi">
  <?php   $statement1 = $db->prepare('SELECT * FROM Equipement');
             $statement1->execute();  

 while($option1 = $statement1->fetch()){ ?>
          <option value="<?php echo $option1['nomEquipement']; ?>" > <?php echo $option1['nomEquipement']; ?></option>
                 <?php } ?>

                        </select>   

</div> 
</div>
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">nombre d'exemplaire <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="exemplaire_equipement" name="exemplaire" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">coût de livraison <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="livraison_equipement" name="livraison" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-10 col-xs-12 col-md-offset-10">

<button type="button" onclick="add_equi();" class="btn btn-success">Ajouter Equipement</button>
</div>
<input id="idCol" name="idCol" value="<?php echo $_GET['id'];?>" type="text" hidden>
</form>

     </div>
              </div>
            </div>

                  <div id="rp" class="col-md-12 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_330">
                <div class="x_title">
                  <h2>Repas</h2>

                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  

<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

          <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Repas <span class="required">*</span>          
    </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
        <select id="repas" class="form-control chzn-select" tabindex="2" name ="repas">
  <?php   $statement1 = $db->prepare('SELECT * FROM Repas');
             $statement1->execute();  

 while($option1 = $statement1->fetch()){ ?>
          <option value="<?php echo $option1['idRepas']; ?>" > <?php echo $option1['nomRepas']; ?></option>
                 <?php } ?>

                        </select>   

</div>

</div>
              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">nombre 
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="nb_Repas" name="nb_Repas" class="form-control col-md-7 col-xs-12">
                  </div>
                  </div>


                      <div class="col-md-3 col-sm-10 col-xs-12 col-md-offset-10">

 <button type="button" onclick="add_repas();" class="btn btn-success">Ajouter Repas</button>
 </div>
<input id="idCol" name="idCol" value="<?php echo $_GET['id'];?>" type="text" hidden>

</form>



     </div>
              </div>
            </div>
             <div id="gd" class="col-md-12 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_330">
                <div class="x_title">
                  <h2>Goodies</h2>

                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  

    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

          <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Goodies <span class="required">*</span>          
    </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
        <select id="goo" class="form-control chzn-select" tabindex="2" name ="goo">
  <?php   $statement1 = $db->prepare('SELECT * FROM Goodies');
             $statement1->execute();  

 while($option1 = $statement1->fetch()){ ?>
          <option value="<?php echo $option1['idGoo']; ?>" > <?php echo $option1['nomGoo']; ?></option>
                 <?php } ?>

                        </select>   

</div>   

</div>

<div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">nombre d'exemplaire 
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="exempg" name="exempg" class="form-control col-md-7 col-xs-12">
                  </div>
                  </div>

                      <div class="col-md-3 col-sm-10 col-xs-12 col-md-offset-10">

<button type="button" onclick="add_goo();" class="btn btn-success">Ajouter Goodie</button>
</div>
<input id="idCol" name="idCol" value="<?php echo $_GET['id'];?>" type="text" hidden>
  </form>


                </div>
              </div>
            </div>


                  <div id="pb" class="col-md-12 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_330">
                <div class="x_title">
                  <h2>Publicité</h2>

                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  

    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

          <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Publicite <span class="required">*</span>          
    </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
        <select id="pub" class="form-control chzn-select" tabindex="2" name ="pub">
  <?php   $statement1 = $db->prepare('SELECT * FROM Publicite');
             $statement1->execute();  

 while($option1 = $statement1->fetch()){ ?>
          <option value="<?php echo $option1['idPub']; ?>" > <?php echo $option1['typePub']; ?></option>
                 <?php } ?>

                        </select>   

</div>   

</div>
<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cout <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="coutpub" name="coutpub" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
                      <div class="col-md-3 col-sm-10 col-xs-12 col-md-offset-10">

<button type="button" onclick="add_pub();" class="btn btn-success">Ajouter Publicite</button>
</div>
<input id="idCol" name="idCol" value="<?php echo $_GET['id'];?>" type="text" hidden>
  </form>


                </div>
              </div>
            </div>



           
                  <div id="in" class="col-md-12 col-sm-10 col-xs-12">
              <div class="x_panel tile fixed_height_330">
                <div class="x_title">
                  <h2>Intervenant</h2>

                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">


<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

          <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Intervenant <span class="required">*</span>          
    </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
        <select id="Int" class="form-control chzn-select" tabindex="2" name ="Int">
      <?php   $statement1 = $db->prepare('SELECT * FROM Intervenant');
               $statement1->execute();  

        while($option1 = $statement1->fetch()){ ?>
          <option value="<?php echo $option1['idIntervenant']; ?>" > <?php echo $option1['nom']; ?></option>
                 <?php } ?>

                        </select>   

    </div> 
   </div>

    <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Rénumération <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="renum_Int" name="renum_Int" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
                
                <div class="form-group">
                <label for="date" class="control-label col-md-3 col-sm-3 col-xs-12">Date Début/Fin d'intervention <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <!--<div id="reportrange_right" class="pull-left" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                  <span>December 30, 2015 - January 28, 2016</span> <b class="caret"></b>
                </div>-->
                <input id="date_df" name="date_df" class="form-control" value="2016-11-31 - 2016-12-31" type="text"> 
                </div>
                </div>
                
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">prise en charge</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="">
                  <label>
                    <input id="heb_Int" name="heb_Int" type="checkbox" class="js-switch" onclick="validate_heb();"/> hébergement
                  </label>
                  </div>
                  <div class="">
                  <label>
                    <input id="trans_Int" name="trans_Int" type="checkbox" class="js-switch" onclick="validate_trans();" /> transport
                  </label>
                  </div>
                </div>
                </div>

                 <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Hébergement </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nom_heb" name="nom_heb" class="form-control" disabled="disabled" placeholder="nom">
                </div>
                </div>
                 <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="adr_heb" name="adr_heb" class="form-control" disabled="disabled" placeholder="adresse">
                </div>
                </div>
                 <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="dure_heb" name="dure_heb" class="form-control" disabled="disabled" placeholder="durée">
                </div>
                </div>
                 <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="cout_heb" name="cout_heb" class="form-control" disabled="disabled" placeholder="coût">
                </div>
                </div>
               
                
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Transport</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="type_trans" name="type_trans" class="form-control" disabled="disabled" placeholder="type">
                </div>
                </div>
                 <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="classe_trans" name="classe_trans" class="form-control" disabled="disabled" placeholder="classe">
                </div>
                </div>
                 <div class="form-group">
              
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="cout_trans" name="cout_trans" class="form-control" disabled="disabled" placeholder="coût">
                </div>
                </div>
                
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="lieud_trans" name="lieud_trans" class="form-control" disabled="disabled" placeholder="lieu départ">
                </div>
                </div>
                
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="lieua_trans" name="lieua_trans" class="form-control" disabled="disabled" placeholder="lieu arrivée">
                </div>
                </div>
                
                 <div class="form-group">
                <label for="date" class="control-label col-md-3 col-sm-3 col-xs-12">Date Aller/Retour </span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <!-- <div id="reportrange_right_2" name="reportrange_right_2" class="pull-left" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                  <span >December 30, 2015 - January 28, 2016</span> <b class="caret"></b>
                </div>-->
                <input id="date_ar" name="date_ar" class="form-control" value="2016-11-31 - 2016-12-31" type="text"> 
                </div>
                </div>
                                      <div class="col-md-3 col-sm-10 col-xs-12 col-md-offset-10">

                <button type="button" onclick="add_int();" class="btn btn-success">Ajouter Intervenant</button>
                </div>
                <input id="idCol" name="idCol" value="<?php echo $_GET['id'];?>" type="text" hidden>
</form>


     </div>
   </div>
</div> 




              </div>
            </div>
          </div>
        </div>
           <?php }
           }else{




            } ?>
        <!-- /page content -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Insertion</h4>
      </div>
      <div class="modal-body">
        <p id="resultat_equi"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/ajax/add.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
        <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>

    <script src="../vendors/autosize/dist/autosize.min.js"></script>

    <script src="../vendors/bernii/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
        <script src="../vendors/switchery/dist/switchery.min.js"></script>

    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="js/flot/jquery.flot.orderBars.js"></script>
    <script src="js/flot/date.js"></script>
    <script src="js/flot/jquery.flot.spline.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <!-- jVectorMap -->
    <script src="js/maps/jquery-jvectormap-2.0.3.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="js/moment/moment.min.js"></script>
    <script src="js/datepicker/daterangepicker.js"></script>



    <!-- Custom Theme Scripts -->
    <script src="js/custom.js"></script>
 <script type="text/javascript">
                  function validate_trans(){

    document.getElementById('type_trans').disabled= !document.getElementById('type_trans').disabled;
    document.getElementById('classe_trans').disabled= !document.getElementById('classe_trans').disabled;
    document.getElementById('cout_trans').disabled= !document.getElementById('cout_trans').disabled;
    document.getElementById('lieua_trans').disabled= !document.getElementById('lieua_trans').disabled;
    document.getElementById('lieud_trans').disabled= !document.getElementById('lieud_trans').disabled;
                  }
                </script>
                  <script type="text/javascript">
    document.getElementById('rp').setAttribute('style','display:none');
    document.getElementById('gd').setAttribute('style','display:none');
    document.getElementById('in').setAttribute('style','display:none');
    document.getElementById('sl').setAttribute('style','display:none');
    document.getElementById('eq').setAttribute('style','display:none');
    document.getElementById('pb').setAttribute('style','display:none');
function changeForm(id){
    document.getElementById(id).setAttribute('style','display:block');
  if (id=='tr') {
    document.getElementById('rp').setAttribute('style','display:none');
    document.getElementById('gd').setAttribute('style','display:none');
    document.getElementById('in').setAttribute('style','display:none');
    document.getElementById('sl').setAttribute('style','display:none');
    document.getElementById('eq').setAttribute('style','display:none');
    document.getElementById('pb').setAttribute('style','display:none');
  }
  else if (id=='rp') {
    document.getElementById('tr').setAttribute('style','display:none');
    document.getElementById('gd').setAttribute('style','display:none');
    document.getElementById('in').setAttribute('style','display:none');
    document.getElementById('sl').setAttribute('style','display:none');
    document.getElementById('pb').setAttribute('style','display:none');
    document.getElementById('eq').setAttribute('style','display:none');
      }
        else if (id=='gd') { 
    document.getElementById('eq').setAttribute('style','display:none');
    document.getElementById('rp').setAttribute('style','display:none');
    document.getElementById('tr').setAttribute('style','display:none');
    document.getElementById('in').setAttribute('style','display:none');
    document.getElementById('sl').setAttribute('style','display:none');
    document.getElementById('pb').setAttribute('style','display:none');}
        else if (id=='in') {
    document.getElementById('rp').setAttribute('style','display:none');
    document.getElementById('gd').setAttribute('style','display:none');
    document.getElementById('eq').setAttribute('style','display:none');
    document.getElementById('tr').setAttribute('style','display:none');
    document.getElementById('sl').setAttribute('style','display:none');
    document.getElementById('pb').setAttribute('style','display:none');}
        else if (id=='sl') {
    document.getElementById('rp').setAttribute('style','display:none');
    document.getElementById('gd').setAttribute('style','display:none');
    document.getElementById('in').setAttribute('style','display:none');
    document.getElementById('tr').setAttribute('style','display:none');
    document.getElementById('pb').setAttribute('style','display:none');
    document.getElementById('eq').setAttribute('style','display:none');}
        else if (id=='pb') {
    document.getElementById('rp').setAttribute('style','display:none');
    document.getElementById('gd').setAttribute('style','display:none');
    document.getElementById('in').setAttribute('style','display:none');
    document.getElementById('sl').setAttribute('style','display:none');
    document.getElementById('tr').setAttribute('style','display:none');
    document.getElementById('eq').setAttribute('style','display:none');}
  else {
    document.getElementById('rp').setAttribute('style','display:none');
    document.getElementById('gd').setAttribute('style','display:none');
    document.getElementById('in').setAttribute('style','display:none');
    document.getElementById('sl').setAttribute('style','display:none');
    document.getElementById('pb').setAttribute('style','display:none');
    document.getElementById('tr').setAttribute('style','display:none');
  }



}

                </script>
     <script type="text/javascript">
   
   function validate_heb(){

    document.getElementById('nom_heb').disabled= !document.getElementById('nom_heb').disabled;
    document.getElementById('adr_heb').disabled= !document.getElementById('adr_heb').disabled;
    document.getElementById('dure_heb').disabled= !document.getElementById('dure_heb').disabled;
    document.getElementById('cout_heb').disabled= !document.getElementById('cout_heb').disabled;
 
   }</script>
    <!-- Flot -->
    <script>
      $(document).ready(function() {
        var data1 = [
          [gd(2012, 1, 1), 17],
          [gd(2012, 1, 2), 74],
          [gd(2012, 1, 3), 6],
          [gd(2012, 1, 4), 39],
          [gd(2012, 1, 5), 20],
          [gd(2012, 1, 6), 85],
          [gd(2012, 1, 7), 7]
        ];

        var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 6],
          [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
          data1, data2
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
          },
          colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
          xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: false
        });

        function gd(year, month, day) {
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
    <!-- /Flot -->

    <!-- jVectorMap -->
    <script src="js/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/maps/jquery-jvectormap-us-aea-en.js"></script>
    <script src="js/maps/gdp-data.js"></script>
    <script>
      $(document).ready(function(){
        $('#world-map-gdp').vectorMap({
          map: 'world_mill_en',
          backgroundColor: 'transparent',
          zoomOnScroll: false,
          series: {
            regions: [{
              values: gdpData,
              scale: ['#E6F2F0', '#149B7E'],
              normalizeFunction: 'polynomial'
            }]
          },
          onRegionTipShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
    <!-- /jVectorMap -->

    <!-- Skycons -->
    <script>
      $(document).ready(function() {
        var icons = new Skycons({
            "color": "#73879C"
          }),
          list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;

        for (i = list.length; i--;)
          icons.set(list[i], list[i]);

        icons.play();
      });
    </script>
    <!-- /Skycons -->

    <!-- Doughnut Chart -->
    <script>
      $(document).ready(function(){
        var options = {
          legend: false,
          responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]
            }]
          },
          options: options
        });
      });
    </script>
    <!-- /Doughnut Chart -->
    
    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {

        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- gauge.js -->
    <script>
      var opts = {
          lines: 12,
          angle: 0,
          lineWidth: 0.4,
          pointer: {
              length: 0.75,
              strokeWidth: 0.042,
              color: '#1D212A'
          },
          limitMax: 'false',
          colorStart: '#1ABC9C',
          colorStop: '#1ABC9C',
          strokeColor: '#F0F3F3',
          generateGradient: true
      };
      var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 6000;
      gauge.animationSpeed = 32;
      gauge.set(3200);
      gauge.setTextField(document.getElementById("gauge-text"));
    </script>
    <!-- /gauge.js -->
  </body>
</html>
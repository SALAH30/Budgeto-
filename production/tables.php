<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="../accueil/img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../accueil/img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="../accueil/img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="../accueil/img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="../accueil/img/favicons/manifest.json">
	<link rel="shortcut icon" href="../accueil/img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="../accueil/img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
    <title>Budgito | tables des ressources </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
	 <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <?php
include('php/sidebare_col.php');
$dbc = new PDO("mysql:host=localhost;dbname=budgeto;charset=utf8", "root", "");
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$colloque = $_SESSION['idCol'];
include('php/cout.php');
include('php/cout_estime.php');
?>
<?php
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $db = new PDO("mysql:host=localhost;dbname=Budgeto;charset=utf8", "root", "");
            $statement = $db->prepare('SELECT * FROM Colloque where idUser='.$_SESSION['iduser'].' AND idCol='.$_SESSION['idCol']);
            $statement->execute();
			$option = $statement->fetch();
             ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
			
            <div class="page-title">
              <div class="title_left">
                <h3>  
					 <?php echo ' Colloque : '.$option['nomCol'] ?> / Tables des ressources
				</h3>
              </div>
            </div>

            <div class="clearfix"></div>
			 
			  <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-calculator"></i>
                  </div>
                  <div class="count"><?php echo number_format($Budget+$Budget*0.05, 2, ',', '.') ;?> DA</div>
                  <h3>Budget réel (avec une marge de 5%) </h3>
                </div>
              </div>
        <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i>
                  </div>
                  <div class="count"><?php echo number_format($Budget, 2, ',', '.');?> DA</div>

                  <h3>Budget réel</h3>
                </div>
              </div>
			 

       <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-calculator"></i>
                  </div>
                  <div class="count"><?php echo number_format($Budget_estime+$Budget_estime*0.05, 2, ',', '.') ;?> DA</div>
                  <h3>Budget Prévu (avec une marge de 5%) </h3>
                </div>
              </div>
        <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i>
                  </div>
                  <div class="count"><?php echo number_format($Budget_estime, 2, ',', '.');?> DA</div>

                  <h3>Budget Prévu</h3>
                </div>
              </div>
			<div>

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#salle" aria-controls="salle" role="tab" data-toggle="tab">Salle</a></li>
				<li role="presentation"><a href="#pers" aria-controls="pers" role="tab" data-toggle="tab">Personnels</a></li>
				<li role="presentation"><a href="#equip" aria-controls="equip" role="tab" data-toggle="tab">Equipements</a></li>
				<li role="presentation"><a href="#intervenant" aria-controls="intervenant" role="tab" data-toggle="tab">Intervenants</a></li>
				<li role="presentation"><a href="#pub" aria-controls="pub" role="tab" data-toggle="tab">Publicité</a></li>
				<li role="presentation"><a href="#goodies" aria-controls="goodies" role="tab" data-toggle="tab">Goodies</a></li>
				<li role="presentation"><a href="#resto" aria-controls="resto" role="tab" data-toggle="tab">Réstauration</a></li>
				<li role="presentation"><a href="#autre" aria-controls="autre" role="tab" data-toggle="tab">Autre</a></li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="salle">
				<div class="row">
				<br/>
				<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Salles <small> </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-hover table-striped table-bordered" class="display">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nom</th>
                          <th>Type</th>
                          <th style="width:15%;">Adresse</th>
						  <th>Surface</th>
                          <th>Tarif estimé</th>
						  <th>Tarif réel</th>
						  <th>Nbr de place</th>
						  <th>Durée d'allocation </th>
						  <th>Date Allocation</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          try {
                              $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                              $bdh = new PDO("mysql:host=localhost;dbname=Budgeto;charset=utf8", "root", "");
                             $reponse_sall = $bdh->query('SELECT * FROM Salle s INNER JOIN location l ON s.idSalle=l.idSalle WHERE l.idCol='.$_SESSION['idCol']);
                              $reponse_sall_surface = $bdh->query('SELECT SUM(surface) sur FROM Salle s INNER JOIN location l ON s.idSalle=l.idSalle  WHERE l.idCol='.$_SESSION['idCol']);
                              $reponse_sall_tarif = $bdh->query('SELECT SUM(prix_estime) tar FROM Salle s INNER JOIN location l ON s.idSalle=l.idSalle WHERE l.idCol='.$_SESSION['idCol']);
							   $reponse_sall_tarif_reel = $bdh->query('SELECT SUM(prix_reel) tarR FROM Salle s INNER JOIN location l ON s.idSalle=l.idSalle WHERE l.idCol='.$_SESSION['idCol']);
                              $reponse_sall_capacite = $bdh->query('SELECT SUM(capacite) cap FROM Salle s INNER JOIN location l ON s.idSalle=l.idSalle WHERE l.idCol='.$_SESSION['idCol']);
							  $reponse_sall_duree = $bdh->query('SELECT SUM(duree) sumDuree FROM Salle s INNER JOIN location l ON s.idSalle=l.idSalle WHERE l.idCol='.$_SESSION['idCol']);

                              $i=1;
                              $reponse_sall->execute();
                              while ($table = $reponse_sall->fetch()) {
                                  ?>
                                  <tr>
                                      <th scope="row"><?php echo $i++ ?></th>
                                      <td><?php echo $table['nomSalle']; ?></td>
                                      <td><?php echo $table['typeSalle']; ?></td>
                                      <td><?php echo $table['adresse']; ?></td>
                                      <td><?php echo number_format($table['surface'], 2, ',', ' '); ?></td>
                                      <td><?php echo number_format($table['prix_estime'], 2, ',', '.').' DA'; ?></td>
									  <td><?php echo number_format($table['prix_reel'], 2, ',', '.').' DA'; ?></td>
                                      <td><?php echo number_format($table['capacite'], 2, ',', ' '); ?> </td>
									  <td><?php echo number_format($table['duree'], 0, ',', ' ').' jours'; ?> </td>
									  <td><?php echo $table['dateS']; ?> </td>
                                  </tr>
                                  <?php
                              }
                          }catch(Exception $e) {
                              die('Erreur : ' . $e->getMessage());
                          }
                          ?>
                          <tr>
                              <th scope="row">Total</th>
                              <td>#</td>
                              <td>#</td>
                              <td>#</td>
                              <td><?php if ($table = $reponse_sall_surface->fetch()) echo  number_format($table['sur'], 2, ',', ' '); ?></td>
                              <td><?php if ($table = $reponse_sall_tarif->fetch()) echo number_format($table['tar'], 2, ',', '.').' DA'; ?></td>
							  <td><?php if ($table = $reponse_sall_tarif->fetch()) echo number_format($table['tarR'], 2, ',', '.').' DA'; ?></td>
							  <td><?php if ($table = $reponse_sall_capacite->fetch()) echo number_format($table['cap'], 2, ',', ' '); ?></td>
                              <td><?php if ($table = $reponse_sall_capacite->fetch()) echo number_format($table['sumDuree'], 2, ',', ' '); ?></td>
							  <td>#</td>
                          </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
	
	
				</div>
				</div>
				
		 <div role="tabpanel" class="tab-pane" id="pers">
				<div class="row">
				<br/>
			<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Personnels <small> </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons-2" class="table table-hover table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Catégories</th>
						  <th>nbr de personnes</th>
              <th>Rémunération Prévue</th>
						  <th>Rémunération </th>
						  <th>Rénumération par catégorie </th>
						  <th>Modifier</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php

                          try {
                              $reponse_equipement = $bdh->query('SELECT * 
								FROM categoriepersonnel c
								LEFT JOIN travailler t ON c.idCat = t.idCat
								WHERE t.idCol='.$_SESSION['idCol']);
                              $i=1;
                              $reponse_equipement->execute();
                              while ($table = $reponse_equipement->fetch()) {
                                  ?>
                                  <tr>
                                      <th scope="row"><?php echo $i++ ?></th>
                                      <td><?php echo $table['nomCategorie']; ?></td>
                                      <td><?php echo number_format($table['nbrCategorie'], 0, '', ' '); ?></td>
                    <td><?php echo number_format($table['prix_estime'], 2, ',', '.').' DA'; ?></td>
									  <td><?php echo number_format($table['remuneration'], 2, ',', '.').' DA'; ?></td>
									  <td><?php echo number_format($table['remuneration']*$table['nbrCategorie'], 2, ',', '.').' DA'; ?></td>
									   <td><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#modalPer"><i class="fa fa-edit "></i> Modifier</button>
									  <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i> supprimer</button>
									  </td>
                                  </tr>
                                  <?php
                              }
                          }catch(Exception $e) {
                              die('Erreur : ' . $e->getMessage());
                          }

                          ?>
                        </tr>
                        <tr>
                          <th scope="row">Total</th>
                          <td></td>
						  <td></td>
						  <td></td>
						  <td></td>
						  <td></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
			  
				
				</div>
				</div>
				
				<div role="tabpanel" class="tab-pane" id="equip">
				<div class="row">
				<br/>
					  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Equipements <small>  </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons-3" class="table table-hover table-striped  table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Equipement</th>
                          <th>Coût unitaire estimé</th>
						  <th>Coût unitaire réel</th>
						  <th>Nbr exemplaire</th>
						  <th>Coût livraison</th>
						  <th>Total par équipement (estimé)</th>
						  <th>Total par équipement (réel)</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          try {
						$reponse_equi = $bdh->query('SELECT * 
													FROM Equipement q
													INNER JOIN equiper e ON q.idEqui = e.idEqui
													WHERE idCol ='.$_SESSION['idCol']);
						$reponse_equi_pe = $bdh->query('SELECT SUM(cout_estime) sumce FROM Equipement q INNER JOIN equiper e ON q.idEqui = e.idEqui WHERE idCol ='.$_SESSION['idCol']);
						$reponse_equi_pr = $bdh->query('SELECT SUM(prix_reel) sumcr FROM Equipement q INNER JOIN equiper e ON q.idEqui = e.idEqui WHERE idCol ='.$_SESSION['idCol']);
						$reponse_equi_lv = $bdh->query('SELECT SUM(LivraisonEqui) sumlv FROM Equipement q INNER JOIN equiper e ON q.idEqui = e.idEqui WHERE idCol ='.$_SESSION['idCol']);
						$reponse_equi_ex = $bdh->query('SELECT SUM(nbexemplaire) sumex FROM Equipement q INNER JOIN equiper e ON q.idEqui = e.idEqui WHERE idCol ='.$_SESSION['idCol']);
						$cee=0;$cer=0; $tcee=0;$tcer=0;
                            while ($table = $reponse_equi->fetch()) {
                          ?>
							<?php $cee= $table['nbexemplaire']*$table['cout_estime']+$table['LivraisonEqui'];
								$cer =$table['nbexemplaire']*$table['prix_reel']+$table['LivraisonEqui'];
								$tcee += $cee; $tcer +=$cer;
							?>
                            <tr>
                              <th scope="row"><?php echo $i++ ?></th>
                              <td><?php echo $table['nomEquipement']; ?></td>
                              <td><?php echo number_format($table['cout_estime'],2, ',', '.').' DA'; ?></td>
							  <td><?php echo number_format($table['prix_reel'],2, ',', '.').' DA'; ?></td>
							  <td><?php echo number_format($table['nbexemplaire'],0, '', ' '); ?></td>
                              <td><?php echo number_format($table['LivraisonEqui'],2, ',', '.').' DA'; ?></td>
							  <td><?php echo number_format($cee,2, ',', '.').' DA'; ?></td>
							  <td><?php echo number_format($cer,2, ',', '.').' DA'; ?></td>
                            </tr>
                              <?php
                          }}
                          catch(Exception $e) {
                              die('Erreur : ' . $e->getMessage());
                          }
                          ?>
                        <tr>
						  <td>Total</td>
						  <td>#</td>
						  <td><?php $table = $reponse_equi_pe->fetch(); echo number_format($table['sumce'],2, ',', '.').' DA'; ?></td>
						  <td><?php $table = $reponse_equi_pr->fetch(); echo number_format($table['sumcr'],2, ',', '.').' DA'; ?></td>
						  <td><?php $table = $reponse_equi_ex->fetch(); echo number_format($table['sumex'],0, '', ' '); ?></td>
                          <td><?php $table = $reponse_equi_lv->fetch(); echo number_format($table['sumlv'],2, ',', '.').' DA'; ?></td>
						  <td><?php echo number_format($tcee,2, ',', '.').' DA'; ?></td>
						  <td><?php echo number_format($tcer,2, ',', '.').' DA'; ?></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
				
				</div>
				</div>
				
				<div role="tabpanel" class="tab-pane" id="intervenant">
				<div class="row">
				<br/>
				
						  
			    <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Intervenants<small> 
                     </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons-4" class="table table-hover table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
						  <th>ID</th>
                          <th>Nom</th>
                          <th>Prénom</th>
                          <th>Rémunération estimé</th>
						  <th>Rémunération réelle</th>
						  <th>Hébergement </th>
						 <th>Transports</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php

                        try {
                            $reponse_interv = $bdh->query('SELECT i.idIntervenant,nom,prenome,renumInt,	idTransport,h.idH,g.prix_estime,g.nomH,h.prix_reel ,remuneration, g.duree as dureeH , COUNT( h.idH ) nbH, COUNT( idTransport ) nbT, SUM(renumInt) rem
							FROM intervenant i
							INNER JOIN intervenir r ON r.idIntervenant=i.idIntervenant
							LEFT JOIN heberger h ON h.idIntervenant = i.idIntervenant
							JOIN hebergement g ON g.idH = h.idH
							LEFT JOIN voyager v ON v.idIntervenant = i.idIntervenant
							WHERE r.idCol='.$_SESSION['idCol'].' GROUP BY i.idIntervenant');
							
                            $i=1;
                            $reponse_interv->execute();
							$tote =0; $totr =0; $totHe =0; $totHr =0;
                            while ($table = $reponse_interv->fetch()) {
								
								$tote+=$table['remuneration'];
								$totr+=$table['renumInt'];
								$totHe += $table['prix_estime']*$table['dureeH'];
								$totHr += $table['prix_reel']*$table['dureeH'];
                                ?>
                                <tr>
									<th scope="row"><?php echo $i++ ?></th>
                                    <td><?php echo $table['idIntervenant']; ?></td>
                                    <td><?php echo $table['nom']; ?></td>
                                    <td><?php echo $table['prenome']; ?></td>
									<td><?php echo  number_format($table['remuneration'],2, ',', '.').' DA'; ?></td>
									<td><?php echo  number_format($table['renumInt'],2, ',', '.').' DA'  ?></td>
									<td><?php if  ($table['nbH'] == 0) echo 'Pas d\'hébergement' ; 
											  else echo 'Nom : '.$table['nomH'].'<br/>'.'Durée :'.$table['dureeH'].' jours'.'<br/>'.'coût estimé : '. number_format($table['prix_estime']*$table['dureeH'],2, ',', '.').' DA'.'<br/>'.'coût réel : '. number_format($table['prix_reel']*$table['dureeH'],2, ',', '.').' DA'  ; ?></td>
									<td><?php if  ($table['nbT'] == 0) echo 'Pas de transport' ; 
											  else echo 'id Transport '.$table['idTransport']  ; ?></td>
									
                                </tr>
                                <?php
                            }
                        }catch(Exception $e) {
                            die('Erreur : ' . $e->getMessage());
                        }

                      ?>
                        <tr>
                          <th scope="row">Total</th>
						  <td>#</td>
                          <td>#</td>
                          <td>#</td>
                          <td><?php echo number_format($tote,2, ',', '.').' DA'?></td>
						  <td><?php echo number_format($totr,2, ',', '.').' DA'?></td>
						  <td><?php echo 'Coût total estimé : '.number_format($totHe,2, ',', '.').' DA <br/>'.'Coût total réel : '.number_format($totHr,2, ',', '.').' DA'?></td>
						 <td>#</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
			  
			  
				</div>
				
			
		  
			
			
         <div class="clearfix"></div>
			  
			  
			<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Hébergements <small> 

                     </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons-5" class="table table-hover table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nom</th>
                          <th>Classe</th>
                          <th style="width:15%"; >adresse</th>
						  <th>coût unitaire estimé</th>
						  <th>coût unitaire réel</th>
						  <th>Nbr Intervenant Hébergé </th>
						  <th>Durée total </th>
						  <th>coût total estimé </th>
						  <th>coût total réel </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      try {
                          $reponse_hebergement = $bdh->query('SELECT * , COUNT( h.idIntervenant ) nbrInt , SUM( g.duree ) dureeHeb
																FROM hebergement g
																INNER JOIN heberger h ON h.idH = g.idH
																LEFT JOIN intervenir r ON r.idIntervenant = h.idIntervenant
																WHERE r.idCol='.$_SESSION['idCol'].' GROUP BY g.idH');
						  
                          $i=1;
                          $reponse_hebergement->execute();
						  $totes=0; $totre=0;
                          while ($table = $reponse_hebergement->fetch()) {
							  $totes+= $table['dureeHeb']*$table['prix_estime'];
							  $totre+=$table['dureeHeb']*$table['prix_reel'];
                              ?>
                              <tr>
                                  <th scope="row"><?php echo $i++ ?></th>
                                  <td><?php echo $table['nomH']; ?></td>
                                  <td><?php echo $table['classe']; ?></td>
                                  <td><?php echo $table['adresse']; ?></td>
                                  <td><?php echo number_format($table['prix_estime'],2, ',', '.').' DA'; ?></td>
								  <td><?php echo number_format($table['prix_reel'],2, ',', '.').' DA'; ?></td>
								  <td><?php echo number_format($table['nbrInt'],0, '', ' '); ?></td>
								  <td><?php echo number_format($table['dureeHeb'],0, '', ' '); ?></td>
								  <td><?php echo number_format($table['dureeHeb']*$table['prix_estime'],2, ',', '.').' DA'; ?></td>
								  <td><?php echo number_format($table['dureeHeb']*$table['prix_reel'],2, ',', '.').' DA'; ?></td>
                              </tr>
                              <?php
                          }
                      }catch(Exception $e) {
                          die('Erreur : ' . $e->getMessage());
                      }
                      ?>
                        <tr>
                          <th scope="row">Total</th>
                          <td>#</td>
                          <td>#</td>
                          <td>#</td>
						  <td>#</td>
                          <td>#</td>
						  <td>#</td>
                          <td>#</td>
						  <td><?php echo number_format($totes,2, ',', '.').' DA'; ?></td>
						  <td><?php echo number_format($totre,2, ',', '.').' DA'; ?></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
			  
			  <div class="clearfix"></div>
			 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Transports <small> 

                     </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons-6" class="table table-hover table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Type</th>
                          <th>Classe</th>
                          <th>coût éstimé</th>
						  <th>coût réel</th>
						  <th>Lieu de depart</th>
						  <th>Lieu d'arriver</th>
                          <th>Date d'aller</th>
                          <th>Date de retour</th>
						  <th>Nbr d'intervanants</th>
						  <th>coût total estimé</th>
						  <th>coût total réel</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      try {
                          $reponse_transport = $bdh->query('SELECT * , COUNT(v.idIntervenant) nbI
															FROM Transport t
															INNER JOIN voyager v ON v.idTransport = t.idTransport
															LEFT JOIN intervenir r ON r.idIntervenant = v.idIntervenant
															WHERE r.idCol='.$_SESSION['idCol'].' GROUP BY t.idTransport');
                 
                          $i=1;
                          $reponse_transport->execute();
						  $totte=0; $tottr=0;
                          while ($table = $reponse_transport->fetch()) {
							  $totte +=$table['cout']*$table['nbI'];
							  $tottr += $table['prix_reel']*$table['nbI'];
                              ?>
                              <tr>
                                  <th scope="row"><?php echo $i++ ?></th>
                                  <td><?php echo $table['typeTransport']; ?></td>
                                  <td><?php echo $table['classe']; ?></td>
                                  <td><?php echo number_format( $table['cout'],2, ',', '.').' DA'; ?></td>
								  <td><?php echo number_format($table['prix_reel'],2, ',', '.').' DA' ; ?></td>
                                  <td><?php echo $table['lieuDepart']; ?></td>
                                  <td><?php echo $table['lieuArrivee']; ?></td>
                                  <td><?php echo $table['dateDepart']; ?></td>
                                  <td><?php echo $table['dateArrivee']; ?></td>
								  <td><?php echo $table['nbI']; ?></td>
								  <td><?php echo number_format( $table['cout']*$table['nbI'],2, ',', '.').' DA'; ?></td>
								  <td><?php echo number_format($table['prix_reel']*$table['nbI'],2, ',', '.').' DA' ; ?></td>
                              </tr>
                              <?php
                          }
                      }catch(Exception $e) {
                          die('Erreur : ' . $e->getMessage());
                      }
                      ?>
                        <tr>
                          <th scope="row">Total</th>
                          <td>#</td>
                          <td>#</td>
                          <td>#</td>
						  <td>#</td>
                          <td>#</td>
						  <td>#</td>
                          <td>#</td>
						  <td>#</td>
						  <td>#</td>
						  <td><?php echo number_format( $totte,2, ',', '.').' DA'; ?></td>
						  <td><?php echo number_format( $tottr,2, ',', '.').' DA'; ?></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
				
				</div>
				
				<div role="tabpanel" class="tab-pane" id="pub">
				<div class="row">
				<br/>
										   <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Publicité <small>  </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons-7" class="table table-hover table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>type</th>
                          <th>Coût estimé</th>
						  <th>Coût réel</th>				  
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          try {
                              $reponse_publicite = $bdh->query('SELECT * 
																FROM publicite t
																INNER JOIN publier p ON t.idPub = p.idPub
																WHERE idCol='.$_SESSION['idCol']);
                             $reponse_publicite_cout = $bdh->query('SELECT SUM(prix_estime) coutP FROM publicite t
																INNER JOIN publier p ON t.idPub = p.idPub
																WHERE idCol='.$_SESSION['idCol']);
							   $reponse_publicite_cout_r = $bdh->query('SELECT SUM(prix_reel) coutPR FROM publicite t
																INNER JOIN publier p ON t.idPub = p.idPub
																WHERE idCol='.$_SESSION['idCol']);
                              $i=1;
                              $reponse_publicite->execute();
                              while ($table = $reponse_publicite->fetch()) {
                                  ?>
                                  <tr>
                                      <th scope="row"><?php echo $table['idPub'] ?></th>
                                      <td><?php echo $table['typePub']; ?></td>
                                      <td><?php echo number_format( $table['prix_estime'],2, ',', '.').' DA' ; ?></td>
									  <td><?php echo number_format( $table['prix_reel'],2, ',', '.').' DA'; ?></td>
                                  </tr>
                                  <?php
                              }
                          }catch(Exception $e) {
                              die('Erreur : ' . $e->getMessage());
                          }
                          ?>
                        <tr>
                          <th scope="row">Total</th>
                          <td>#</td>
						  <td><?php  $table = $reponse_publicite_cout->fetch() ; echo number_format( $table['coutP'],2, ',', '.').' DA' ; ?></td>
                          <td><?php $table = $reponse_publicite_cout_r->fetch() ; echo number_format(  $table['coutPR'],2, ',', '.').' DA' ; ?></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
				</div>
				</div>
				
				<div role="tabpanel" class="tab-pane" id="goodies">
				<div class="row">
				<br/>
					   <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Goodies <small>  </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons-8" class="table table-hover table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nom</th>
						  <th>Nbr exemplaire</th>
                          <th>Coût unitaire estimé</th>
						  <th>Coût unitaire réel</th>
						  <th>Coût total estimé</th>
						  <th>Coût total réel</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          try {
                              $reponse_goodies = $bdh->query('SELECT * FROM goodies g
																INNER JOIN distribuer d
																ON g.idGoo=d.idGoo
																WHERE idCol='.$_SESSION['idCol']);
                              $i=1; $totge=0; $totgr=0;
                              $reponse_goodies->execute();
                              while ($table = $reponse_goodies->fetch()) {
								  $totge += $table['coutGoo']*$table['nbGoo'];
								  $totgr +=  $table['prix_reel']*$table['nbGoo'];
                                  ?>
                                  <tr>
                                      <th scope="row"><?php echo $i++ ?></th>
                                      <td><?php echo $table['nomGoo']; ?></td>
									  <td><?php echo number_format( $table['nbGoo'],0, '', ' '); ?></td>
                                      <td><?php echo number_format( $table['coutGoo'],2, ',', '.').' DA'; ?></td>
									  <td><?php echo number_format( $table['prix_reel'],2, ',', '.').' DA'; ?></td>
									  <td><?php echo number_format( $table['coutGoo']*$table['nbGoo'],2, ',', '.').' DA'; ?></td>
									  <td><?php echo number_format(  $table['prix_reel']*$table['nbGoo'],2, ',', '.').' DA'; ?></td>
                                  </tr>
                                  <?php
                              }
                          }catch(Exception $e) {
                              die('Erreur : ' . $e->getMessage());
                          }
                          ?>
                        <tr>
                          <th scope="row">Total</th>
                          <td>#</td>
                          <td>#</td>
						  <td>#</td>
						  <td>#</td>
						  <td><?php echo number_format( $totge,2, ',', '.').' DA'; ?></td>
						  <td><?php echo number_format( $totgr,2, ',', '.').' DA'; ?></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
				</div>
				</div>
				
				<div role="tabpanel" class="tab-pane" id="resto">
				<div class="row">
				<br/>
				 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Réstauration<small> </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons-9" class="table table-hover table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Repas</th>
						  <th>Menu</th>
                          <th>Nombre </th>
                          <th>Coût unitaire estimé</th>
						  <th>Coût unitaire réel</th>
						  <th>Coût total estimé</th>
						  <th>Coût total réel</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        try {
                            $reponse_repat = $bdh->query('SELECT * FROM repas r
															INNER JOIN servir s
															ON r.idRepas=s.idRepas
															WHERE idCol='.$_SESSION['idCol']);
                        
                            $i=1; $totrese=0; $totresr=0;
                            $reponse_repat->execute();
                            while ($table = $reponse_repat->fetch()) {
								$totrese+=$table['prix_estime']*$table['nbRepas']; $totresr+=$table['prix_reel']*$table['nbRepas'];
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $table['idRepas'] ?></th>
                                    <td><?php echo $table['nomRepas']; ?></td>
									<td><?php echo $table['menu']; ?></td>
                                    <td><?php echo number_format( $table['nbRepas'],0, '', '.').' DA' ; ?></td>
									 <td><?php echo number_format( $table['prix_estime'],2, ',', '.').' DA' ; ?></td>
									 <td><?php echo number_format( $table['prix_reel'],2, ',', '.').' DA' ; ?></td>
									  <td><?php echo number_format( $table['prix_estime']*$table['nbRepas'],2, ',', '.').' DA' ; ?></td>
									 <td><?php echo number_format( $table['prix_reel']*$table['nbRepas'],2, ',', '.').' DA' ; ?></td>
                                </tr>
                                <?php
                            }
                        }catch(Exception $e) {
                            die('Erreur : ' . $e->getMessage());
                        }
                      ?>
                        <tr>
                          <th scope="row">Total</th>
                          <td>#</td>
						  <td>#</td>
                          <td>#</td>
						   <td>#</td> 
						  <td>#</td>
						   <td><?php echo number_format( $totrese,2, ',', '.').' DA' ; ?></td>
						 <td><?php echo number_format( $totresr,2, ',', '.').' DA' ; ?></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
				</div>
				</div>
				
				<div role="tabpanel" class="tab-pane" id="autre">
				<div class="row">
							<br/>
		 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Autres ressources<small> </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons-10" class="table table-hover table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Catégorie</th>
						  <th>nom ressources</th>
                          <th>Nombre </th>
                          <th>Coût unitaire estimé</th>
						  <th>Coût unitaire réel</th>
						  <th>Coût total estimé</th>
						  <th>Coût total réel</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        try {
                            $reponse_autre = $bdh->query('SELECT * FROM categorieressource c
															INNER JOIN ressource r
															ON r.idCRes = c.idCRes
															INNER JOIN utiliser u
															ON u.idRes=r.idRes
															WHERE idCol='.$_SESSION['idCol']);
                        
                            $i=1; $totrese=0; $totresr=0;
                            $reponse_autre->execute();
                            while ($table = $reponse_autre->fetch()) {
								$totrese+=$table['prix_estime']*$table['nbRessource']; $totresr+=$table['prix_reel']*$table['nbRessource'];
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $table['idRes'] ?></th>
                                    <td><?php echo $table['nomCategorie']; ?></td>
									<td><?php echo $table['nomRessource']; ?></td>
                                    <td><?php echo number_format( $table['nbRessource'],0, '', '.').' DA' ; ?></td>
									 <td><?php echo number_format( $table['prix_estime'],2, ',', '.').' DA' ; ?></td>
									 <td><?php echo number_format( $table['prix_reel'],2, ',', '.').' DA' ; ?></td>
									  <td><?php echo number_format( $table['prix_estime']*$table['nbRessource'],2, ',', '.').' DA' ; ?></td>
									 <td><?php echo number_format( $table['prix_reel']*$table['nbRessource'],2, ',', '.').' DA' ; ?></td>
                                </tr>
                                <?php
                            }
                        }catch(Exception $e) {
                            die('Erreur : ' . $e->getMessage());
                        }
                      ?>
                        <tr>
                          <th scope="row">Total</th>
                          <td>#</td>
						  <td>#</td>
                          <td>#</td>
						   <td>#</td> 
						  <td>#</td>
						   <td><?php echo number_format( $totrese,2, ',', '.').' DA' ; ?></td>
						 <td><?php echo number_format( $totresr,2, ',', '.').' DA' ; ?></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
				</div>
				</div>
			  </div>

			</div>
			
			
			

          </div>
        </div>
        <!-- /page content -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Modifier les informations de la salle </h4>
			  </div>
			  <div class="modal-body">
				
				 
				<br/>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-primary">Sauvgarder</button>
			  </div>
			</div>
		  </div>
		</div>
        <!-- footer content -->
        <footer>
          <div class="pull-right">
          <p>&copy; 2016 All Rights Reserved. Powered by TeamTT@ESI</p>
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
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

  
     <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
   

    <!-- Custom Theme Scripts -->
    <script src="js/custom.js"></script>
	 <!-- Select2 -->
    <script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: "Sélectionner un colloque",
          allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
          maximumSelectionLength: 4,
          placeholder: "With Max Selection limit 4",
          allowClear: true
        });
      });
    </script>
    <!-- /Select2 -->
	    <!-- Datatables -->
    <script>
      $(document).ready(function() {
		 
          var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
             $("#datatable-buttons").DataTable({
        
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
			  
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }(); 

        var handleDataTableButtons_2 = function() {
          if ($("#datatable-buttons-2").length) {
            $("#datatable-buttons-2").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons_2 = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons_2();
            }
          };
        }();

		

        var handleDataTableButtons_3 = function() {
          if ($("#datatable-buttons-3").length) {
            $("#datatable-buttons-3").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons_3 = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons_3();
            }
          };
        }();
		

        TableManageButtons.init();
		TableManageButtons_2.init();
		TableManageButtons_3.init();
      });
    </script>
    <!-- /Datatables -->
	
	
    <!-- Datatables -->
    <script>
      $(document).ready(function() {
          
       var handleDataTableButtons_4 = function() {
          if ($("#datatable-buttons-4").length) {
            $("#datatable-buttons-4").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons_4 = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons_4();
            }
          };
        }();
		
		//
		 var handleDataTableButtons_5 = function() {
          if ($("#datatable-buttons-5").length) {
            $("#datatable-buttons-5").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons_5 = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons_5();
            }
          };
        }();
		
		
		 var handleDataTableButtons_6 = function() {
          if ($("#datatable-buttons-6").length) {
            $("#datatable-buttons-6").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons_6 = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons_6();
            }
          };
        }();
		
		 var handleDataTableButtons_7 = function() {
          if ($("#datatable-buttons-7").length) {
            $("#datatable-buttons-7").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons_7 = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons_7();
            }
          };
        }();
		
		TableManageButtons_4.init();TableManageButtons_5.init();TableManageButtons_6.init();TableManageButtons_7.init();
      });
    </script>
    <!-- /Datatables -->
	
	 <!-- Datatables -->
    <script>
      $(document).ready(function() {
		  var handleDataTableButtons_8 = function() {
          if ($("#datatable-buttons-8").length) {
            $("#datatable-buttons-8").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons_8 = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons_8();
            }
          };
        }();
		
		
		TableManageButtons_8.init();

      });
    </script>
    <!-- /Datatables -->
	
	 <!-- Datatables -->
    <script>
      $(document).ready(function() {

			  var handleDataTableButtons_9 = function() {
          if ($("#datatable-buttons-9").length) {
            $("#datatable-buttons-9").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons_9 = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons_9();
            }
          };
        }();
		

		
		 var handleDataTableButtons_10 = function() {
          if ($("#datatable-buttons-10").length) {
            $("#datatable-buttons-10").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons_10 = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons_10();
            }
          };
        }();
		TableManageButtons_9.init();
		TableManageButtons_10.init();
      });
    </script>
    <!-- /Datatables -->



   

  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
            </div>

            <div class="clearfix"></div>


              <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenue,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index_colloque.html"><i class="fa fa-home"></i> Home </a>
       
                  </li>
                  <li><a href="form.html"><i class="fa fa-edit"></i> Gestion Budget</a>
                 
                  </li>
            
                  <li><a href="tables.html" ><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                  </li>
                 
                </ul>
              </div>
     

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">  Profile</a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">Help</a>
                    </li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </li>
                  </ul>
                </li>


              </ul>
            </nav>
          </div>

        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="page-title">
              <div class="title_left">
                <h3> Tables </h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

			<div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Salles <small> blalalalalala </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nom</th>
                          <th>Type</th>
                          <th>Adresse</th>
						  <th>Surface</th>
                          <th>Tarif</th>
						  <th>Nbr de place</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          try {
                              $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                              $bdh = new PDO("mysql:host=localhost;dbname=Budgeto;charset=utf8", "root", "");
                              $reponse_sall = $bdh->query('SELECT * FROM Salle');
                              $reponse_sall_surface = $bdh->query('SELECT SUM(surface) sur FROM Salle');
                              $reponse_sall_tarif = $bdh->query('SELECT SUM(tarif) tar FROM Salle');
                              $reponse_sall_capacite = $bdh->query('SELECT SUM(capacite) cap FROM Salle');
                              $i=1;
                              $reponse_sall->execute();
                              while ($table = $reponse_sall->fetch()) {
                                  ?>
                                  <tr>
                                      <th scope="row"><?php echo $i++ ?></th>
                                      <td><?php echo $table['nomSalle']; ?></td>
                                      <td><?php echo $table['typeSalle']; ?></td>
                                      <td><?php echo $table['adresse']; ?></td>
                                      <td><?php echo $table['surface']; ?></td>
                                      <td><?php echo $table['tarif']; ?></td>
                                      <td><?php echo $table['capacite']; ?></td>
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
                              <td><?php if ($table = $reponse_sall_surface->fetch()) echo $table['sur']; ?></td>
                              <td><?php if ($table = $reponse_sall_tarif->fetch()) echo $table['tar']; ?></td>
                              <td><?php if ($table = $reponse_sall_capacite->fetch()) echo $table['cap']; ?></td>
                          </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
			  
			  
			  <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Equipements <small> blalalalalala </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nom</th>
                          <th>Nbr exemplaire</th>
                          <th>Coût unitaire</th>
                          <th>Coût totale</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          try {
                          $reponse_equipement = $bdh->query('SELECT * FROM Equiper');
                          $reponse_sall_nbex = $bdh->query('SELECT SUM(nbexemplaire) nbex FROM Equiper');
                          $i=1;
                          $coutT=0;
                          $reponse_equipement->execute();
                          while ($table = $reponse_equipement->fetch()) {
                          ?>
                            <tr>
                              <th scope="row"><?php echo $i++ ?></th>
                              <td><?php echo $table['nomEquipement']; ?></td>
                              <td><?php echo $table['nbexemplaire']; ?></td>
                              <td><?php echo $table['coutUnite']; ?></td>
                              <td><?php echo ($table['coutUnite']*$table['nbexemplaire']);
                                  $coutT +=($table['coutUnite']*$table['nbexemplaire']); ?></td>
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
                          <td><?php if ($table = $reponse_sall_nbex->fetch()) echo $table['nbex']; ?></td>
                          <td>#</td>
						  <td><?php echo $coutT; ?></td>
                          
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
			  
			 
			  <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Personnels <small> blalalalalala </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Catégories</th>
                          <th>Nbr de personnes </th>
                          <th>Rénumération </th>
						  
						  
                        </tr>
                      </thead>
                      <tbody>
                          <?php
/*
                          try {
                              $reponse_equipement = $bdh->query('SELECT * FROM Equiper');
                              $i=1;
                              $reponse_equipement->execute();
                              while ($table = $reponse_equipement->fetch()) {
                                  ?>
                                  <tr>
                                      <th scope="row"><?php echo $i++ ?></th>
                                      <td><?php echo $table['nomEquipement']; ?></td>
                                      <td><?php echo $table['nbexemplaire']; ?></td>
                                      <td><?php echo $table['coutUnite']; ?></td>
                                  </tr>
                                  <?php
                              }
                          }catch(Exception $e) {
                              die('Erreur : ' . $e->getMessage());
                          }
*/
                          ?>
                        </tr>
                        <tr>
                          <th scope="row">Total</th>
                          <td>#</td>
                          <td></td>
                          <td></td>
						 
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
			  
			      
				   <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Publicité <small> blalalalalala </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>type</th>
                          <th>Coût</th>			  
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          try {
                              $reponse_publicite = $bdh->query('SELECT * FROM Publier');
                              $reponse_publicite_cout = $bdh->query('SELECT SUM(coutPub) coutP FROM Publier');
                              $i=1;
                              $reponse_publicite->execute();
                              while ($table = $reponse_publicite->fetch()) {
                                  ?>
                                  <tr>
                                      <th scope="row"><?php echo $i++ ?></th>
                                      <td><?php echo $table['typePub']; ?></td>
                                      <td><?php echo $table['coutPub']; ?></td>
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
                          <td><?php if ($table = $reponse_publicite_cout->fetch()) echo $table['coutP']; ?></td>
                          
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
			  
			  
			   <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Goodies <small> blalalalalala </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nom</th>
                          <th>Coût </th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          try {
                              $reponse_goodies = $bdh->query('SELECT * FROM Goodies');
                              $reponse_goodies_cout = $bdh->query('SELECT SUM(coutGoo) coutGoo FROM Goodies');
                              $i=1;
                              $reponse_goodies->execute();
                              while ($table = $reponse_goodies->fetch()) {
                                  ?>
                                  <tr>
                                      <th scope="row"><?php echo $i++ ?></th>
                                      <td><?php echo $table['nomGoo']; ?></td>
                                      <td><?php echo $table['coutGoo']; ?></td>
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
                          <td><?php if ($table = $reponse_goodies_cout->fetch()) echo $table['coutGoo']; ?></td>

                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
			  

			   <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Participants<small> blalalalalala </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Statut</th>
                          <th>Nbr de places </th>
                          <th>Remise </th>
						  
						  
                        </tr>
                      </thead>
                      <tbody>
                      <?php
/*
                        try {
                            $reponse_equipement = $bdh->query('SELECT * FROM Equiper');
                            $i=1;
                            $reponse_equipement->execute();
                            while ($table = $reponse_equipement->fetch()) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $i++ ?></th>
                                    <td><?php echo $table['nomEquipement']; ?></td>
                                    <td><?php echo $table['nbexemplaire']; ?></td>
                                    <td><?php echo $table['coutUnite']; ?></td>
                                </tr>
                                <?php
                            }
                        }catch(Exception $e) {
                            die('Erreur : ' . $e->getMessage());
                        }
*/
                      ?>
                        <tr>
                          <th scope="row">Total</th>
                          <td>#</td>
                          <td></td>
                          <td>#</td>
						 
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
			
		   <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Réstauration<small> blalalalalala </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Repas</th>
                          <th>Nombre </th>
                          <th>Coût </th>

                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        try {
                            $reponse_repat = $bdh->query('SELECT * FROM Repas');
                            $reponse_repat_cout = $bdh->query('SELECT SUM(coutRepas) coutR FROM Repas');
                            $reponse_repat_nbrR = $bdh->query('SELECT SUM(nombre) nbrR FROM Repas');
                            $i=1;
                            $reponse_repat->execute();
                            while ($table = $reponse_repat->fetch()) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $i++ ?></th>
                                    <td><?php echo $table['nomRepas']; ?></td>
                                    <td><?php echo $table['nombre']; ?></td>
                                    <td><?php echo $table['coutRepas']; ?></td>
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
                          <td><?php if ($table = $reponse_repat_nbrR->fetch()) echo $table['nbrR']; ?></td>
                          <td><?php if ($table = $reponse_repat_cout->fetch()) echo $table['coutR']; ?></td>
						  <td>#</td>
						 
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
			
			
           
			
		
			<div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Intervenants <small> blalalalalala </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nom</th>
                          <th>Rénumération</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      try {
                          $reponse_intervenant = $bdh->query('SELECT * FROM Intervenant');
                          $i=1;
                          $reponse_intervenant->execute();
                          while ($table = $reponse_intervenant->fetch()) {
                              ?>
                              <tr>
                                  <th scope="row"><?php echo $i++ ?></th>
                                  <td><?php echo $table['nom']; ?></td>
                                  <td><?php echo $table['remuneration']; ?></td>
                              </tr>
                              <?php
                          }
                      }catch(Exception $e) {
                          die('Erreur : ' . $e->getMessage());
                      }
                      ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
			  
			  
			  			<div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Hébergements <small> blalalalalala </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nom</th>
                          <th>Classe</th>
                          <th>adresse</th>
                          <th>durée</th>
						  <th>coût</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      try {
                          $reponse_hebergement = $bdh->query('SELECT * FROM Hebergement');
                          $reponse_hebergement_cout = $bdh->query('SELECT SUM(tarifH) tarifH FROM Hebergement');
                          $i=1;
                          $reponse_hebergement->execute();
                          while ($table = $reponse_hebergement->fetch()) {
                              ?>
                              <tr>
                                  <th scope="row"><?php echo $i++ ?></th>
                                  <td><?php echo $table['nomH']; ?></td>
                                  <td><?php echo $table['classe']; ?></td>
                                  <td><?php echo $table['adresse']; ?></td>
                                  <td><?php echo $table['duree']; ?></td>
                                  <td><?php echo $table['tarifH']; ?></td>
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
                          <td><?php if ($table = $reponse_hebergement_cout->fetch()) echo $table['tarifH']; ?></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
			  
			  
			 <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Transports <small> blalalalalala </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Type</th>
                          <th>Classe</th>
                          <th>coût</th>
						  <th>Lieu de depart</th>
						  <th>Lieu d'arriver</th>
                          <th>Date de depart</th>
                          <th>Date d'arriver</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      try {
                          $reponse_transport = $bdh->query('SELECT * FROM Transport');
                          $reponse_transport_cout = $bdh->query('SELECT SUM(cout) coutTRANS FROM Transport');
                          $i=1;
                          $reponse_transport->execute();
                          while ($table = $reponse_transport->fetch()) {
                              ?>
                              <tr>
                                  <th scope="row"><?php echo $i++ ?></th>
                                  <td><?php echo $table['typeTransport']; ?></td>
                                  <td><?php echo $table['classe']; ?></td>
                                  <td><?php echo $table['cout']; ?></td>
                                  <td><?php echo $table['lieuDepart']; ?></td>
                                  <td><?php echo $table['lieuArrivee']; ?></td>
                                  <td><?php echo $table['dateDepart']; ?></td>
                                  <td><?php echo $table['dateArrivee']; ?></td>
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
                          <td><?php if ($table = $reponse_transport_cout->fetch()) echo $table['coutTRANS']; ?></td>
						  <td>#</td>
                          <td>#</td>
						  <td>#</td>
                          <td>#</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
			 
		</div>			 
			
          </div>
        </div>
        <!-- /page content -->

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
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="js/custom.js"></script>
  </body>
</html>
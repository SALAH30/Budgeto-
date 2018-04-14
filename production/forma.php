<?php include("php/connexion.php");     $db = data_base_connect (); ?>
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
            
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Tables</a>
                      </li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a>
                      </li>
                    </ul>
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
                <h3>Gestion bugdet</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Formulaire <small> Sessions </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Etape 1<br />
                                              <small>Etape 1 salle</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Etape 2<br />
                                              <small>Step 2 Equipements et personnels</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Etape 3<br />
                                              <small>Etape 3 Intervenants</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              Etape 4<br />
                                              <small>Etape 4 publicité et goodies</small>
                                          </span>
                          </a>
                        </li>
						
						<li>
                          <a href="#step-5">
                            <span class="step_no">5</span>
                            <span class="step_descr">
                                              Etape 5<br />
                                              <small>Etape 4 Participants</small>
                                          </span>
                          </a>
                        </li>
						
						<li>
                          <a href="#step-6">
                            <span class="step_no">6</span>
                            <span class="step_descr">
                                              Etape 6<br />
                                              <small>Etape 6 Restauration</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ajouter une Salle <small>informations</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <data></data>
                  <div class="x_content">
                    <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nom <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nom_salle" name="nom" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">type <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="type_salle" name="type" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">adresse <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="adr_salle" name="adr" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">surface </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="surface_salle" class="form-control col-md-7 col-xs-12" type="text" name="surface">
                        </div>
                      </div>
                   
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">tarif <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tarif_salle" name="tarif" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">nombre de place <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="place_salle" name="nbplace" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>

            <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <span id="resultat_salle"></span>
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>

                      <div class="form-group">
                      
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button type="submit" class="btn btn-primary">Annuler</button>
              <button type="button" onclick="ajouter_salle();" class="btn btn-success" name="buttonsalle" id="buttonsalle">Ajouter</button>
						  <button type="submit" class="btn btn-success">Ajouter une autre salle</button>
                        </div>
                      </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
                      <div id="step-2">
                        <h2 class="StepTitle">Etape 2 Equipement et personnels</h2>
                        <p>
                          do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
						
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ajouter un équipement <small>informations</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
<!--
<div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Colloque</label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                      <select id="colloque" name="colloque" class="form-control">
                      
    <?php /*
  
            
            $statement = $db->prepare('SELECT idCol,nomCol FROM Colloque');
            $statement->execute();
            while($option = $statement->fetch()){ ?>
        
          <option value="<?php echo $option['idCol']; ?> "><?php echo $option['nomCol']; ?></option>
                 <?php } */?>
</select>   
                    </div> 

</div>-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nom <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nom_equipement" name="nom" required="required" class="form-control col-md-7 col-xs-12">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">coût d'achat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="achat_equipement" name="achat" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">coût de livraison <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="livraison_equipement" name="livraison" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <span id="resultat_Equi"></span>
                        </div>
                      </div>
                   
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Annuler</button>
                          <button type="button" onclick="ajouter_equipement();" class="btn btn-success">Ajouter</button>
						  <button type="submit" class="btn btn-success">Ajouter un Autre équipement</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
			
			
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ajouter une catégorie du personnels <small> informations</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
						<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="categor_personnel" name="categor_personnel" class="form-control">
                            <option>Choisir</option>
                            <option>Sécurité</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
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
					 
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <span id="resultat_cat"></span>
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Annuler</button>
                          <button type="button" onclick="ajouter_categorie();" class="btn btn-success">Ajouter</button>
						  <button type="submit" class="btn btn-success">Ajouter une autre catégorie</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
						
						
						
						
	  </div>
	  <div id="step-3">
		<h2 class="StepTitle">Etape 3 Les intervenants</h2>
		<p>
		  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
		  eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<p>
		  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
		  in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
						
					<div class="row">
					  <div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
						  <div class="x_title">
							<h2>Ajouter un intervenant <small> informations</small></h2>
							<ul class="nav navbar-right panel_toolbox">
							  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							  </li>
							  <li><a class="close-link"><i class="fa fa-close"></i></a>
							  </li>
							</ul>
							<div class="clearfix"></div>
						  </div>

						  <div class="x_content">
							<br />
							<form action="blabla.php" action="GET" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
								
							  <div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">nom <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input type="text" id="nom_Int" name="nom_Int" required="required" class="form-control col-md-7 col-xs-12">
								</div>
							  </div>
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">prenom <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="prenom_Int" name="prenom_Int" required="required" class="form-control col-md-7 col-xs-12">
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
								  <div id="reportrange_right" class="pull-left" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
								  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
								  <span>December 30, 2015 - January 28, 2016</span> <b class="caret"></b>
								</div>
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
								  <div id="reportrange_right_2" name="reportrange_right_2" class="pull-left" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
								  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
								  <span >December 30, 2015 - January 28, 2016</span> <b class="caret"></b>
								</div>
								</div>
							  </div>

							 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <span id="resultat_inter"></span>
                        </div>
                      </div>

												  <div class="ln_solid"></div>
							  <div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								  <button type="submit" class="btn btn-primary">Annuler</button>
								  <button type="button" onclick="ajouter_inter();" class="btn btn-success">Ajouter</button>
								  <button type="submit" class="btn btn-success">Ajouter un autre intervenant</button>
								</div>
							  </div>

							</form>
						  </div>
						</div>
					  </div>
					</div>
					
				
								
								
                      </div>
					   </div>
					  
					  
					  
					  
                      <div id="step-4">
                        <h2 class="StepTitle">Etape 4 Publicité et goodies</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
						
						<div class="row">

						  <div class="col-md-12 col-sm-12 col-xs-12">

							<div class="x_panel">

							  <div class="x_title">
								<h2>Publicité <small> informations</small></h2>
								<ul class="nav navbar-right panel_toolbox">
								  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								  </li>
								  <li><a class="close-link"><i class="fa fa-close"></i></a>
								  </li>
								</ul>
								<div class="clearfix"></div>
							  </div>



							  <div class="x_content">
								<br />
         <!--     
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                  <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Publicité</label>
                   <div class="col-md-6 col-sm-6 col-xs-12">

                   <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Type 
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="type" name="type" class="form-control col-md-7 col-xs-12">
                  </div>
                  </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <span id="resultat_publ"></span>
                        </div>
                      </div>
                 
                 
                  <div class="ln_solid"></div>
                  <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                   <button type="submit" class="btn btn-primary">Annuler</button>
                   <button type="button" onclick="ajouter_publicite();" class="btn btn-success">Ajouter</button>    
                   
                   
                  </div>
                  </div>



</form>-->
								<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

<div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Type Publicite</label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
        <select id="resultat_public" class="form-control chzn-select" tabindex="2" name ="typepu">
  <?php   $statement1 = $db->prepare('SELECT typePub FROM publicite');
             $statement1->execute();  

 while($option1 = $statement1->fetch()){ ?>
          <option value="<?php echo $option1['typePub']; ?>" > <?php echo $option1['typePub']; ?></option>
                 <?php } ?>

                        </select>   

</div> 
</div>


                 


								   <div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">coût 
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input type="text" id="coutpub" name="coutpub" class="form-control col-md-7 col-xs-12">
									</div>
								  </div>

								        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <span id="resultat_pub">

                      </span>
                        </div>
                      </div>
                 
							   
								  <div class="ln_solid"></div>
								  <div class="form-group">
									<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									 <button type="submit" class="btn btn-primary">Annuler</button>
                   <button type="button" onclick="ajouter_pub();" class="btn btn-success" name="buttonpub" id="buttonpub">Ajouter</button>    
									 
									 
									</div>
								  </div>

								</form>
                </div>							
                  </div>						
                    </div>					
                    	</div>
					
						<div class="row">
						  <div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
							  <div class="x_title">
								<h2>Ajouter Goodies<small> informations</small></h2>
								<ul class="nav navbar-right panel_toolbox">
								  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								  </li>
								  <li><a class="close-link"><i class="fa fa-close"></i></a>
								  </li>
								</ul>
								<div class="clearfix"></div>
							  </div>
							  <div class="x_content">
								<br />
								<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
									 <div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nom 
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input type="text" id="nomg" name="nomg" class="form-control col-md-7 col-xs-12">
									</div>
								  </div>
								  <div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">nombre d'exemplaire 
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input type="text" id="exempg" name="exempg" class="form-control col-md-7 col-xs-12">
									</div>
								  </div>
								   <div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Coût
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input type="text" id="coutg" name="coutg" class="form-control col-md-7 col-xs-12">
									</div>
								  </div>
						 <div class="form-group">		  
								<label class="col-md-3 col-sm-3 col-xs-12 control-label">Cancernants </label>

								<div class="col-md-9 col-sm-9 col-xs-12">
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat" checked="checked"> Intervenants
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat" checked="checked"> Participants
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat" checked="checked"> Personnels
									</label>
								  </div>
							</div>
							</div>		 

               <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <span id="resultat_goo"></span>
                        </div>
                      </div>
							   
								  <div class="ln_solid"></div>
								  <div class="form-group">
									<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									  <button type="submit" class="btn btn-primary">Annuler</button>
<button type="button" onclick="ajouter_goodies();" class="btn btn-success" name="buttongoodies" id="buttongoodies">Ajouter</button>			
						  <button type="submit" class="btn btn-success">Ajouter goodies</button>
									</div>
								  </div>

								</form>
							  </div>
							</div>
						  </div>
						</div>
						

                      </div>
					  
					  
					   <div id="step-5">
                            <h2 class="StepTitle">Etape 5 Participants</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
						
						<div class="row">
						  <div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
							  <div class="x_title">
								<h2>Ajouter Type Participant<small> informations</small></h2>
								<ul class="nav navbar-right panel_toolbox">
								  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								  </li>
								  <li><a class="close-link"><i class="fa fa-close"></i></a>
								  </li>
								</ul>
								<div class="clearfix"></div>
							  </div>

							  <div class="x_content">
								<br />
								<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
									 <div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Statut</label>
									 <div class="col-md-6 col-sm-6 col-xs-12">
										  <select id="status_participant" name="status_participant" class="form-control">
											<option>Choisir</option>
											<option>Etudiant</option>
											<option>Entreprise</option>
											<option>autre</option>
										  </select>
										</div>
									</div>	
								  <div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">nombre de place disponibles
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input type="text" id="placepar_participant" name="placepar_participant" class="form-control col-md-7 col-xs-12">
									</div>
								  </div>
								   <div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Remise
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input type="text" id="remise_participant" name="remise_participant" class="form-control col-md-7 col-xs-12">
									</div>
								  </div>

                  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <span id="resultat_par"></span>
                        </div>
                      </div>
						 
							   
								  <div class="ln_solid"></div>
								  <div class="form-group">
									<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									  <button type="submit" class="btn btn-primary">Annuler</button>
                      <button type="button" onclick="ajouter_participant();" class="btn btn-success" name="buttonparticipant" id="buttonparticipant">Ajouter</button>     
									  <button type="submit" class="btn btn-success">Ajouter autre type </button>
									</div>
								  </div>

								</form>
							  </div>
							</div>
						  </div>
						</div>
					
						
						
						
                      </div>
					  
					  
					    <div id="step-6">
                        <h2 class="StepTitle">Etape 6 Restaurations</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      
					  
					  	<div class="row">
						  <div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
							  <div class="x_title">
								<h2>Ajouter Repas<small> informations</small></h2>
								<ul class="nav navbar-right panel_toolbox">
								  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								  </li>
								  <li><a class="close-link"><i class="fa fa-close"></i></a>
								  </li>
								</ul>
								<div class="clearfix"></div>
							  </div>
							  <div class="x_content">
								<br />
								<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
									<div class="form-group">
									<label name="Repas1" class="control-label col-md-3 col-sm-3 col-xs-12">Repas</label>
									 <div name="Repas1" class="col-md-6 col-sm-6 col-xs-12">
										  <select class="form-control" name="Repas1" id="Repas1">
											<option>Choisir</option>
											<option>Petit déjeuner.</option>
											<option>Déjeuner.</option>
											<option>Pause-café</option>
											<option>Dîner</option>
										  </select>
										</div>
									</div>				
								  <div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">nombre 
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input type="text" id="nb_Repas" name="nb" class="form-control col-md-7 col-xs-12">
									</div>
								  </div>
								   <div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Coût
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input type="text" id="coutg_Repas" name="coutg" class="form-control col-md-7 col-xs-12">
									</div>
								  </div>
						 <div class="form-group">		  
								<label class="col-md-3 col-sm-3 col-xs-12 control-label">Cancernants </label>

								<div class="col-md-9 col-sm-9 col-xs-12">
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat" checked="checked"> Intervenants
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat" checked="checked"> Participants
									</label>
								  </div>
								  <div class="checkbox">
									<label>
									  <input type="checkbox" class="flat" checked="checked"> Personnels
									</label>
								  </div>
							</div>
							</div>	
              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <span id="resultat_repas"></span>
                        </div>
              </div>

							   
								  <div class="ln_solid"></div>
								  <div class="form-group">
									<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									  <button type="submit" class="btn btn-primary">Annuler</button>
<button type="button" onclick="ajouter_repas();" class="btn btn-success">Ajouter</button>     
									  <button type="submit" class="btn btn-success">Ajouter autre repas</button>
									</div>
								  </div>

								</form>
							  </div>
							</div>
						  </div>
						</div>
				</div>



                    </div>
                    <!-- End SmartWizard Content -->
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

    <script type="text/javascript" src="js/ajax/ajax_pub.js"></script> 
    
    <script type="text/javascript" src="js/ajax/ajax_equipement.js"></script> 
    
    <script type="text/javascript" src="js/ajax/ajax_salle.js"></script> 
    
    <script type="text/javascript" src="js/ajax/ajax_repas.js"></script> 
    
    <script type="text/javascript" src="js/ajax/ajax_goodies.js"></script> 
    
    <script type="text/javascript" src="js/ajax/ajax_participant.js"></script> 
    
    <script type="text/javascript" src="js/ajax/ajax_intervenant.js"></script> 
    
    <script type="text/javascript" src="js/ajax/ajax_publicite.js"></script> 

    
    <script type="text/javascript" src="js/ajax/ajax_categorie.js"></script> 
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
	 <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
     <!-- bootstrap-daterangepicker -->
    <script src="js/moment/moment.min.js"></script>
    <script src="js/datepicker/daterangepicker.js"></script>   
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="js/moment/moment.min.js"></script>
    <script src="js/datepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="js/custom.js"></script>

    <!-- jQuery Smart Wizard -->
    <script>
      $(document).ready(function() {
        $('#wizard').smartWizard();

        $('#wizard_verticle').smartWizard({
          transitionEffect: 'slide'
        });

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-default');
      });
    </script>
	
	

	 
   <script>

      $(document).ready(function() {
        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange_right_2 span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
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
          opens: 'right',
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

        $('#reportrange_right_2 span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

        $('#reportrange_right_2').daterangepicker(optionSet1, cb);

        $('#reportrange_right_2').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange_right_2').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange_right_2').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange_right_2').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });

        $('#options1').click(function() {
          $('#reportrange_right_2').data('daterangepicker').setOptions(optionSet1, cb);
        });

        $('#options2').click(function() {
          $('#reportrange_right_2').data('daterangepicker').setOptions(optionSet2, cb);
        });

        $('#destroy').click(function() {
          $('#reportrange_right_2').data('daterangepicker').remove();
        });

      });
    </script>
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
   
   function validate_heb(){

    document.getElementById('nom_heb').disabled= !document.getElementById('nom_heb').disabled;
    document.getElementById('adr_heb').disabled= !document.getElementById('adr_heb').disabled;
    document.getElementById('dure_heb').disabled= !document.getElementById('dure_heb').disabled;
    document.getElementById('cout_heb').disabled= !document.getElementById('cout_heb').disabled;
 
   }</script>

	 <script>
      $(document).ready(function() {
        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange_right span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
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
          opens: 'right',
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

        $('#reportrange_right span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

        $('#reportrange_right').daterangepicker(optionSet1, cb);

        $('#reportrange_right').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange_right').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange_right').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange_right').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });

        $('#options1').click(function() {
          $('#reportrange_right').data('daterangepicker').setOptions(optionSet1, cb);
        });

        $('#options2').click(function() {
          $('#reportrange_right').data('daterangepicker').setOptions(optionSet2, cb);
        });

        $('#destroy').click(function() {
          $('#reportrange_right').data('daterangepicker').remove();
        });

      });
    </script>
	
	

    <!-- /jQuery Smart Wizard -->
  </body>

</html>
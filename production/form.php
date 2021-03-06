<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="57x57" href="../accueil/img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../accueil/img/favicons/apple-touch-icon-60x60.png">
  <link rel="icon" type="image/png" href="../accueil/img/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="../accueil/img/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="../accueil/img/favicons/manifest.json">
  <link rel="shortcut icon" href="../accueil/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#00a8ff">
  <meta name="msapplication-config" content="../accueil/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
    <title>Budgito | Ajouter des ressources </title>

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
    <?php include('php/sidebare.php');
?>

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
                    <p>Ajouter les ressources dont vous avez besoin ainsi le coût prévu pour chaque ressources .</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Ressources 1<br />
                                              <small>Salle</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Ressources 2<br />
                                              <small>Equipements et personnels</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Ressources 3<br />
                                              <small>Intervenants</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              Ressources 4<br />
                                              <small>Publicité et goodies</small>
                                          </span>
                          </a>
                        </li>
						
						
					             	<li>
                          <a href="#step-5">
                            <span class="step_no">5</span>
                            <span class="step_descr">
                                              Ressources 5<br />
                                              <small>Ressources 5 Restauration</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-6">
                            <span class="step_no">6</span>
                            <span class="step_descr">
                                              Ressources 6<br />
                                              <small>Autres catégories</small>
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

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nom <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nom_salle" name="nom" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">type <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="type_salle" name="type" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">adresse <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="adr_salle" name="adr" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     <div class="item form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">surface </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="surface_salle" class="form-control col-md-7 col-xs-12" type="text" name="surface">
                        </div>
                      </div>
                   
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">tarif estimé <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tarif_salle" name="tarif" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">nombre de place <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="place_salle" name="nbplace" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>

            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <span id="resultat_salle"></span>
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>

                      <div class="item form-group">
                      
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
                        <h2 class="StepTitle">Ressources 2 Equipement et personnels</h2>
                        
						
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
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nom <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nom_equipement" name="nom" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    
					   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">coût d'achat (unitaire) <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="achat_equipement" name="achat" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					         
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <span id="resultat_Equi"></span>
                        </div>
                      </div>
                   
                      <div class="ln_solid"></div>
                      <div class="item form-group">
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
     <form method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
						
                <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Catégorie <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="categor_personnel" name="categor_personnel" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
                 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">coût estime <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="achat_cat" name="achat_cat" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>  
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <span id="resultat_cat"></span>
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="item form-group">
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
		<h2 class="StepTitle">Ressources 3 Les intervenants</h2>
    
						
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
								
							  <div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">nom <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
								  <input type="text" id="nom_Int" name="nom_Int" required="required" class="form-control col-md-7 col-xs-12">
								</div>
							  </div>
                <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">prenom <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="prenom_Int" name="prenom_Int" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
			         <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Coût estimé
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="cout_int" name="cout_int" class="form-control col-md-7 col-xs-12">
                  </div>
                  </div>

							 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <span id="resultat_inter"></span>
                        </div>
                </div>
             <div class="ln_solid"></div>
							  <div class="item form-group">
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
					  
					  
					  
					  
                      <div id="step-4">
                        <h2 class="StepTitle">Ressources 4 Publicité et goodies</h2>
                  
						
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
	<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">




<div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Type Publicite</label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
        

<input type="text" id="typepub" name="typepub" class="form-control col-md-7 col-xs-12">

</div> 
</div>

  <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">coût 
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="coutpub" name="coutpub" class="form-control col-md-7 col-xs-12">
                  </div>
                  </div>
								        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <span id="resultat_pub">

                      </span>
                        </div>
                      </div>
                 
							   
								  <div class="ln_solid"></div>
								  <div class="item form-group">
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
									 <div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nom 
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input type="text" id="nomg" name="nomg" class="form-control col-md-7 col-xs-12">
									</div>
								  </div>
								  
								   <div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Coût unitaire
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input type="text" id="coutg" name="coutg" class="form-control col-md-7 col-xs-12">
									</div>
								  </div>
					 

               <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <span id="resultat_goo"></span>
                        </div>
                      </div>
							   
								  <div class="ln_solid"></div>
								  <div class="item form-group">
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
                        <h2 class="StepTitle">Ressources 5 Restaurations</h2>
                           
					  
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
									<div class="item form-group">
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
								  
								   <div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Coût unitaire
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input type="text" id="coutg_Repas" name="coutg" class="form-control col-md-7 col-xs-12">
									</div>
								  </div>
				<!--		 <div class="item form-group">		  
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
							</div>	-->
              <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <span id="resultat_repas"></span>
                        </div>
              </div>

							   
								  <div class="ln_solid"></div>
								  <div class="item form-group">
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

				<div id="step-6">
                        <h2 class="StepTitle">Ressources 6 Autre </h2>
                           
            
              <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                <h2>Ajouter Autre catégories<small> informations</small></h2>
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
                  
                   <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Catégories
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="categorR" name="categorR" class="form-control col-md-7 col-xs-12">
                  </div>
                  </div>
                 
                  <div class="ln_solid"></div>
                  <div class="item form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">Annuler</button>
<button type="button" onclick="ajouter_ressource();" class="btn btn-success">Ajouter</button>     
                    <button type="submit" class="btn btn-success">Ajouter autre Categories</button>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Insertion</h4>
      </div>
      <div class="modal-body">
        <p id="resultat"></p>
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
          <p>&copy; 2016 All Rights Reserved. Powered by TeamTT@ESI</p>
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

    <script type="text/javascript" src="js/ajax/ajax_ressource.js"></script>
    
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
	
    <!-- validator -->
    <script src="../vendors/validator/validator.min.js"></script>
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
	
	
    <!-- validator -->
    <script>
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
    <!-- /validator -->
  </body>

</html>
<?php 
include("php/connexion.php");     
session_start();
$db = data_base_connect();


if(!isset($_SESSION['iduser'])){
    header('Location: login/login.php');
}
 $user = $db->prepare('SELECT * FROM user where id='.$_SESSION['iduser']);

            $user->execute();
           $userr = $user->fetch();
$db = data_base_connect (); 
echo '<div class="container body">
      <div class="main_container">

        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                    <a href="index_colloque.php" class="site_title"><img src="images/logo_45x45.png" alt="..."> <span>Budgito</span></a>
                </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenue,</span>
            <h2>'.$userr["nom"]." ".$userr["prenom"].'</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index_colloque.php"><i class="fa fa-home"></i> Gestion des colloque </a>
       
                  </li>
                  <li><a href="form.php"><i class="fa fa-edit"></i> ajouter des ressources</a>
                 
                  </li>

                  <li><a href="recettes.php"><i class="fa fa-edit"></i>Recettes</a>
                 
                  </li>
                  <li><a href="graphes.php"><i class="fa fa-edit"></i> Statisrique</a>
                 
                  </li>

                  <li><a href ="tables.php"><i class="fa fa-table"></i> Tous les Ressources</a>
                    
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
                    <img src="images/img.jpg" alt="">'.$userr["nom"]." ".$userr["prenom"].'<span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                   
                    <li>
                      <a href="help/app/index.html">Help</a>
                    </li>
                    <li><a href="login/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </li>
                  </ul>
                </li>


              </ul>
            </nav>
          </div>

        </div>
        <!-- /top navigation -->';
        ?>
<?php
session_start();
if(isset($_SESSION['id']) AND isset($_SESSION['adr']) AND isset($_SESSION['nom_util']) AND isset($_SESSION['type']))
{
    header('Location: index_colloque.php');
}
?>

<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=budgeto', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
<?php

if (array_key_exists('nom_util_ens', $_POST)) {
    if (isset($_POST['nom_util_ens']) && isset($_POST['mot_passe'])) {
        if (preg_match("#^[0-9a-zA-Z._-]@[0-9a-zA-Z].[a-zA-z]$#", htmlspecialchars($_POST['nom_util_ens']))) {
            $req = $bdd->prepare('SELECT *FROM user WHERE adressemail=?');
            $req->execute(array($_POST['nom_util_ens']));
        } else {
            $req = $bdd->prepare('SELECT *FROM user WHERE nomuser=?');
            $req->execute(array($_POST['nom_util_ens']));
        }
        if ($data_util = $req->fetch()) {
            if (!strcmp($data_util['motpasse'], md5(htmlspecialchars($_POST['mot_passe'])))) {
                $_SESSION['id'] = $data_util['id'];
                $_SESSION['adr'] = $data_util['adressemail'];
                $_SESSION['nom_util'] = $data_util['nomuser'];
                header("Location: index_colloque.php");
            }
        }
    }}
            ?>


    <!DOCTYPE html>
    <html lang="fr" style="background: url(img/Choix-login.jpg);">

    <head>
        <meta charset="UTF-8"/>

        <link href="css/style1.css" rel='stylesheet' type='text/css'/>
        <link href="css/cstyle.css" rel='stylesheet'/>

        <link rel="shortcut icon" href="images/favicon.ico">
        <title>S'identifier</title>

        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">

        <!-- Animate CSS -->
        <link href="css/animate.css" rel="stylesheet" media="screen">

        <!-- Main CSS -->
        <link href="css/main.css" rel="stylesheet" media="screen">

        <!-- Main CSS -->
        <link href="css/login.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="fonts/font-awesome.min.css" rel="stylesheet">

        <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>




    <!-- Container Fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-push-4 col-md-4 col-sm-push-3 col-sm-6 col-sx-12">

                <!-- Header end -->
                <div class="login-container">
                    <div class="login-wrapper animated flipInY">
                        <div id="login" class="show">
                            <div class="login-header">
                                <h4>Connectez-vous à votre compte</h4>
                            </div>
                            <form action="login.php" method="post">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="userName">Nom d'utilisateur</label>
                                    <input name="nom_util_ens" type="text" class="form-control" id="userName"
                                           placeholder="Nom d'utilisateur" autofocus>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="passWord">Mot de passe</label>
                                    <input name="mot_passe" type="password" class="form-control" id="passWord"
                                           placeholder="*********">
                                </div>
                                <input type="submit" value="S'identifier" name="log" class="btn btn-danger btn-lg btn-block">
                            </form>
                            <div class="error_alert" id="passwrd_alert" style="display:none"><img src="img/alert.png"
                                                                                                  class="alert_pic"
                                                                                                  id="alert_pic"/>
                                <p id="alert_msg"></p></div>
                            <a href="#forgot-pwd" class="underline text-info">Mot de passe oublié ?</a>
                            <a href="#register">Ne pas avoir un compte? <span class="text-danger">S'inscrire</span></a>
                        </div>

                        <div id="register" class="form-action hide">
                            <div class="login-header">
                                <h4>Inscrivez vous pour logIT</h4>
                            </div>
                            <form id="defaultForm" action="php/insert_user.php" method="post">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="nom">Nom</label>
                                    <input type="text" class="form-control" id="nom1" name="nom">
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="prenom">Prénom</label>
                                    <input type="text" class="form-control" id="prenomnom1" name="prenom">
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="userName1">Nom d'utilisateur</label>
                                    <input type="text" class="form-control" id="userName1" name="username">
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="adressmail1">Adresse mail</label>
                                    <input type="text" class="form-control" id="adressmail1" name="adressmail">
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="password1">Mot de passe</label>
                                    <input type="password" class="form-control" id="password1" name="password">
                                </div>
                                <!--<div class="form-group has-feedback">
                                    <label class="control-label" for="password2">Confirmez mot de passe</label>
                                    <input type="password" class="form-control" id="password2" name="password2">
                                </div>-->
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="tel">Numéro de téléphone</label>
                                    <input type="text" class="form-control" id="tel1" name="tel">
                                </div>
                                <input type="submit" value="S'inscrire" class="btn btn-danger btn-lg btn-block">
                            </form>
                            <a href="#login">Vous avez déjà un compte? <span class="text-danger">S'identifier</span></a>
                        </div>

                        <div id="forgot-pwd" class="form-action hide">
                            <div class="login-header">
                                <h4>Réinitialisez votre mot de passe</h4>
                            </div>
                            <form action="php/changermotpasse.php" method="post" action="login.php">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="password4">Adresse mail</label>
                                    <input type="text" class="form-control" id="adrm" name="adrm">
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="password3">Mot de passe</label>
                                    <input type="password" class="form-control" id="passm" name="passm">
                                </div>
                                <input type="submit" value="Réinitialiser" class="btn btn-danger btn-lg btn-block">
                            </form>
                            <a href="#register">Ne pas avoir un compte? <span class="text-danger">S'inscrire</span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container Fluid ends -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        (function ($) {
            // constants
            var SHOW_CLASS = 'show',
                HIDE_CLASS = 'hide',
                ACTIVE_CLASS = 'active';

            $('a').on('click', function (e) {
                e.preventDefault();
                var a = $(this),
                    href = a.attr('href');

                $('.active').removeClass(ACTIVE_CLASS);
                a.addClass(ACTIVE_CLASS);

                $('.show')
                    .removeClass(SHOW_CLASS)
                    .addClass(HIDE_CLASS)
                    .hide();

                $(href)
                    .removeClass(HIDE_CLASS)
                    .addClass(SHOW_CLASS)
                    .hide()
                    .fadeIn(550);
            });
        })(jQuery);
    </script>


    </body>

    </html>


    <script>
        function insertAfter(newElement, afterElement) {
            var parent = afterElement.parentNode;
            if (parent.lastChild === afterElement) { // Si le dernier élément est le même que l'élément après lequel on veut insérer, il suffit de faire appendChild()
                parent.appendChild(newElement);
            }
            else { // Dans le cas contraire, on fait un insertBefore() sur l'élément suivant
                parent.insertBefore(newElement, afterElement.nextSibling);
            }
        }
    </script>

<?php

if (array_key_exists('nom_util_ens', $_POST)) {
    if (isset($_POST['nom_util_ens']) && isset($_POST['mot_passe'])) {
        if (preg_match("#^[0-9a-zA-Z._-]@[0-9a-zA-Z].[a-zA-z]$#", htmlspecialchars($_POST['nom_util_ens']))) {
            $req = $bdd->prepare('SELECT *FROM user WHERE adressemail=?');
            $req->execute(array($_POST['nom_util_ens']));
        } else {
            $req = $bdd->prepare('SELECT *FROM user WHERE nomuser=?');
            $req->execute(array($_POST['nom_util_ens']));
        }
        if ($data_util = $req->fetch()) {
            if (strcmp($data_util['motpasse'], md5(htmlspecialchars($_POST['mot_passe'])))) {

//appel fonction java script mot de passe erroné
                $_SESSION['nom_util'] = $data_util['nomuser'];
                ?>
                <script>
                    var p = document.getElementById("mot_passe");
                    var e = document.getElementById("passwrd_alert");
                    e.setAttribute('style', 'display:block');
                    document.getElementById("alert_msg").innerHTML = 'Mot de passe erroné';
                    insertAfter(e, p);
                </script>
                <?php
            }
        } else {
            //appel fonction java script adress e-mail erronée
            ?>
            <script>
                var p = document.getElementById("userName");
                var e = document.getElementById("passwrd_alert");
                e.setAttribute('style', 'display:block');
                document.getElementById("alert_msg").innerHTML = 'Adress E-mail Ou Nom D\'utilisateur erroné';
                insertAfter(e, p);
            </script>
            <?php
        }
    } else {
        //appel fonction java script adress e-mail ou mot de passe non set
        ?>
        <script>
            var p = document.getElementById("userName");
            var e = document.getElementById("passwrd_alert");
            e.setAttribute('style', 'display:block');
            document.getElementById("alert_msg").innerHTML = 'Adress E-mail Ou Nom D\'utilisateur non set';
            insertAfter(e, p);
        </script>
        <?php
    }
}
?>
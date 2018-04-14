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
    <title>Budgito | Calandrier </title>

    <meta name="description" content="Everest Admin Panel" />
    <meta name="keywords" content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Wrapbootstrap, Bootstrap" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="shortcut icon" href="img/favicon.ico">
    
    
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">

    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet" media="screen">

    <!-- Alertify CSS -->
    <link href="css/alertify/alertify.core.css" rel="stylesheet">
    <link href="css/alertify/alertify.default.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="css/main.css" rel="stylesheet" media="screen">

    <!-- Font Awesome -->
    <link href="fonts/font-awesome.min.css" rel="stylesheet">

    <!-- Calendar CSS -->
    <link rel="stylesheet" href="css/fullcalendar.css">



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
    
        <!-- /top navigation --><?php

include('php/sidebare_col.php');

$colloque=$_SESSION['idCol'];

if(isset($colloque)){
  
include('php/cout.php');
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
              <span class="count_bottom"><i class="green"></i> million dinars algerien</span>
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

    $statement = $db->prepare('SELECT * FROM Colloque WHERE idCol='.$colloque);
            try {
             $statement->execute(); 
            } catch (Exception $e) {
                  exit($e ->getMessage());
            }
            while($option = $statement->fetch()){ ?>


          <div class="row">
            

<div class="col-md-9 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_330">
                <div class="x_title">
                  <h2>Calendrier</h2>

                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>


                <div class="x_content">

          <!-- Spacer Starts -->
          <div class="spacer clearfix">
            <div id="calendar"></div>
          </div>
          <!-- Spacer Ends -->

</div>
</div>  
</div>

      <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_330">
                <div class="x_title">
                  <h2>Ressources</h2>

                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>


                <div class="x_content">
           
        
        <!-- Addons starts -->
        <div class="add-on clearfix">
          <div class="add-on-wrapper">
            <h5>Ressources</h5>
            <div id="external-events">
              
              <div class="ext-event btn btn-fb">goodies</div>

              <div class="ext-event btn btn-gplus">personnel</div>

              <div class="ext-event btn btn-brown">Repas</div>

              <div class="ext-event btn btn-info">Ajouter</div>
              
              <p>
                <input type="checkbox" id="drop-remove" />
                <label for="drop-remove">Remove after drop</label>
              </p>
            </div>
          </div>
        </div>
        <!-- Addons ends -->

  
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
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Sparkline graphs -->
    <script src="js/sparkline.js"></script>

    <!-- jquery ScrollUp JS -->
    <script src="js/scrollup/jquery.scrollUp.js"></script>

    <!-- Notifications JS -->
    <script src="js/alertify/alertify.js"></script>
    <script src="js/alertify/alertify-custom.js"></script>

    <!-- Fullcalendar JS -->
    <script src="js/jquery.ui.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
   <!-- <script src="js/calendar/fullcalendar.js"></script>-->







<script type="text/javascript">


  $(document).ready(function() {
/* initialize the external events
     -----------------------------------------------------------------*/

  $('#external-events div.ext-event').each(function() {

    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
    // it doesn't need to have a start or end
    var eventObject = {
      title: $.trim($(this).text()) // use the element's text as the event title
    };

    // store the Event Object in the DOM element so we can get to it later
    $(this).data('eventObject', eventObject);

    // make the event draggable using jQuery UI
    $(this).draggable({
      zIndex: 999,
      revert: true,      // will cause the event to go back to its
      revertDuration: 0  //  original position after the drag
    });

  });


  /* initialize the calendar
   -----------------------------------------------------------------*/

  var date = new Date();
  var d = date.getDate();
  var m = date.getMonth();
  var y = date.getFullYear();

  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,basicWeek,basicDay'
    },
    editable: true,
    droppable: true, // this allows things to be dropped onto the calendar !!!
    drop: function(date, allDay) { // this function is called when something is dropped

      // retrieve the dropped element's stored Event Object
      var originalEventObject = $(this).data('eventObject');

      // we need to copy it, so that multiple events don't have a reference to the same object
      var copiedEventObject = $.extend({}, originalEventObject);

      // assign it the date that was reported
      copiedEventObject.start = date;
      copiedEventObject.allDay = allDay;

      // render the event on the calendar
      // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
      $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

      // is the "remove after drop" checkbox checked?
      if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
        $(this).remove();
      }

    },
    
    events: [
      
      <?php include('php/events.php');?>
    ]
  }); 
});


</script>
<script type="text/javascript">
  
</script>
    <!-- Custom Index -->
    <script src="js/custom.js"></script>

    <!-- /gauge.js -->
  </body>
</html>
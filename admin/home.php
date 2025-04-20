 <?php  include('../dbcon.php') ?>
 <?php  include('../session.php') ;
 $g7_query = $conn->query("select * from number where grade_level='Grade 7'");
$g7_row = $g7_query->fetch();
$g7team_name=$g7_row['team_name'];
$g7team_num=$g7_row['num'];


$g8_query = $conn->query("select * from number where grade_level='Grade 8'");
$g8_row = $g8_query->fetch();
$g8team_name=$g8_row['team_name'];
$g8team_num=$g8_row['num'];


$g9_query = $conn->query("select * from number where grade_level='Grade 9'");
$g9_row = $g9_query->fetch();
$g9team_name=$g9_row['team_name'];
$g9team_num=$g9_row['num'];


$g10_query = $conn->query("select * from number where grade_level='Grade 10'");
$g10_row = $g10_query->fetch();
$g10team_name=$g10_row['team_name'];
$g10team_num=$g10_row['num'];
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BCC-High School</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../assets/css/docs.css" rel="stylesheet">
    <link href="../assets/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../bcc_logo.png">

<style>
body { 
  
   	background: url('../intrams.jpg') no-repeat center center fixed;
	-webkit-background-size: cover !important; 
	-moz-background-size: cover !important; 
	-o-background-size: cover !important; 
	background-size: cover !important; 
}
</style>


    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-146052-10']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <a class="brand"><img src="../bcc_logo.png" width="23" height="23" />&nbsp; BCC High School - Admin</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
                <a href="home.php">Home</a>
              </li>
                <li class="">
                <a href="judges.php">Judges</a>
              </li>
               <li class="">
                <a href="settings.php">Settings</a>
              </li>
              <li class="">
                <a target="_blank" href="print_results.php">Print Results</a>
              </li>
                <li class="">
                <a href="logout.php">Log-out <?php echo $fullname; ?></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>Intramural 2015 : Cultural Tilt</h1>
   <p class="lead">Binalbagan Catholic College High School Department</p>
  </div>
</header>


  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
       <div class="span1">
       </div>
      <div class="span10">



        <!-- Declamation
        ================================================== -->
        <section id="download-bootstrap">
      
        <table>
        <tr>
        <td><div class="alert alert-success"><h4><?php echo "Grade 7 ".$g7team_name; ?><br />Advisers:<br />
        names here
        </h4></div></td>
            <td><div class="alert alert-notification"><h4><?php echo "Grade 8 ".$g8team_name; ?><br />Advisers:<br />
        names here
            </h4></div></td>
                <td><div class="alert alert-danger"><h4><?php echo "Grade 9 ".$g9team_name; ?><br />Advisers:<br />
        names here
                </h4></div></td>
                    <td><div class="alert alert-info"><h4><?php echo "Grade 10 ".$g10team_name; ?><br />Advisers:<br />
        names here
                    </h4></div></td>
        </tr>
           
        
         <tr>
              <td colspan="4"><div class="alert alert-default"><center>
              <h3>principal</h3><br />
               <h3>atms</h3>
              </center></div></td>
        </tr>
        
        </table>
     
        </section>
 
      </div>
       <div class="span1">
       </div>
    </div>

  </div>

  
    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <font size="3">Binalbagan Catholic College, Inc.</font>
        <p>Binalbagan, Negros Occidental</p>
        <p>Telefax No (034) 3888-927 &middot; Tel. Nos. College Dept. Admin Office: (034) 3888-383</p>
         <p>Guidance Office: (034) 3888-596 &middot; Email Address: binalbagan_bcc@yahoo.com</p>
       
        
      </div>
    </footer>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    <script src="../assets/js/bootstrap-affix.js"></script>

    <script src="../assets/js/holder/holder.js"></script>
    <script src="../assets/js/google-code-prettify/prettify.js"></script>

    <script src="../assets/js/application.js"></script>


    <!-- Analytics
    ================================================== -->
    <script>
      var _gauges = _gauges || [];
      (function() {
        var t   = document.createElement('script');
        t.type  = 'text/javascript';
        t.async = true;
        t.id    = 'gauges-tracker';
        t.setAttribute('data-site-id', '4f0dc9fef5a1f55508000013');
        t.src = '//secure.gaug.es/track.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(t, s);
      })();
    </script>

  </body>
</html>

 <?php  include('../dbcon.php');
 
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../favicon.ico">

    <title>BCC-High School</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    
    
  </head>
  
  <style>
body { 
    background-image: url('../intrams.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
}
</style>
<!-- NAVBAR
================================================== -->
  <body>

    <div class="container">
     
     
     
     <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <table><tr><td><img src="../bcc_logo.png" width="30" height="30" />&nbsp;</td> <td><a href="../index.php" class="navbar-brand">BCC High School-Admin</a></td></tr></table> 
            </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
     
      <ul class="nav navbar-nav navbar-right">
        <li> 
        <div class="form-group">
            <?php include('login_form.php') ?> 
        </div>
      
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 
     
   
<nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
<table><tr><td><img src="../HTC.png" width="45" height="45" /> </td><td><p><br /> Powered by: BCC High School Dept. - High Tech Club</p></td></tr></table>
     
  </div>
</nav>
 
       </div> 
 

    </div>
      
      

     

    </div> <!-- /container -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/js/npm.js"></script>
     <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    
    
     <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap-transition.js"></script>
    <script src="../bootstrap/js/bootstrap-alert.js"></script>
    <script src="../bootstrap/js/bootstrap-modal.js"></script>
    <script src="../bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="../bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="../bootstrap/js/bootstrap-tab.js"></script>
    <script src="../bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="../bootstrap/js/bootstrap-popover.js"></script>
    <script src="../bootstrap/js/bootstrap-button.js"></script>
    <script src="../bootstrap/js/bootstrap-collapse.js"></script>
    <script src="../bootstrap/js/bootstrap-carousel.js"></script>
    <script src="../bootstrap/js/bootstrap-typeahead.js"></script>
    <script src="../bootstrap/js/bootstrap-affix.js"></script>

    <script src="../bootstrap/js/holder/holder.js"></script>
    <script src="../bootstrap/js/google-code-prettify/prettify.js"></script>

    <script src="bootstrap/js/application.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

 
 
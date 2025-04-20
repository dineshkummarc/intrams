 <?php  include('../dbcon.php') ?>
 <?php  include('../session.php') ;
  
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
              <li class="">
                <a href="home.php">Home</a>
              </li>
                <li class="">
                <a href="judges.php">Judges</a>
              </li>
               <li class="active">
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
    <h1>Judges</h1>
   <p class="lead">Binalbagan Catholic College High School Department</p>
  </div>
</header>


  <div class="container">

   <div class="span2">
   </div>
      <div class="span8">



        <!-- Declamation
        ================================================== -->
        <section id="download-bootstrap">
          <div class="page-header">
            <h1>List of Judges</h1>
          <a href="add_judges.php" class="btn btn-primary"> Add Judge</a> 
          </div>
   
   
   <table class="table table-striped">
   <thead>
   <th>Year Level</th>
    <th>Name</th>
    <th>Sequence</th>
     <th>Actions</th>
   </thead>
   <tbody>
   
   <?php 	$query = $conn->query("select * from number") or die(mysql_error());
		while ($row = $query->fetch()) { ?>
   <tr>
   
    <td>
   
     <?php echo $row['grade_level'];?>
       </td>
        <td>
   
     <?php echo $row['team_name'];?>
       </td>
        <td>
   
     <?php echo $row['num'];?>
       </td>
     <td><a href="edit_team.php?num_id=<?php echo $row['num_id'];?>" class="btn btn-success"> Edit</a> 
   </tr>
   <?php } ?>
   </tbody>
   </table>
        </section>

 
 
  
      </div>
       <div class="span2">
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

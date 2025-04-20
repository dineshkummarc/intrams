 <?php  include('dbcon.php') ?>
 <?php  include('session.php') ;
 
 
 $user_query = $conn->query("select * from judges where judge_id = '$session_id'");

$user_row = $user_query->fetch();
 
 $e1stat=$user_row['e1_stat'];
  $e2stat=$user_row['e2_stat'];
   $e3stat=$user_row['e3_stat'];
    $e4stat=$user_row['e4_stat'];
     $e5stat=$user_row['e5_stat'];
      $e6stat=$user_row['e6_stat'];
       $e7stat=$user_row['e7_stat'];
       
       $e1=$user_row['e1'];
  $e2=$user_row['e2'];
   $e3=$user_row['e3'];
    $e4=$user_row['e4'];
     $e5=$user_row['e5'];
      $e6=$user_row['e6'];
       $e7=$user_row['e7'];
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
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="bcc_logo.png">

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
                <a class="brand"><img src="bcc_logo.png" width="23" height="23" />&nbsp; BCC - High School</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
                <a href="home.php">Home</a>
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
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#download-bootstrap"><i class="icon-chevron-right"></i> Declamation</a></li>
          <li><a href="#file-structure"><i class="icon-chevron-right"></i> Impromptu Speech</a></li>
          <li><a href="#contents"><i class="icon-chevron-right"></i> Vocal Solo</a></li>
          <li><a href="#html-template"><i class="icon-chevron-right"></i> Pop Song</a></li>
          <li><a href="#examples"><i class="icon-chevron-right"></i> Chorale Singing</a></li>
          <li><a href="#what-next"><i class="icon-chevron-right"></i> Hip-Hop Dance</a></li>
           <li><a href="#trip"><i class="icon-chevron-right"></i> Dance Sports</a></li>
        </ul>
      </div>
      <div class="span9">



        <!-- Declamation
        ================================================== -->
        <section id="download-bootstrap">
          <div class="page-header">
            <h1>Declamation</h1> 
            <?php 
            if($e1=="ok")
            {
            if($e1stat=="Undone")
            {
            ?>
             <a class="btn btn-primary" href="declamation/declamation.php">Go to Judge Panel</a> 
                 <?php
                 }
            ?>
            <?php 
            if($e1stat=="Done")
            {
            ?>
                <a class="btn btn-success" href="declamation/edit_declamation.php">Edit Data</a>
                 <?php
                 }}
            ?>
        
         
          </div>
   
        </section>



        <!-- Impromptu Speech
        ================================================== -->
        <section id="file-structure">
          <div class="page-header">
            <h1>Impromptu Speech</h1>
             <?php 
            if($e2=="ok")
            {
            if($e2stat=="Undone")
            {
            ?>
             <a class="btn btn-primary" href="impromptu/impromptu.php">Go to Judge Panel</a> 
                 <?php
                 }
            ?>
            <?php 
            if($e2stat=="Done")
            {
            ?>
                <a class="btn btn-success" href="impromptu/edit_impromptu.php">Edit Data</a>
                 <?php
                 }}
            ?>
          </div>
           
        </section>



        <!-- Vocal Solo
        ================================================== -->
        <section id="contents">
          <div class="page-header">
            <h1>Vocal Solo</h1>
             <?php 
            if($e3=="ok")
            {
            if($e3stat=="Undone")
            {
            ?>
             <a class="btn btn-primary" href="vocalsolo/vocalsolo.php">Go to Judge Panel</a> 
                 <?php
                 }
            ?>
            <?php 
            if($e3stat=="Done")
            {
            ?>
                <a class="btn btn-success" href="vocalsolo/edit_vocalsolo.php">Edit Data</a>
                 <?php
                 }}
            ?>
          </div>
          
        </section>



        <!-- Pop Song
        ================================================== -->
        <section id="html-template">
          <div class="page-header">
            <h1>Pop Song</h1>
             <?php 
            if($e4=="ok")
            {
            if($e4stat=="Undone")
            {
            ?>
             <a class="btn btn-primary" href="popsong/popsong.php">Go to Judge Panel</a> 
                 <?php
                 }
            ?>
            <?php 
            if($e4stat=="Done")
            {
            ?>
                <a class="btn btn-success" href="popsong/edit_popsong.php">Edit Data</a>
                 <?php
                 }}
            ?>
          </div>
               </section>



        <!-- Chorale Singing
        ================================================== -->
        <section id="examples">
          <div class="page-header">
            <h1>Chorale Singing</h1>
             <?php 
            if($e5=="ok")
            {
            if($e5stat=="Undone")
            {
            ?>
             <a class="btn btn-primary" href="chorale/chorale.php">Go to Judge Panel</a> 
                 <?php
                 }
            ?>
            <?php 
            if($e5stat=="Done")
            {
            ?>
                <a class="btn btn-success" href="chorale/edit_chorale.php">Edit Data</a>
                 <?php
                 }}
            ?>
          </div>
                </section>




        <!-- Hip-Hop Dance
        ================================================== -->
        <section id="what-next">
          <div class="page-header">
            <h1>Hip-Hop Dance</h1>
             <?php 
            if($e6=="ok")
            {
            if($e6stat=="Undone")
            {
            ?>
             <a class="btn btn-primary" href="hiphop/hiphop.php">Go to Judge Panel</a> 
                 <?php
                 }
            ?>
            <?php 
            if($e6stat=="Done")
            {
            ?>
                <a class="btn btn-success" href="hiphop/edit_hiphop.php">Edit Data</a>
                 <?php
                 }}
            ?>
          </div>
           </section>




  <!-- Dance Sports
        ================================================== -->
        <section id="trip">
          <div class="page-header">
            <h1>Dance Sports</h1>
             <?php 
            if($e7=="ok")
            {
            if($e7stat=="Undone")
            {
            ?>
             <a class="btn btn-primary" href="dancesports/dancesports.php">Go to Judge Panel</a> 
                 <?php
                 }
            ?>
            <?php 
            if($e7stat=="Done")
            {
            ?>
                <a class="btn btn-success" href="dancesports/edit_dancesports.php">Edit Data</a>
                 <?php
                 }}
            ?>
          </div>
          </section>
 
  
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
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>

    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>

    <script src="assets/js/application.js"></script>


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

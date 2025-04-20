 <?php  include('../dbcon.php') ?>
 <?php  include('../session.php') ;
 $d1="1";
  $d2="2";
   $d3="3";
    $d4="4";
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
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#download-bootstrap"><i class="icon-chevron-right"></i> Declamation Results</a></li>
          <li><a href="#file-structure"><i class="icon-chevron-right"></i> Impromptu Speech Results</a></li>
          <li><a href="#contents"><i class="icon-chevron-right"></i> Vocal Solo Results</a></li>
          <li><a href="#html-template"><i class="icon-chevron-right"></i> Pop Song Results</a></li>
          <li><a href="#examples"><i class="icon-chevron-right"></i> Chorale Singing Results</a></li>
          <li><a href="#what-next"><i class="icon-chevron-right"></i> Hip-Hop Dance Results</a></li>
           <li><a href="#trip"><i class="icon-chevron-right"></i> Dance Sports Results</a></li>
        </ul>
      </div>
      <div class="span9">



        <!-- Declamation
        ================================================== -->
        <section id="download-bootstrap">
          <div class="page-header">
            <h1>Declamation</h1> 
            </div>
   <table class="table table-striped">
        <tr>
          <td> <h1>English</h1> </td>
          </tr>
          <tr>
          <td> <h1>Performer 1</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
      <th>Interpretation</th>
         <th>Diction</th>
          <th>Suitability</th>
        <th>Mastery</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $ds_tot_equi=0;
       	$query = $conn->query("select * from declamation where declaimer_num='$d1' and type='English'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $ds_tot_equi=$ds_tot_equi+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
        <td><?php echo $row['interpretation']; ?></td>
         <td><?php echo $row['diction']; ?></td>
         <td><?php echo $row['suitability']; ?></td>
       <td><?php echo $row['mastery']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php  $ds_tot_equi=$ds_tot_equi/3 ;echo round($ds_tot_equi,2);    // 520.34;
                
                
                ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
        
        
        
         <tr>
        <td> <h1>Performer 2</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
        <th>Judge</th>
     <th>Interpretation</th>
         <th>Diction</th>
          <th>Suitability</th>
        <th>Mastery</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $ds_tot_equi2=0;
       	$query = $conn->query("select * from declamation where declaimer_num='$d2' and type='English'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $ds_tot_equi2=$ds_tot_equi2+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
        <td><?php echo $row['interpretation']; ?></td>
         <td><?php echo $row['diction']; ?></td>
         <td><?php echo $row['suitability']; ?></td>
       <td><?php echo $row['mastery']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $ds_tot_equi2=$ds_tot_equi2/3 ;echo round($ds_tot_equi2,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
         <tr>
        <td> <h1>Performer 3</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
         <th>Judge</th>
    <th>Interpretation</th>
         <th>Diction</th>
          <th>Suitability</th>
        <th>Mastery</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $ds_tot_equi3=0;
       	$query = $conn->query("select * from declamation where declaimer_num='$d3' and type='English'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $ds_tot_equi3=$ds_tot_equi3+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
       <td><?php echo $row['interpretation']; ?></td>
         <td><?php echo $row['diction']; ?></td>
         <td><?php echo $row['suitability']; ?></td>
       <td><?php echo $row['mastery']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $ds_tot_equi3=$ds_tot_equi3/3 ;echo round($ds_tot_equi3,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
         <tr>
         <td> <h1>Performer 4</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
          <th>Judge</th>
     <th>Interpretation</th>
         <th>Diction</th>
          <th>Suitability</th>
        <th>Mastery</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $ds_tot_equi4=0;
       	$query = $conn->query("select * from declamation where declaimer_num='$d4' and type='English'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $ds_tot_equi4=$ds_tot_equi4+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
        <td><?php echo $row['interpretation']; ?></td>
         <td><?php echo $row['diction']; ?></td>
         <td><?php echo $row['suitability']; ?></td>
       <td><?php echo $row['mastery']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $ds_tot_equi4=$ds_tot_equi4/3 ;echo round($ds_tot_equi4,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        </table>
         
         
         
         
         
           <table class="table table-striped">
        <tr>
          <td> <h1>Filipino</h1> </td>
          </tr>
          <tr>
          <td> <h1>Performer 1</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
         <th>Judge</th>
     <th>Interpretation</th>
         <th>Diction</th>
          <th>Suitability</th>
        <th>Mastery</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $la_tot_equi=0;
       	$query = $conn->query("select * from declamation where declaimer_num='$d1' and type='Filipino'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $la_tot_equi=$la_tot_equi+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
       <td><?php echo $row['interpretation']; ?></td>
         <td><?php echo $row['diction']; ?></td>
         <td><?php echo $row['suitability']; ?></td>
       <td><?php echo $row['mastery']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $la_tot_equi=$la_tot_equi/3 ;echo round($la_tot_equi,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
        
        
        
         <tr>
      <td> <h1>Performer 2</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
         <th>Judge</th>
    <th>Interpretation</th>
         <th>Diction</th>
          <th>Suitability</th>
        <th>Mastery</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $la_tot_equi2=0;
       	$query = $conn->query("select * from declamation where declaimer_num='$d2' and type='Filipino'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $la_tot_equi2=$la_tot_equi2+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
        <td><?php echo $row['interpretation']; ?></td>
         <td><?php echo $row['diction']; ?></td>
         <td><?php echo $row['suitability']; ?></td>
       <td><?php echo $row['mastery']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $la_tot_equi2=$la_tot_equi2/3 ;echo round($la_tot_equi2,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
         <tr>
       <td> <h1>Performer 3</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
      <th>Interpretation</th>
         <th>Diction</th>
          <th>Suitability</th>
        <th>Mastery</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $la_tot_equi3=0;
       	$query = $conn->query("select * from declamation where declaimer_num='$d3' and type='Filipino'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $la_tot_equi3=$la_tot_equi3+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
        <td><?php echo $row['interpretation']; ?></td>
         <td><?php echo $row['diction']; ?></td>
         <td><?php echo $row['suitability']; ?></td>
       <td><?php echo $row['mastery']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $la_tot_equi3=$la_tot_equi3/3 ;echo round($la_tot_equi3,2);?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
         <tr>
        <td> <h1>Performer 4</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
  <th>Interpretation</th>
         <th>Diction</th>
          <th>Suitability</th>
        <th>Mastery</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $la_tot_equi4=0;
       	$query = $conn->query("select * from declamation where declaimer_num='$d4' and type='Filipino'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $la_tot_equi4=$la_tot_equi4+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
      <td><?php echo $row['interpretation']; ?></td>
         <td><?php echo $row['diction']; ?></td>
         <td><?php echo $row['suitability']; ?></td>
       <td><?php echo $row['mastery']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $la_tot_equi4=$la_tot_equi4/3 ;echo round($la_tot_equi4,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        </table>
        </section>



        <!-- Impromptu Speech
        ================================================== -->
        <section id="file-structure">
          <div class="page-header">
            <h1>Impromptu Speech</h1>
           
          </div>
             <table class="table table-striped">
       
          <tr>
          <td> <h1>Performer 1</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
        <th>Content</th>
         <th>Facility</th>
          <th>Organization</th>
        <th>Delivery</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $imp_tot_equi=0;
       	$query = $conn->query("select * from impromptu where speaker_num='$d1'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $imp_tot_equi=$imp_tot_equi+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
       <td><?php echo $row['content']; ?></td>
         <td><?php echo $row['facility']; ?></td>
         <td><?php echo $row['organization']; ?></td>
       <td><?php echo $row['delivery']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php  $imp_tot_equi=$imp_tot_equi/3 ;echo round($imp_tot_equi,2);    // 520.34;
                
                
                ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
        
        
        
         <tr>
          <td> <h1>Performer 2</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
         <th>Content</th>
         <th>Facility</th>
          <th>Organization</th>
        <th>Delivery</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $imp_tot_equi2=0;
       	$query = $conn->query("select * from impromptu where speaker_num='$d2'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $imp_tot_equi2=$imp_tot_equi2+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
       <td><?php echo $row['content']; ?></td>
         <td><?php echo $row['facility']; ?></td>
         <td><?php echo $row['organization']; ?></td>
       <td><?php echo $row['delivery']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $imp_tot_equi2=$imp_tot_equi2/3 ;echo round($imp_tot_equi2,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
         <tr>
          <td> <h1>Performer 3</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
        <th>Content</th>
         <th>Facility</th>
          <th>Organization</th>
        <th>Delivery</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $imp_tot_equi3=0;
       	$query = $conn->query("select * from impromptu where speaker_num='$d3'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $imp_tot_equi3=$imp_tot_equi3+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
     <td><?php echo $row['content']; ?></td>
         <td><?php echo $row['facility']; ?></td>
         <td><?php echo $row['organization']; ?></td>
       <td><?php echo $row['delivery']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $imp_tot_equi3=$imp_tot_equi3/3 ;echo round($imp_tot_equi3,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
         <tr>
          <td> <h1>Performer 4</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
          <th>Content</th>
         <th>Facility</th>
          <th>Organization</th>
        <th>Delivery</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $imp_tot_equi4=0;
       	$query = $conn->query("select * from impromptu where speaker_num='$d4'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $imp_tot_equi4=$imp_tot_equi4+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
   <td><?php echo $row['content']; ?></td>
         <td><?php echo $row['facility']; ?></td>
         <td><?php echo $row['organization']; ?></td>
       <td><?php echo $row['delivery']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $imp_tot_equi4=$imp_tot_equi4/3 ;echo round($imp_tot_equi4,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        </table>

        </section>



        <!-- Vocal Solo
        ================================================== -->
        <section id="contents">
          <div class="page-header">
            <h1>Vocal Solo</h1>
           
          </div>
            <table class="table table-striped">
       
          <tr>
          <td> <h1>Performer 1</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
        <th>Tone</th>
         <th>Musicianship</th>
           <th>Diction</th>
          <th>Suitability</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $vs_tot_equi=0;
       	$query = $conn->query("select * from vocalsolo where singer_num='$d1'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $vs_tot_equi=$vs_tot_equi+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
         <td><?php echo $row['tone']; ?></td>
         <td><?php echo $row['musicianship']; ?></td>
         <td><?php echo $row['diction']; ?></td>
       <td><?php echo $row['suitability']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php  $vs_tot_equi=$vs_tot_equi/3 ;echo round($vs_tot_equi,2);    // 520.34;
                
                
                ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
        
        
        
         <tr>
          <td> <h1>Performer 2</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
       <th>Tone</th>
         <th>Musicianship</th>
           <th>Diction</th>
          <th>Suitability</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $vs_tot_equi2=0;
       	$query = $conn->query("select * from vocalsolo where singer_num='$d2'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $vs_tot_equi2=$vs_tot_equi2+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
           <td><?php echo $row['tone']; ?></td>
         <td><?php echo $row['musicianship']; ?></td>
         <td><?php echo $row['diction']; ?></td>
       <td><?php echo $row['suitability']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $vs_tot_equi2=$vs_tot_equi2/3 ;echo round($vs_tot_equi2,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
         <tr>
          <td> <h1>Performer 3</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
       <th>Tone</th>
         <th>Musicianship</th>
           <th>Diction</th>
          <th>Suitability</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $vs_tot_equi3=0;
       	$query = $conn->query("select * from vocalsolo where singer_num='$d3'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $vs_tot_equi3=$vs_tot_equi3+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
              <td><?php echo $row['tone']; ?></td>
         <td><?php echo $row['musicianship']; ?></td>
         <td><?php echo $row['diction']; ?></td>
       <td><?php echo $row['suitability']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $vs_tot_equi3=$vs_tot_equi3/3 ;echo round($vs_tot_equi3,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
         <tr>
          <td> <h1>Performer 4</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
      <th>Tone</th>
         <th>Musicianship</th>
           <th>Diction</th>
          <th>Suitability</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $vs_tot_equi4=0;
       	$query = $conn->query("select * from vocalsolo where singer_num='$d4'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $vs_tot_equi4=$vs_tot_equi4+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
       <td><?php echo $row['tone']; ?></td>
         <td><?php echo $row['musicianship']; ?></td>
         <td><?php echo $row['diction']; ?></td>
       <td><?php echo $row['suitability']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $vs_tot_equi4=$vs_tot_equi4/3 ;echo round($vs_tot_equi4,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        </table>

        </section>



        <!-- Pop Song
        ================================================== -->
        <section id="html-template">
          <div class="page-header">
            <h1>Pop Song</h1>
           
          </div>
            <table class="table table-striped">
      
          <tr>
          <td> <h1>Performer 1</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
           <th>Tone</th>
         <th>Musicianship</th>
           <th>Diction</th>
          <th>Suitability</th>
            <th>Style</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $ps_tot_equi=0;
       	$query = $conn->query("select * from popsong where singer_num='$d1'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $ps_tot_equi=$ps_tot_equi+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
         <td><?php echo $row['tone']; ?></td>
         <td><?php echo $row['musicianship']; ?></td>
         <td><?php echo $row['diction']; ?></td>
       <td><?php echo $row['suitability']; ?></td>
        <td><?php echo $row['style']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php  $ps_tot_equi=$ps_tot_equi/3 ;echo round($ps_tot_equi,2);    // 520.34;
                
                
                ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
        
        
        
         <tr>
          <td> <h1>Performer 2</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
      <th>Tone</th>
         <th>Musicianship</th>
           <th>Diction</th>
          <th>Suitability</th>
            <th>Style</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $ps_tot_equi2=0;
       	$query = $conn->query("select * from popsong where singer_num='$d2'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $ps_tot_equi2=$ps_tot_equi2+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
      <td><?php echo $row['tone']; ?></td>
         <td><?php echo $row['musicianship']; ?></td>
         <td><?php echo $row['diction']; ?></td>
       <td><?php echo $row['suitability']; ?></td>
        <td><?php echo $row['style']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $ps_tot_equi2=$ps_tot_equi2/3 ;echo round($ps_tot_equi2,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
         <tr>
          <td> <h1>Performer 3</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
       <th>Tone</th>
         <th>Musicianship</th>
           <th>Diction</th>
          <th>Suitability</th>
            <th>Style</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $ps_tot_equi3=0;
       	$query = $conn->query("select * from popsong where singer_num='$d3'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $ps_tot_equi3=$ps_tot_equi3+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
     <td><?php echo $row['tone']; ?></td>
         <td><?php echo $row['musicianship']; ?></td>
         <td><?php echo $row['diction']; ?></td>
       <td><?php echo $row['suitability']; ?></td>
        <td><?php echo $row['style']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $ps_tot_equi3=$ps_tot_equi3/3 ;echo round($ps_tot_equi3,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
         <tr>
          <td> <h1>Performer 4</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
      <th>Tone</th>
         <th>Musicianship</th>
           <th>Diction</th>
          <th>Suitability</th>
            <th>Style</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $ps_tot_equi4=0;
       	$query = $conn->query("select * from popsong where singer_num='$d4'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $ps_tot_equi4=$ps_tot_equi4+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
         <td><?php echo $row['tone']; ?></td>
         <td><?php echo $row['musicianship']; ?></td>
         <td><?php echo $row['diction']; ?></td>
       <td><?php echo $row['suitability']; ?></td>
        <td><?php echo $row['style']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $ps_tot_equi4=$ps_tot_equi4/3 ;echo round($ps_tot_equi4,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        </table>
               </section>



        <!-- Chorale Singing
        ================================================== -->
        <section id="examples">
          <div class="page-header">
            <h1>Chorale Singing</h1>
           
          </div>
            <table class="table table-striped">
       
          <tr>
          <td> <h1>Group 1</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
          <th>Musical</th>
         <th>Visual</th>
          <th>Appropriateness</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $cho_tot_equi=0;
       	$query = $conn->query("select * from chorale where group_num='$d1'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $cho_tot_equi=$cho_tot_equi+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
       <td><?php echo $row['musical']; ?></td>
         <td><?php echo $row['visual']; ?></td>
         <td><?php echo $row['appropriateness']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php  $cho_tot_equi=$cho_tot_equi/3 ;echo round($cho_tot_equi,2);    // 520.34;
                
                
                ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
        
        
        
         <tr>
          <td> <h1>Group 2</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
         <th>Musical</th>
         <th>Visual</th>
          <th>Appropriateness</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $cho_tot_equi2=0;
       	$query = $conn->query("select * from chorale where group_num='$d2'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $cho_tot_equi2=$cho_tot_equi2+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
         <td><?php echo $row['musical']; ?></td>
         <td><?php echo $row['visual']; ?></td>
         <td><?php echo $row['appropriateness']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $cho_tot_equi2=$cho_tot_equi2/3 ;echo round($cho_tot_equi2,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
         <tr>
          <td> <h1>Group 3</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
        <th>Musical</th>
         <th>Visual</th>
          <th>Appropriateness</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $cho_tot_equi3=0;
       	$query = $conn->query("select * from chorale where group_num='$d3'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $cho_tot_equi3=$cho_tot_equi3+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
      <td><?php echo $row['musical']; ?></td>
         <td><?php echo $row['visual']; ?></td>
         <td><?php echo $row['appropriateness']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $cho_tot_equi3=$cho_tot_equi3/3 ;echo round($cho_tot_equi3,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
         <tr>
          <td> <h1>Group 4</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
        <th>Musical</th>
         <th>Visual</th>
          <th>Appropriateness</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $cho_tot_equi4=0;
       	$query = $conn->query("select * from chorale where group_num='$d4'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $cho_tot_equi4=$cho_tot_equi4+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
     <td><?php echo $row['musical']; ?></td>
         <td><?php echo $row['visual']; ?></td>
         <td><?php echo $row['appropriateness']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $cho_tot_equi4=$cho_tot_equi4/3 ;echo round($cho_tot_equi4,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        </table>
         
         
       
                </section>




        <!-- Hip-Hop Dance
        ================================================== -->
        <section id="what-next">
          <div class="page-header">
            <h1>Hip-Hop Dance</h1>
         
          </div>
            <table class="table table-striped">
       
          <tr>
          <td> <h1>Group 1</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
       <th>Choreography</th>
         <th>Performance</th>
          <th>Suitability</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $tot_equi=0;
       	$query = $conn->query("select * from hiphop where group_num='$d1'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $tot_equi=$tot_equi+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
       <td><?php echo $row['choreography']; ?></td>
         <td><?php echo $row['performance']; ?></td>
         <td><?php echo $row['suitability']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php  $tot_equi=$tot_equi/3 ;echo round($tot_equi,2);    // 520.34;
                
                
                ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
        
        
        
         <tr>
          <td> <h1>Group 2</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
     <th>Choreography</th>
         <th>Performance</th>
          <th>Suitability</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $tot_equi2=0;
       	$query = $conn->query("select * from hiphop where group_num='$d2'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $tot_equi2=$tot_equi2+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
        <td><?php echo $row['choreography']; ?></td>
         <td><?php echo $row['performance']; ?></td>
         <td><?php echo $row['suitability']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $tot_equi2=$tot_equi2/3 ;echo round($tot_equi2,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
         <tr>
          <td> <h1>Group 3</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
       <th>Choreography</th>
         <th>Performance</th>
          <th>Suitability</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $tot_equi3=0;
       	$query = $conn->query("select * from hiphop where group_num='$d3'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $tot_equi3=$tot_equi3+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
       <td><?php echo $row['choreography']; ?></td>
         <td><?php echo $row['performance']; ?></td>
         <td><?php echo $row['suitability']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $tot_equi3=$tot_equi3/3 ;echo round($tot_equi3,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
         <tr>
          <td> <h1>Group 4</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
        <th>Choreography</th>
         <th>Performance</th>
          <th>Suitability</th>
         <th>Stage</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $tot_equi4=0;
       	$query = $conn->query("select * from hiphop where group_num='$d4'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $tot_equi4=$tot_equi4+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
        <td><?php echo $row['choreography']; ?></td>
         <td><?php echo $row['performance']; ?></td>
         <td><?php echo $row['suitability']; ?></td>
        <td><?php echo $row['stage']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $tot_equi4=$tot_equi4/3 ;echo round($tot_equi4,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        </table>

           </section>




  <!-- Dance Sports
        ================================================== -->
        <section id="trip">
          <div class="page-header">
            <h1>Dance Sports</h1>
          
          </div>
            <table class="table table-striped">
        <tr>
          <td> <h1>Modern Standard</h1> </td>
          </tr>
          <tr>
          <td> <h1>Couple 1</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
      <th>Floor<br/>Craft</th>
         <th>Timing</th>
          <th>Body <br /> lines</th>
        <th>Footwork</th>
         <th>Move <br /> ment</th>
          <th>Inter <br /> pretation</th>
              <th>Characte <br /> rization</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $ds_tot_equi=0;
       	$query = $conn->query("select * from dancesports where couple_num='$d1' and type='Modern Standard'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $ds_tot_equi=$ds_tot_equi+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
        <td><?php echo $row['floorcraft']; ?></td>
         <td><?php echo $row['timing']; ?></td>
         <td><?php echo $row['bodylines']; ?></td>
       <td><?php echo $row['footwork']; ?></td>
        <td><?php echo $row['movement']; ?></td>
          <td><?php echo $row['interpretation']; ?></td>
        <td><?php echo $row['characterization']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php  $ds_tot_equi=$ds_tot_equi/3 ;echo round($ds_tot_equi,2);    // 520.34;
                
                
                ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
        
        
        
         <tr>
          <td> <h1>Couple 2</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
        <th>Judge</th>
      <th>Floor<br/>Craft</th>
         <th>Timing</th>
          <th>Body <br /> lines</th>
        <th>Footwork</th>
         <th>Move <br /> ment</th>
          <th>Inter <br /> pretation</th>
              <th>Characte <br /> rization</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $ds_tot_equi2=0;
       	$query = $conn->query("select * from dancesports where couple_num='$d2' and type='Modern Standard'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $ds_tot_equi2=$ds_tot_equi2+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
         <td><?php echo $row['floorcraft']; ?></td>
         <td><?php echo $row['timing']; ?></td>
         <td><?php echo $row['bodylines']; ?></td>
       <td><?php echo $row['footwork']; ?></td>
        <td><?php echo $row['movement']; ?></td>
          <td><?php echo $row['interpretation']; ?></td>
        <td><?php echo $row['characterization']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $ds_tot_equi2=$ds_tot_equi2/3 ;echo round($ds_tot_equi2,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
         <tr>
          <td> <h1>Couple 3</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
         <th>Judge</th>
      <th>Floor<br/>Craft</th>
         <th>Timing</th>
          <th>Body <br /> lines</th>
        <th>Footwork</th>
         <th>Move <br /> ment</th>
          <th>Inter <br /> pretation</th>
              <th>Characte <br /> rization</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $ds_tot_equi3=0;
       	$query = $conn->query("select * from dancesports where couple_num='$d3' and type='Modern Standard'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $ds_tot_equi3=$ds_tot_equi3+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
        <td><?php echo $row['floorcraft']; ?></td>
         <td><?php echo $row['timing']; ?></td>
         <td><?php echo $row['bodylines']; ?></td>
       <td><?php echo $row['footwork']; ?></td>
        <td><?php echo $row['movement']; ?></td>
          <td><?php echo $row['interpretation']; ?></td>
        <td><?php echo $row['characterization']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $ds_tot_equi3=$ds_tot_equi3/3 ;echo round($ds_tot_equi3,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
         <tr>
          <td> <h1>Couple 4</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
          <th>Judge</th>
      <th>Floor<br/>Craft</th>
         <th>Timing</th>
          <th>Body <br /> lines</th>
        <th>Footwork</th>
         <th>Move <br /> ment</th>
          <th>Inter <br /> pretation</th>
              <th>Characte <br /> rization</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $ds_tot_equi4=0;
       	$query = $conn->query("select * from dancesports where couple_num='$d4' and type='Modern Standard'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $ds_tot_equi4=$ds_tot_equi4+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
         <td><?php echo $row['floorcraft']; ?></td>
         <td><?php echo $row['timing']; ?></td>
         <td><?php echo $row['bodylines']; ?></td>
       <td><?php echo $row['footwork']; ?></td>
        <td><?php echo $row['movement']; ?></td>
          <td><?php echo $row['interpretation']; ?></td>
        <td><?php echo $row['characterization']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $ds_tot_equi4=$ds_tot_equi4/3 ;echo round($ds_tot_equi4,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        </table>
         
         
         
         
         
           <table class="table table-striped">
        <tr>
          <td> <h1>Latin American</h1> </td>
          </tr>
          <tr>
          <td> <h1>Couple 1</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
         <th>Judge</th>
      <th>Floor<br/>Craft</th>
         <th>Timing</th>
          <th>Body <br /> lines</th>
        <th>Footwork</th>
         <th>Move <br /> ment</th>
          <th>Inter <br /> pretation</th>
              <th>Characte <br /> rization</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $la_tot_equi=0;
       	$query = $conn->query("select * from dancesports where couple_num='$d1' and type='Latin American'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $la_tot_equi=$la_tot_equi+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
        <td><?php echo $row['floorcraft']; ?></td>
         <td><?php echo $row['timing']; ?></td>
         <td><?php echo $row['bodylines']; ?></td>
       <td><?php echo $row['footwork']; ?></td>
        <td><?php echo $row['movement']; ?></td>
          <td><?php echo $row['interpretation']; ?></td>
        <td><?php echo $row['characterization']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $la_tot_equi=$la_tot_equi/3 ;echo round($la_tot_equi,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
        
        
        
         <tr>
          <td> <h1>Couple 2</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
         <th>Judge</th>
      <th>Floor<br/>Craft</th>
         <th>Timing</th>
          <th>Body <br /> lines</th>
        <th>Footwork</th>
         <th>Move <br /> ment</th>
          <th>Inter <br /> pretation</th>
              <th>Characte <br /> rization</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $la_tot_equi2=0;
       	$query = $conn->query("select * from dancesports where couple_num='$d2' and type='Modern Standard'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $la_tot_equi2=$la_tot_equi2+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
        <td><?php echo $row['floorcraft']; ?></td>
         <td><?php echo $row['timing']; ?></td>
         <td><?php echo $row['bodylines']; ?></td>
       <td><?php echo $row['footwork']; ?></td>
        <td><?php echo $row['movement']; ?></td>
          <td><?php echo $row['interpretation']; ?></td>
        <td><?php echo $row['characterization']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $la_tot_equi2=$la_tot_equi2/3 ;echo round($la_tot_equi2,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
         <tr>
          <td> <h1>Couple 3</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
       <th>Judge</th>
      <th>Floor<br/>Craft</th>
         <th>Timing</th>
          <th>Body <br /> lines</th>
        <th>Footwork</th>
         <th>Move <br /> ment</th>
          <th>Inter <br /> pretation</th>
              <th>Characte <br /> rization</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $la_tot_equi3=0;
       	$query = $conn->query("select * from dancesports where couple_num='$d3' and type='Modern Standard'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $la_tot_equi3=$la_tot_equi3+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
        <td><?php echo $row['floorcraft']; ?></td>
         <td><?php echo $row['timing']; ?></td>
         <td><?php echo $row['bodylines']; ?></td>
       <td><?php echo $row['footwork']; ?></td>
        <td><?php echo $row['movement']; ?></td>
          <td><?php echo $row['interpretation']; ?></td>
        <td><?php echo $row['characterization']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $la_tot_equi3=$la_tot_equi3/3 ;echo round($la_tot_equi3,2);?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        
        
        
         <tr>
          <td> <h1>Couple 4</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
        <thead>
       <th>Judge</th>
      <th>Floor<br/>Craft</th>
         <th>Timing</th>
          <th>Body <br /> lines</th>
        <th>Footwork</th>
         <th>Move <br /> ment</th>
          <th>Inter <br /> pretation</th>
              <th>Characte <br /> rization</th>
           <th>Equivalent</th>
        </thead>
        <tbody>
        
         <?php
         $la_tot_equi4=0;
       	$query = $conn->query("select * from dancesports where couple_num='$d4' and type='Modern Standard'") or die(mysql_error());
		while ($row = $query->fetch()) { 
		  $la_tot_equi4=$la_tot_equi4+$row['total'];
		 $j_id= $row['judge_id'];
          $j_query = $conn->query("select * from judges where judge_id='$j_id'") or die(mysql_error());
		while ($j_row = $j_query->fetch()) 
        { 
            $j_name=$j_row['lname'].", ".$j_row['fname']." ".$j_row['mname'];
        }
          
          ?>
        <tr>
        <td><?php echo $j_name; ?></td>
       <td><?php echo $row['floorcraft']; ?></td>
         <td><?php echo $row['timing']; ?></td>
         <td><?php echo $row['bodylines']; ?></td>
       <td><?php echo $row['footwork']; ?></td>
        <td><?php echo $row['movement']; ?></td>
          <td><?php echo $row['interpretation']; ?></td>
        <td><?php echo $row['characterization']; ?></td>
          <td><?php echo $row['total']; ?></td>
        </tr>
          <?php } ?>
            <tr>
          
              
                <td colspan="7">
                <table>
                <tr>
                <td> <h3>Total Equivalent: <?php $la_tot_equi4=$la_tot_equi4/3 ;echo round($la_tot_equi4,2); ?></h3></td>
                </tr>
                </table>
                
           
        </tr>
        </tbody>
        </table>
        
        </td>
        </tr>
        </table>
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

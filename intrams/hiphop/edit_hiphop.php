<?php  include('../dbcon.php') ?>
 <?php  include('../session.php');
 
 
 
  $d1="1";
    $d2="2";
      $d3="3";
        $d4="4";
        
  $english_query = $conn->query("select * from hiphop where judge_id = '$session_id' and group_num='$d1'");
$eng_row1 = $english_query->fetch();
$choreography_1 = $eng_row1['choreography'];
$performance_1 = $eng_row1['performance'];
$suitability_1 = $eng_row1['suitability'];
$stage_1 = $eng_row1['stage'];


$english_query = $conn->query("select * from hiphop where judge_id = '$session_id' and group_num='$d2'");
$eng_row2 = $english_query->fetch();
$choreography_2 = $eng_row2['choreography'];
$performance_2 = $eng_row2['performance'];
$suitability_2 = $eng_row2['suitability'];
$stage_2 = $eng_row2['stage'];



$english_query = $conn->query("select * from hiphop where judge_id = '$session_id' and group_num='$d3'");
$eng_row3 = $english_query->fetch();
$choreography_3 = $eng_row3['choreography'];
$performance_3 = $eng_row3['performance'];
$suitability_3 = $eng_row3['suitability'];
$stage_3 = $eng_row3['stage'];


$english_query = $conn->query("select * from hiphop where judge_id = '$session_id' and group_num='$d4'");
$eng_row4 = $english_query->fetch();
$choreography_4 = $eng_row4['choreography'];
$performance_4 = $eng_row4['performance'];
$suitability_4 = $eng_row4['suitability'];
$stage_4 = $eng_row4['stage'];
 

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
                <a class="brand"><img src="../bcc_logo.png" width="23" height="23" />&nbsp; BCC - High School</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
            <a href="../home.php">Home</a>
              </li>
              
               <li class="">
            <a href="#myModal" data-toggle="modal" data-target="#myModal">Review Criteria</a>
              </li>
              
                <li class="">
                <a href="../logout.php">Log-out <?php echo $fullname; ?></a>
              </li>
              
              
            </ul>
          </div>
        </div>
      </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Criteria for Hip-Hop Dancing</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
  <h1>Cultural Tilt: Hip-Hop Dance</h1>
   <p class="lead">Binalbagan Catholic College High School Department</p>
  </div>
</header>


  <div class="container">

   
    <div class="row">
     
      <div class="span12">


<form method="POST">
        <!-- Declamation
        ================================================== -->
       <section id="download-bootstrap">
          <div class="page-header">
            <h1>Edit Hip-Hop Dance</h1> 
            
           
          </div>
          
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">
       
          <div class="table-responsive">
            <table class="table table-striped">
          <tr>
          <td> <h1>Group 1</h1> </td>
          </tr>
          <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Choreography and <br />Propriety of Expression</th>
           <th>Performance</th>
            <th>Suitability</th>
              <th>Stage Deportment</th>
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="choreography_1">
          <option><?php echo $choreography_1; ?></option>
              <option>40</option>
                 <option>39</option>
           <option>38</option>
            <option>37</option>
             <option>36</option>
              <option>35</option>
               <option>34</option>
               <option>33</option>
           <option>32</option>
            <option>31</option>
               <option>30</option>
                 <option>29</option>
           <option>28</option>
            <option>27</option>
             <option>26</option>
              <option>25</option>
               <option>24</option>
               <option>23</option>
           <option>22</option>
            <option>21</option>
             <option>20</option>
              <option>19</option>
               <option>18</option>
                 <option>17</option>
           <option>16</option>
            <option>15</option>
             <option>14</option>
              <option>13</option>
               <option>12</option>
                <option>11</option>
            <option>10</option>
             <option>9</option>
              <option>8</option>
               <option>7</option>
               <option>6</option>
           <option>5</option>
            <option>4</option>
             <option>3</option>
              <option>2</option>
               <option>1</option>
                
          </select>
          </td>
            <td> 
           <select name="performance_1">
          <option><?php echo $performance_1; ?></option>
                <option>30</option>
                 <option>29</option>
           <option>28</option>
            <option>27</option>
             <option>26</option>
              <option>25</option>
               <option>24</option>
               <option>23</option>
           <option>22</option>
            <option>21</option>
             <option>20</option>
              <option>19</option>
               <option>18</option>
                 <option>17</option>
           <option>16</option>
            <option>15</option>
             <option>14</option>
              <option>13</option>
               <option>12</option>
                <option>11</option>
            <option>10</option>
             <option>9</option>
              <option>8</option>
               <option>7</option>
               <option>6</option>
           <option>5</option>
            <option>4</option>
             <option>3</option>
              <option>2</option>
               <option>1</option>
          </select>
            </td>
              <td> <select name="suitability_1">
              <option><?php echo $suitability_1; ?></option>
           <option>20</option>
              <option>19</option>
               <option>18</option>
                 <option>17</option>
           <option>16</option>
            <option>15</option>
             <option>14</option>
              <option>13</option>
               <option>12</option>
                <option>11</option>
            <option>10</option>
             <option>9</option>
              <option>8</option>
               <option>7</option>
               <option>6</option>
           <option>5</option>
            <option>4</option>
             <option>3</option>
              <option>2</option>
               <option>1</option>
          </select></td>
                
                  <td> <select name="stage_1">
                  <option><?php echo $stage_1; ?></option>
          <option>10</option>
             <option>9</option>
              <option>8</option>
               <option>7</option>
               <option>6</option>
           <option>5</option>
            <option>4</option>
             <option>3</option>
              <option>2</option>
               <option>1</option>
             
          </select></td>
          </tr>
            
          </tbody>
          </table></td>
          </tr>
          
          </table>
          
         <table class="table table-striped">
          <tr>
          <td> <h1>Group 2</h1> </td>
          </tr>
          <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Choreography and <br />Propriety of Expression</th>
           <th>Performance</th>
            <th>Suitability</th>
              <th>Stage Deportment</th>
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="choreography_2">
          <option><?php echo $choreography_2; ?></option>
              <option>40</option>
                 <option>39</option>
           <option>38</option>
            <option>37</option>
             <option>36</option>
              <option>35</option>
               <option>34</option>
               <option>33</option>
           <option>32</option>
            <option>31</option>
               <option>30</option>
                 <option>29</option>
           <option>28</option>
            <option>27</option>
             <option>26</option>
              <option>25</option>
               <option>24</option>
               <option>23</option>
           <option>22</option>
            <option>21</option>
             <option>20</option>
              <option>19</option>
               <option>18</option>
                 <option>17</option>
           <option>16</option>
            <option>15</option>
             <option>14</option>
              <option>13</option>
               <option>12</option>
                <option>11</option>
            <option>10</option>
             <option>9</option>
              <option>8</option>
               <option>7</option>
               <option>6</option>
           <option>5</option>
            <option>4</option>
             <option>3</option>
              <option>2</option>
               <option>1</option>
                
          </select>
          </td>
            <td> 
           <select name="performance_2">
          <option><?php echo $performance_2; ?></option>
                <option>30</option>
                 <option>29</option>
           <option>28</option>
            <option>27</option>
             <option>26</option>
              <option>25</option>
               <option>24</option>
               <option>23</option>
           <option>22</option>
            <option>21</option>
             <option>20</option>
              <option>19</option>
               <option>18</option>
                 <option>17</option>
           <option>16</option>
            <option>15</option>
             <option>14</option>
              <option>13</option>
               <option>12</option>
                <option>11</option>
            <option>10</option>
             <option>9</option>
              <option>8</option>
               <option>7</option>
               <option>6</option>
           <option>5</option>
            <option>4</option>
             <option>3</option>
              <option>2</option>
               <option>1</option>
          </select>
            </td>
              <td> <select name="suitability_2">
              <option><?php echo $suitability_2; ?></option>
           <option>20</option>
              <option>19</option>
               <option>18</option>
                 <option>17</option>
           <option>16</option>
            <option>15</option>
             <option>14</option>
              <option>13</option>
               <option>12</option>
                <option>11</option>
            <option>10</option>
             <option>9</option>
              <option>8</option>
               <option>7</option>
               <option>6</option>
           <option>5</option>
            <option>4</option>
             <option>3</option>
              <option>2</option>
               <option>1</option>
          </select></td>
                
                  <td> <select name="stage_2">
                  <option><?php echo $stage_2; ?></option>
          <option>10</option>
             <option>9</option>
              <option>8</option>
               <option>7</option>
               <option>6</option>
           <option>5</option>
            <option>4</option>
             <option>3</option>
              <option>2</option>
               <option>1</option>
             
          </select></td>
          </tr>
            
          </tbody>
          </table></td>
          </tr>
          
          </table>
          
          
          <table class="table table-striped">
          <tr>
          <td> <h1>Group 3</h1> </td>
          </tr>
          <tr>
          <td>
        <table class="table table-striped">
          <thead>
         
          <th>Choreography and <br />Propriety of Expression</th>
           <th>Performance</th>
            <th>Suitability</th>
              <th>Stage Deportment</th>
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="choreography_3">
          <option><?php echo $choreography_3; ?></option>
              <option>40</option>
                 <option>39</option>
           <option>38</option>
            <option>37</option>
             <option>36</option>
              <option>35</option>
               <option>34</option>
               <option>33</option>
           <option>32</option>
            <option>31</option>
               <option>30</option>
                 <option>29</option>
           <option>28</option>
            <option>27</option>
             <option>26</option>
              <option>25</option>
               <option>24</option>
               <option>23</option>
           <option>22</option>
            <option>21</option>
             <option>20</option>
              <option>19</option>
               <option>18</option>
                 <option>17</option>
           <option>16</option>
            <option>15</option>
             <option>14</option>
              <option>13</option>
               <option>12</option>
                <option>11</option>
            <option>10</option>
             <option>9</option>
              <option>8</option>
               <option>7</option>
               <option>6</option>
           <option>5</option>
            <option>4</option>
             <option>3</option>
              <option>2</option>
               <option>1</option>
                
          </select>
          </td>
            <td> 
           <select name="performance_3">
          <option><?php echo $performance_3; ?></option>
                <option>30</option>
                 <option>29</option>
           <option>28</option>
            <option>27</option>
             <option>26</option>
              <option>25</option>
               <option>24</option>
               <option>23</option>
           <option>22</option>
            <option>21</option>
             <option>20</option>
              <option>19</option>
               <option>18</option>
                 <option>17</option>
           <option>16</option>
            <option>15</option>
             <option>14</option>
              <option>13</option>
               <option>12</option>
                <option>11</option>
            <option>10</option>
             <option>9</option>
              <option>8</option>
               <option>7</option>
               <option>6</option>
           <option>5</option>
            <option>4</option>
             <option>3</option>
              <option>2</option>
               <option>1</option>
          </select>
            </td>
              <td> <select name="suitability_3">
              <option><?php echo $suitability_3; ?></option>
           <option>20</option>
              <option>19</option>
               <option>18</option>
                 <option>17</option>
           <option>16</option>
            <option>15</option>
             <option>14</option>
              <option>13</option>
               <option>12</option>
                <option>11</option>
            <option>10</option>
             <option>9</option>
              <option>8</option>
               <option>7</option>
               <option>6</option>
           <option>5</option>
            <option>4</option>
             <option>3</option>
              <option>2</option>
               <option>1</option>
          </select></td>
                
                  <td> <select name="stage_3">
                  <option><?php echo $stage_3; ?></option>
          <option>10</option>
             <option>9</option>
              <option>8</option>
               <option>7</option>
               <option>6</option>
           <option>5</option>
            <option>4</option>
             <option>3</option>
              <option>2</option>
               <option>1</option>
             
          </select></td>
          </tr>
            
          </tbody>
          </table>
          </td>
          </tr>
          
          </table>
          
          
          
         <table class="table table-striped">
          <tr>
           <td> <h1>Group 4</h1> </td>
          </tr>
          <tr>
          <td>
          <table class="table table-striped">
          <thead>
         
          <th>Choreography and <br />Propriety of Expression</th>
           <th>Performance</th>
            <th>Suitability</th>
              <th>Stage Deportment</th>
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="choreography_4">
          <option><?php echo $choreography_4; ?></option>
              <option>40</option>
                 <option>39</option>
           <option>38</option>
            <option>37</option>
             <option>36</option>
              <option>35</option>
               <option>34</option>
               <option>33</option>
           <option>32</option>
            <option>31</option>
               <option>30</option>
                 <option>29</option>
           <option>28</option>
            <option>27</option>
             <option>26</option>
              <option>25</option>
               <option>24</option>
               <option>23</option>
           <option>22</option>
            <option>21</option>
             <option>20</option>
              <option>19</option>
               <option>18</option>
                 <option>17</option>
           <option>16</option>
            <option>15</option>
             <option>14</option>
              <option>13</option>
               <option>12</option>
                <option>11</option>
            <option>10</option>
             <option>9</option>
              <option>8</option>
               <option>7</option>
               <option>6</option>
           <option>5</option>
            <option>4</option>
             <option>3</option>
              <option>2</option>
               <option>1</option>
                
          </select>
          </td>
            <td> 
           <select name="performance_4">
          <option><?php echo $performance_4; ?></option>
                <option>30</option>
                 <option>29</option>
           <option>28</option>
            <option>27</option>
             <option>26</option>
              <option>25</option>
               <option>24</option>
               <option>23</option>
           <option>22</option>
            <option>21</option>
             <option>20</option>
              <option>19</option>
               <option>18</option>
                 <option>17</option>
           <option>16</option>
            <option>15</option>
             <option>14</option>
              <option>13</option>
               <option>12</option>
                <option>11</option>
            <option>10</option>
             <option>9</option>
              <option>8</option>
               <option>7</option>
               <option>6</option>
           <option>5</option>
            <option>4</option>
             <option>3</option>
              <option>2</option>
               <option>1</option>
          </select>
            </td>
              <td> <select name="suitability_4">
              <option><?php echo $suitability_4; ?></option>
           <option>20</option>
              <option>19</option>
               <option>18</option>
                 <option>17</option>
           <option>16</option>
            <option>15</option>
             <option>14</option>
              <option>13</option>
               <option>12</option>
                <option>11</option>
            <option>10</option>
             <option>9</option>
              <option>8</option>
               <option>7</option>
               <option>6</option>
           <option>5</option>
            <option>4</option>
             <option>3</option>
              <option>2</option>
               <option>1</option>
          </select></td>
                
                  <td> <select name="stage_4">
                  <option><?php echo $stage_4; ?></option>
          <option>10</option>
             <option>9</option>
              <option>8</option>
               <option>7</option>
               <option>6</option>
           <option>5</option>
            <option>4</option>
             <option>3</option>
              <option>2</option>
               <option>1</option>
             
          </select></td>
          </tr>
            
          </tbody>
          </table></td>
          </tr>
          
          </table>
          
          
          </div>   
          </div>
        </section>
  
  
        <table align="right">
        <tr>
        <td>
        
        <input name="judge_id" type="hidden" value="<?php echo $session_id; ?>" />
      
        
        <button name="update_data" type="submit" class="btn btn-success">Update Data</button> 
        </td>
        </tr>
        </table>
        
        </form>
      </div>
    </div>

  </div>

  
    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <font size="3">Binalbagan Catholic College, Inc.</font>
        <p>High School Department</p>
        <p>Binalbagan, Negros Occidental</p>
        <p>Telefax No (034) 3888-927 &middot; Tel. Nos. High School Dept. Admin Office: (034) 3888-383</p>
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


<?php
if (isset($_POST['update_data'])) 
{
 

$d1=1;
$d2=2;
$d3=3;
$d4=4;
 
$judge_id = $_POST['judge_id'];

$choreography_1 = $_POST['choreography_1'];
$performance_1 = $_POST['performance_1'];
$suitability_1 = $_POST['suitability_1'];
$stage_1 = $_POST['stage_1'];
$total1=$choreography_1+$performance_1+$suitability_1+$stage_1;

$choreography_2 = $_POST['choreography_2'];
$performance_2 = $_POST['performance_2'];
$suitability_2 = $_POST['suitability_2'];
$stage_2 = $_POST['stage_2'];
$total2=$choreography_2+$performance_2+$suitability_2+$stage_2;

$choreography_3 = $_POST['choreography_3'];
$performance_3 = $_POST['performance_3'];
$suitability_3 = $_POST['suitability_3'];
$stage_3 = $_POST['stage_3'];
$total3=$choreography_3+$performance_3+$suitability_3+$stage_3;

$choreography_4 = $_POST['choreography_4'];
$performance_4 = $_POST['performance_4'];
$suitability_4 = $_POST['suitability_4'];
$stage_4 = $_POST['stage_4'];
$total4=$choreography_4+$performance_4+$suitability_4+$stage_4;


if($total1==$total2)
{

    /* start */

 if($total3>$total1)
{
    if($total3>$total4)
    {
       $p3_rank=1;
       
    }
    else
    {
         $p3_rank=2;
     
    }
   
}
else
{
    if($total3>$total4)
    {
        $p3_rank=2;
     
    }
    else
    {
    $p3_rank=3;
       
    }
}


 if($total4>$total1)
{
    if($total4>$total3)
    {
       $p4_rank=1;
       
    }
    else
    {
         $p4_rank=2;
     
    }
   
}
else
{
    if($total4>$total3)
    {
        $p4_rank=2;
     
    }
    else
    {
    $p4_rank=3;
       
    }
}

                
if($total1>$total3)
{
    if($total1>$total4)
    {
       $p1_rank=1;
       $p2_rank=1;
    }
    else
    {
         $p1_rank=2;
       $p2_rank=2;
    }
   
}
else
{
    if($total1>$total4)
    {
        $p1_rank=2;
       $p2_rank=2;
    }
    else
    {
    $p1_rank=3;
       $p2_rank=3;    
    }
}


/* end */
      
      
}
else
{
    
    if($total1==$total3)
    {
      
      
/* start */

 if($total2>$total1)
{
    if($total2>$total4)
    {
       $p2_rank=1;
       
    }
    else
    {
         $p2_rank=2;
     
    }
   
}
else
{
    if($total2>$total4)
    {
        $p2_rank=2;
     
    }
    else
    {
    $p2_rank=3;
       
    }
}


 if($total4>$total1)
{
    if($total4>$total2)
    {
       $p4_rank=1;
       
    }
    else
    {
         $p4_rank=2;
     
    }
   
}
else
{
    if($total4>$total2)
    {
        $p4_rank=2;
     
    }
    else
    {
    $p4_rank=3;
       
    }
}

                
if($total1>$total2)
{
    if($total1>$total4)
    {
       $p1_rank=1;
       $p3_rank=1;
    }
    else
    {
         $p1_rank=2;
       $p3_rank=2;
    }
   
}
else
{
    if($total1>$total4)
    {
        $p1_rank=2;
       $p3_rank=2;
    }
    else
    {
    $p1_rank=3;
       $p3_rank=3;    
    }
}


/* end */
      
      
        
    }
    else
    {
        if($total1==$total4)
        {
            
            
/* start */

 if($total2>$total1)
{
    if($total2>$total3)
    {
       $p2_rank=1;
       
    }
    else
    {
         $p2_rank=2;
     
    }
   
}
else
{
    if($total2>$total3)
    {
        $p2_rank=2;
     
    }
    else
    {
    $p2_rank=3;
       
    }
}


 if($total3>$total1)
{
    if($total3>$total2)
    {
       $p3_rank=1;
       
    }
    else
    {
         $p3_rank=2;
     
    }
   
}
else
{
    if($total3>$total2)
    {
        $p3_rank=2;
     
    }
    else
    {
    $p3_rank=3;
       
    }
}

                
if($total1>$total2)
{
    if($total1>$total3)
    {
       $p1_rank=1;
       $p4_rank=1;
    }
    else
    {
         $p1_rank=2;
       $p4_rank=2;
    }
   
}
else
{
    if($total1>$total3)
    {
        $p1_rank=2;
       $p4_rank=2;
    }
    else
    {
    $p1_rank=3;
       $p4_rank=3;    
    }
}


/* end */


    
        }
        else
        {
           if($total2==$total3) 
           {

/* start */

 if($total1>$total2)
{
    if($total1>$total4)
    {
       $p1_rank=1;
       
    }
    else
    {
         $p1_rank=2;
     
    }
   
}
else
{
    if($total1>$total4)
    {
        $p1_rank=2;
     
    }
    else
    {
    $p1_rank=3;
       
    }
}


 if($total4>$total1)
{
    if($total4>$total2)
    {
       $p4_rank=1;
       
    }
    else
    {
         $p4_rank=2;
     
    }
   
}
else
{
    if($total4>$total2)
    {
        $p4_rank=2;
     
    }
    else
    {
    $p4_rank=3;
       
    }
}

                
if($total2>$total1)
{
    if($total2>$total4)
    {
       $p3_rank=1;
       $p2_rank=1;
    }
    else
    {
         $p3_rank=2;
       $p2_rank=2;
    }
   
}
else
{
    if($total2>$total4)
    {
        $p3_rank=2;
       $p2_rank=2;
    }
    else
    {
    $p3_rank=3;
       $p2_rank=3;    
    }
}


/* end */


           }
           else
           {
            if($total2==$total4)
            {
                
                
                /* start */

 if($total1>$total2)
{
    if($total1>$total3)
    {
       $p1_rank=1;
       
    }
    else
    {
         $p1_rank=2;
     
    }
   
}
else
{
    if($total1>$total3)
    {
        $p1_rank=2;
     
    }
    else
    {
    $p1_rank=3;
       
    }
}


 if($total3>$total1)
{
    if($total3>$total2)
    {
       $p3_rank=1;
       
    }
    else
    {
         $p3_rank=2;
     
    }
   
}
else
{
    if($total3>$total2)
    {
        $p3_rank=2;
     
    }
    else
    {
    $p3_rank=3;
       
    }
}

                
if($total2>$total1)
{
    if($total2>$total3)
    {
       $p2_rank=1;
       $p4_rank=1;
    }
    else
    {
         $p2_rank=2;
       $p4_rank=2;
    }
   
}
else
{
    if($total2>$total3)
    {
        $p2_rank=2;
       $p4_rank=2;
    }
    else
    {
    $p2_rank=3;
       $p4_rank=3;    
    }
}


/* end */
                
                
                
                
            }
            else
            {
                if($total3==$total4)
                {
                   
                



/* start */

 if($total1>$total2)
{
    if($total1>$total3)
    {
       $p1_rank=1;
       
    }
    else
    {
         $p1_rank=2;
     
    }
   
}
else
{
    if($total1>$total3)
    {
        $p1_rank=2;
     
    }
    else
    {
    $p1_rank=3;
       
    }
}


 if($total2>$total1)
{
    if($total2>$total3)
    {
       $p2_rank=1;
       
    }
    else
    {
         $p2_rank=2;
     
    }
   
}
else
{
    if($total2>$total3)
    {
        $p2_rank=2;
     
    }
    else
    {
    $p2_rank=3;
       
    }
}

                
if($total3>$total2)
{
    if($total3>$total1)
    {
       $p3_rank=1;
       $p4_rank=1;
    }
    else
    {
         $p3_rank=2;
       $p4_rank=2;
    }
   
}
else
{
    if($total3>$total1)
    {
        $p3_rank=2;
       $p4_rank=2;
    }
    else
    {
    $p3_rank=3;
       $p4_rank=3;    
    }
}


/* end */

   
                    
                }
                else
                {
                    
                    
                    
                    
                    
                    if($total1>$total2)
{
    if($total1>$total3)
    {
        if($total1>$total4)
        {
           $p1_rank=1;
        }
        else
        {
          $p1_rank=2;  
        }
    }
    else
    {
       
        if($total1>$total4)
        {
           $p1_rank=2;
        }
        else
        {
          $p1_rank=3;  
        }
    
    
    }
    
}
else
{
    if($total1>$total3)
    {
        if($total1>$total4)
        {
           $p1_rank=2;
        }
        else
        {
          $p1_rank=3;  
        }
    }
    else
    {
       if($total1>$total4)
        {
           $p1_rank=3;
        }
        else
        {
          $p1_rank=4;  
        }
    }
} 
                    


if($total2>$total1)
{
    if($total2>$total3)
    {
        if($total2>$total4)
        {
           $p2_rank=1;
        }
        else
        {
          $p2_rank=2;  
        }
    }
    else
    {
         if($total2>$total4)
        {
           $p2_rank=2;
        }
        else
        {
          $p2_rank=3;  
        }
    }
    
}
else
{
    if($total2>$total3)
    {
        if($total2>$total4)
        {
           $p2_rank=2;
        }
        else
        {
          $p2_rank=3;  
        }
    }
    else
    {
       if($total2>$total4)
        {
           $p2_rank=3;
        }
        else
        {
          $p2_rank=4;  
        }
    }
}
 



if($total3>$total1)
{
    if($total3>$total2)
    {
        if($total3>$total4)
        {
           $p3_rank=1;
        }
        else
        {
          $p3_rank=2;  
        }
    }
    else
    {
        if($total3>$total4)
        {
           $p3_rank=2;
        }
        else
        {
          $p3_rank=3;  
        }
    }
    
}
else
{
    if($total3>$total2)
    {
        if($total3>$total4)
        {
           $p3_rank=2;
        }
        else
        {
          $p3_rank=3;  
        }
    }
    else
    {
       if($total3>$total4)
        {
           $p3_rank=3;
        }
        else
        {
          $p3_rank=4;  
        }
    }
}



if($total4>$total1)
{
    if($total4>$total2)
    {
        if($total4>$total3)
        {
           $p4_rank=1;
        }
        else
        {
          $p4_rank=2;  
        }
    }
    else
    {
         if($total4>$total3)
        {
           $p4_rank=2;
        }
        else
        {
          $p4_rank=3;  
        }
    }
    
}
else
{
    if($total4>$total2)
    {
        if($total4>$total3)
        {
           $p4_rank=2;
        }
        else
        {
          $p4_rank=3;  
        }
    }
    else
    {
       if($total4>$total3)
        {
           $p4_rank=3;
        }
        else
        {
          $p4_rank=4;  
        }
    }
}

   
                }
            }
           }
            
            
            

        }
    }
}


$conn->query("update hiphop set choreography='$choreography_1',performance='$performance_1',suitability='$suitability_1',stage='$stage_1',total='$total1',ranking='$p1_rank' where judge_id='$judge_id' and group_num='$d1'");	
  
$conn->query("update hiphop set choreography='$choreography_2',performance='$performance_2',suitability='$suitability_2',stage='$stage_2',total='$total2',ranking='$p2_rank' where judge_id='$judge_id' and group_num='$d2'");	

$conn->query("update hiphop set choreography='$choreography_3',performance='$performance_3',suitability='$suitability_3',stage='$stage_3',total='$total3',ranking='$p3_rank' where judge_id='$judge_id' and group_num='$d3'");	

$conn->query("update hiphop set choreography='$choreography_4',performance='$performance_4',suitability='$suitability_4',stage='$stage_4',total='$total4',ranking='$p4_rank' where judge_id='$judge_id' and group_num='$d4'");	
 
 
 
 
?>
			                                       <script>
			                                      
			      								window.location = '../home.php';
			      							    alert('Data successfully updated.');
			      														
			      								</script>
 
<?php
}
?>
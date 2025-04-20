<?php  include('../dbcon.php') ?>
 <?php  include('../session.php') ?>

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
        <h4 class="modal-title" id="myModalLabel">Criteria for Vocal Solo - Visayan Folk Song</h4>
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
      <h1>Cultural Tilt: Vocal Solo</h1>
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
            <h1>Vocal Solo - Visayan Folk Song</h1> 
            
           
          </div>
          
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">
       
          <div class="table-responsive">
            <table class="table table-striped">
          <tr>
           <td><h1>Performer 1</h1> </td>
          </tr>
          <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Tone</th>
           <th>Musicianship</th>
            <th>Diction</th>
             <th>Suitability <br/>of Piece</th>
              <th>Stage<br />Deportment</th>
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="tone_1">
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
           <select name="musicianship_1">
          
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
              <td> <select name="diction_1">
          
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
                <td> <select name="suitability_1">
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
          <td><h1>Performer 2</h1> </td>
          </tr>
          <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Tone</th>
           <th>Musicianship</th>
            <th>Diction</th>
             <th>Suitability <br/>of Piece</th>
              <th>Stage<br />Deportment</th>
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="tone_2">
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
           <select name="musicianship_2">
          
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
              <td> <select name="diction_2">
          
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
                <td> <select name="suitability_2">
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
           <td><h1>Performer 3</h1> </td>
          </tr>
          <tr>
          <td>
          <table class="table table-striped">
          <thead>
         
          <th>Tone</th>
           <th>Musicianship</th>
            <th>Diction</th>
             <th>Suitability <br/>of Piece</th>
              <th>Stage<br />Deportment</th>
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="tone_3">
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
           <select name="musicianship_3">
          
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
              <td> <select name="diction_3">
          
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
                <td> <select name="suitability_3">
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
         <td><h1>Performer 4</h1> </td>
          </tr>
          <tr>
          <td>
         <table class="table table-striped">
          <thead>
         
          <th>Tone</th>
           <th>Musicianship</th>
            <th>Diction</th>
             <th>Suitability <br/>of Piece</th>
              <th>Stage<br />Deportment</th>
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="tone_4">
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
           <select name="musicianship_4">
          
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
              <td> <select name="diction_4">
          
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
                <td> <select name="suitability_4">
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
      
        
        <button name="submit_data" type="submit" class="btn btn-primary">Submit</button> 
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
if (isset($_POST['submit_data'])) 
{
 
 
 
$d1=1;
$d2=2;
$d3=3;
$d4=4;

$stat="Done";


$judge_id = $_POST['judge_id'];

$tone_1 = $_POST['tone_1'];
$musicianship_1= $_POST['musicianship_1'];
$diction_1 = $_POST['diction_1'];
$suitability_1 = $_POST['suitability_1'];
$stage_1 = $_POST['stage_1'];
$total1=$tone_1+$musicianship_1+$diction_1+$suitability_1+$stage_1;

$tone_2 = $_POST['tone_2'];
$musicianship_2= $_POST['musicianship_2'];
$diction_2 = $_POST['diction_2'];
$suitability_2 = $_POST['suitability_2'];
$stage_2 = $_POST['stage_2'];
$total2=$tone_2+$musicianship_2+$diction_2+$suitability_2+$stage_2;

$tone_3 = $_POST['tone_3'];
$musicianship_3= $_POST['musicianship_3'];
$diction_3 = $_POST['diction_3'];
$suitability_3 = $_POST['suitability_3'];
$stage_3 = $_POST['stage_3'];
$total3=$tone_3+$musicianship_3+$diction_3+$suitability_3+$stage_3;

$tone_4 = $_POST['tone_4'];
$musicianship_4= $_POST['musicianship_4'];
$diction_4 = $_POST['diction_4'];
$suitability_4 = $_POST['suitability_4'];
$stage_4 = $_POST['stage_4'];
$total4=$tone_4+$musicianship_4+$diction_4+$suitability_4+$stage_4;



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



$conn->query("insert into vocalsolo (tone,musicianship,diction,suitability,stage,total,singer_num,judge_id,ranking)
	   values('$tone_1','$musicianship_1','$diction_1','$suitability_1','$stage_1','$total1','$d1','$judge_id','$p1_rank')");		
 
$conn->query("insert into vocalsolo (tone,musicianship,diction,suitability,stage,total,singer_num,judge_id,ranking)
	   values('$tone_2','$musicianship_2','$diction_2','$suitability_2','$stage_2','$total2','$d2','$judge_id','$p2_rank')");		
 
$conn->query("insert into vocalsolo (tone,musicianship,diction,suitability,stage,total,singer_num,judge_id,ranking)
	   values('$tone_3','$musicianship_3','$diction_3','$suitability_3','$stage_3','$total3','$d3','$judge_id','$p3_rank')");		
 
$conn->query("insert into vocalsolo (tone,musicianship,diction,suitability,stage,total,singer_num,judge_id,ranking)
	   values('$tone_4','$musicianship_4','$diction_4','$suitability_4','$stage_4','$total4','$d4','$judge_id','$p4_rank')");		
 
 
 
 
 
 $conn->query("update judges set e3_stat='$stat' where judge_id='$judge_id'");	
 
 
?>
			                                       <script>
			                                      
			      								window.location = '../home.php';
			      							    alert('Data successfully saved.');
			      														
			      								</script>
 
<?php
}
?>
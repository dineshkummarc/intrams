<?php  include('../dbcon.php') ?>
 <?php  include('../session.php');
 
 
 $type_eng="English";
  $type_fil="Filipino";
  $d1="1";
    $d2="2";
      $d3="3";
        $d4="4";
        
  $english_query = $conn->query("select * from declamation where judge_id = '$session_id' and type='$type_eng' and declaimer_num='$d1'");
$eng_row1 = $english_query->fetch();

$interpretation_e_1=$eng_row1['interpretation'];
$diction_e_1=$eng_row1['diction'];
$suitability_e_1=$eng_row1['suitability'];
$mastery_e_1=$eng_row1['mastery'];
$stage_e_1=$eng_row1['stage'];


$english_query = $conn->query("select * from declamation where judge_id = '$session_id' and type='$type_eng' and declaimer_num='$d2'");
$eng_row2 = $english_query->fetch();
$interpretation_e_2=$eng_row2['interpretation'];
$diction_e_2=$eng_row2['diction'];
$suitability_e_2=$eng_row2['suitability'];
$mastery_e_2=$eng_row2['mastery'];
$stage_e_2=$eng_row2['stage'];



$english_query = $conn->query("select * from declamation where judge_id = '$session_id' and type='$type_eng' and declaimer_num='$d3'");
$eng_row3 = $english_query->fetch();
$interpretation_e_3=$eng_row3['interpretation'];
$diction_e_3=$eng_row3['diction'];
$suitability_e_3=$eng_row3['suitability'];
$mastery_e_3=$eng_row3['mastery'];
$stage_e_3=$eng_row3['stage'];


$english_query = $conn->query("select * from declamation where judge_id = '$session_id' and type='$type_eng' and declaimer_num='$d4'");
$eng_row4 = $english_query->fetch();
$interpretation_e_4=$eng_row1['interpretation'];
$diction_e_4=$eng_row1['diction'];
$suitability_e_4=$eng_row1['suitability'];
$mastery_e_4=$eng_row1['mastery'];
$stage_e_4=$eng_row1['stage'];



$filipino_query = $conn->query("select * from declamation where judge_id = '$session_id' and type='$type_fil' and declaimer_num='$d1'");
$fil_row1 = $filipino_query->fetch();
$interpretation_f_1=$fil_row1['interpretation'];
$diction_f_1=$fil_row1['diction'];
$suitability_f_1=$fil_row1['suitability'];
$mastery_f_1=$fil_row1['mastery'];
$stage_f_1=$fil_row1['stage'];


$filipino_query = $conn->query("select * from declamation where judge_id = '$session_id' and type='$type_fil' and declaimer_num='$d2'");
$fil_row2 = $filipino_query->fetch();
$interpretation_f_2=$fil_row2['interpretation'];
$diction_f_2=$fil_row2['diction'];
$suitability_f_2=$fil_row2['suitability'];
$mastery_f_2=$fil_row2['mastery'];
$stage_f_2=$fil_row2['stage'];


$filipino_query = $conn->query("select * from declamation where judge_id = '$session_id' and type='$type_fil' and declaimer_num='$d3'");
$fil_row3 = $filipino_query->fetch();
$interpretation_f_3=$fil_row3['interpretation'];
$diction_f_3=$fil_row3['diction'];
$suitability_f_3=$fil_row3['suitability'];
$mastery_f_3=$fil_row3['mastery'];
$stage_f_3=$fil_row3['stage'];


$filipino_query = $conn->query("select * from declamation where judge_id = '$session_id' and type='$type_fil' and declaimer_num='$d4'");
$fil_row4 = $filipino_query->fetch();
$interpretation_f_4=$fil_row4['interpretation'];
$diction_f_4=$fil_row4['diction'];
$suitability_f_4=$fil_row4['suitability'];
$mastery_f_4=$fil_row4['mastery'];
$stage_f_4=$fil_row4['stage'];


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
             <a href="#download-bootstrap">Declamation English Panel</a>
              </li>
              
              <li class="">
             <a href="#download-bootstrap2">Declamation Filipino Panel</a>
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
        <h4 class="modal-title" id="myModalLabel">Criteria for Declamation</h4>
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
    <h1>Cultural Tilt: Declamation</h1>
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
            <h1>Declamation English</h1> 
            
           
          </div>
          
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">
       
          <div class="table-responsive">
            <table class="table table-striped">
          <tr>
          <td>  <h1>Performer 1</h1> </td>
          </tr>
          <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Interpretation</th>
           <th>Diction</th>
            <th>Suitability of the Piece</th>
             <th>Mastery of Piece</th>
              <th>Stage Presence</th>
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="interpretation_e_1">
            <option><?php echo $interpretation_e_1;?></option>
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
           <select name="diction_e_1">
               <option><?php echo $diction_e_1;?></option>
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
              <td> <select name="suitability_e_1">
                  <option><?php echo $suitability_e_1;?></option>
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
                <td> <select name="mastery_e_1">
                    <option><?php echo $mastery_e_1;?></option>
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
                  <td> <select name="presence_e_1">
                      <option><?php echo $stage_e_1;?></option>
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
        <td>  <h1>Performer 2</h1> </td>
          </tr>
          <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Interpretation</th>
           <th>Diction</th>
            <th>Suitability of the Piece</th>
             <th>Mastery of Piece</th>
              <th>Stage Presence</th>
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="interpretation_e_2">
              <option><?php echo $interpretation_e_2;?></option>
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
           <select name="diction_e_2">
               <option><?php echo $diction_e_2;?></option>
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
              <td> <select name="suitability_e_2">
                <option><?php echo $suitability_e_2;?></option>
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
                <td> <select name="mastery_e_2">
                  <option><?php echo $mastery_e_2;?></option>
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
                  <td> <select name="presence_e_2">
                   <option><?php echo $stage_e_2;?></option>
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
         <td>  <h1>Performer 3</h1> </td>
          </tr>
          <tr>
          <td>
          <table class="table table-striped">
          <thead>
         
          <th>Interpretation</th>
           <th>Diction</th>
            <th>Suitability of the Piece</th>
             <th>Mastery of Piece</th>
              <th>Stage Presence</th>
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="interpretation_e_3">
             <option><?php echo $interpretation_e_3;?></option>
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
           <select name="diction_e_3">
              <option><?php echo $diction_e_3;?></option>
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
              <td> <select name="suitability_e_3">
                 <option><?php echo $suitability_e_3;?></option>
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
                <td> <select name="mastery_e_3">
                   <option><?php echo $mastery_e_3;?></option>
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
                  <td> <select name="presence_e_3">
                     <option><?php echo $stage_e_3;?></option>
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
           <td>  <h1>Performer 4</h1> </td>
          </tr>
          <tr>
          <td>
           <table class="table table-striped">
          <thead>
         
          <th>Interpretation</th>
           <th>Diction</th>
            <th>Suitability of the Piece</th>
             <th>Mastery of Piece</th>
              <th>Stage Presence</th>
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="interpretation_e_4">
             <option><?php echo $interpretation_e_4;?></option>
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
           <select name="diction_e_4">
              <option><?php echo $diction_e_4;?></option>
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
              <td> <select name="suitability_e_4">
                 <option><?php echo $suitability_e_4;?></option>
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
                <td> <select name="mastery_e_4">  
                 <option><?php echo $mastery_e_4;?></option>
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
                  <td> <select name="presence_e_4">
                     <option><?php echo $stage_e_4;?></option>
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
  
  
  
     <section id="download-bootstrap2">
          <div class="page-header">
            <h1>Declamation Filipino</h1> 
            
           
          </div>
          
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">
       
          <div class="table-responsive">
            <table class="table table-striped">
          <tr>
         <td>  <h1>Performer 1</h1> </td>
          </tr>
          <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Interpretation</th>
           <th>Diction</th>
            <th>Suitability of the Piece</th>
             <th>Mastery of Piece</th>
              <th>Stage Presence</th>
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="interpretation_f_1">
            <option><?php echo $interpretation_f_1;?></option>
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
           <select name="diction_f_1">
             <option><?php echo $diction_f_1;?></option>
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
              <td> <select name="suitability_f_1">
                <option><?php echo $suitability_f_1;?></option>
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
                <td> <select name="mastery_f_1">
                  <option><?php echo $mastery_f_1;?></option>
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
                  <td> <select name="presence_f_1">
                    <option><?php echo $stage_f_1;?></option>
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
        <td>  <h1>Performer 2</h1> </td>
          </tr>
          <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Interpretation</th>
           <th>Diction</th>
            <th>Suitability of the Piece</th>
             <th>Mastery of Piece</th>
              <th>Stage Presence</th>
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="interpretation_f_2">
          <option><?php echo $interpretation_f_2;?></option>
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
           <select name="diction_f_2">
           <option><?php echo $diction_f_2;?></option>
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
              <td> <select name="suitability_f_2">
              <option><?php echo $suitability_f_2;?></option>
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
                <td> <select name="mastery_f_2">
                <option><?php echo $mastery_f_2;?></option>
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
                  <td> <select name="presence_f_2">
                  <option><?php echo $stage_f_2;?></option>
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
         <td>  <h1>Performer 3</h1> </td>
          </tr>
          <tr>
          <td>
          <table class="table table-striped">
          <thead>
         
          <th>Interpretation</th>
           <th>Diction</th>
            <th>Suitability of the Piece</th>
             <th>Mastery of Piece</th>
              <th>Stage Presence</th>
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="interpretation_f_3">
          <option><?php echo $interpretation_f_3;?></option>
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
           <select name="diction_f_3">
           <option><?php echo $diction_f_3;?></option>
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
              <td> <select name="suitability_f_3">
              <option><?php echo $suitability_f_3;?></option>
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
                <td> <select name="mastery_f_3">
                <option><?php echo $mastery_f_3;?></option>
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
                  <td> <select name="presence_f_3">
                  <option><?php echo $stage_f_3;?></option>
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
        <td>  <h1>Performer 4</h1> </td>
          </tr>
          <tr>
          <td>
           <table class="table table-striped">
          <thead>
         
          <th>Interpretation</th>
           <th>Diction</th>
            <th>Suitability of the Piece</th>
             <th>Mastery of Piece</th>
              <th>Stage Presence</th>
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="interpretation_f_4">
          <option><?php echo $interpretation_f_4;?></option>
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
           <select name="diction_f_4">
           <option><?php echo $diction_f_4;?></option>
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
              <td> <select name="suitability_f_4">
              <option><?php echo $suitability_f_4;?></option>
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
                <td> <select name="mastery_f_4">
                <option><?php echo $mastery_f_4;?></option>
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
                  <td> <select name="presence_f_4">
                  <option><?php echo $stage_f_4;?></option>
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

$type_e="English";
$type_f="Filipino";

$judge_id = $_POST['judge_id'];

$interpretation_e_1 = $_POST['interpretation_e_1'];
$diction_e_1 = $_POST['diction_e_1'];
$suitability_e_1 = $_POST['suitability_e_1'];
$mastery_e_1 = $_POST['mastery_e_1'];
$presence_e_1 = $_POST['presence_e_1'];
$total1=$interpretation_e_1+$diction_e_1+$suitability_e_1+$mastery_e_1+$presence_e_1;

$interpretation_e_2 = $_POST['interpretation_e_2'];
$diction_e_2 = $_POST['diction_e_2'];
$suitability_e_2 = $_POST['suitability_e_2'];
$mastery_e_2 = $_POST['mastery_e_2'];
$presence_e_2 = $_POST['presence_e_2'];
$total2=$interpretation_e_2+$diction_e_2+$suitability_e_2+$mastery_e_2+$presence_e_2;

$interpretation_e_3 = $_POST['interpretation_e_3'];
$diction_e_3 = $_POST['diction_e_3'];
$suitability_e_3 = $_POST['suitability_e_3'];
$mastery_e_3 = $_POST['mastery_e_3'];
$presence_e_3 = $_POST['presence_e_3'];
$total3=$interpretation_e_3+$diction_e_3+$suitability_e_3+$mastery_e_3+$presence_e_3;

$interpretation_e_4 = $_POST['interpretation_e_4'];
$diction_e_4 = $_POST['diction_e_4'];
$suitability_e_4 = $_POST['suitability_e_4'];
$mastery_e_4 = $_POST['mastery_e_4'];
$presence_e_4 = $_POST['presence_e_4'];
$total4=$interpretation_e_4+$diction_e_4+$suitability_e_4+$mastery_e_4+$presence_e_4;

$interpretation_f_1 = $_POST['interpretation_f_1'];
$diction_f_1 = $_POST['diction_f_1'];
$suitability_f_1 = $_POST['suitability_f_1'];
$mastery_f_1 = $_POST['mastery_f_1'];
$presence_f_1 = $_POST['presence_f_1'];
$total_f_1=$interpretation_f_1+$diction_f_1+$suitability_f_1+$mastery_f_1+$presence_f_1;

$interpretation_f_2 = $_POST['interpretation_f_2'];
$diction_f_2 = $_POST['diction_f_2'];
$suitability_f_2 = $_POST['suitability_f_2'];
$mastery_f_2 = $_POST['mastery_f_2'];
$presence_f_2 = $_POST['presence_f_2'];
$total_f_2=$interpretation_f_2+$diction_f_2+$suitability_f_2+$mastery_f_2+$presence_f_2;

$interpretation_f_3 = $_POST['interpretation_f_3'];
$diction_f_3 = $_POST['diction_f_3'];
$suitability_f_3 = $_POST['suitability_f_3'];
$mastery_f_3 = $_POST['mastery_f_3'];
$presence_f_3 = $_POST['presence_f_3'];
$total_f_3=$interpretation_f_3+$diction_f_3+$suitability_f_3+$mastery_f_3+$presence_f_3;

$interpretation_f_4 = $_POST['interpretation_f_4'];
$diction_f_4 = $_POST['diction_f_4'];
$suitability_f_4 = $_POST['suitability_f_4'];
$mastery_f_4 = $_POST['mastery_f_4'];
$presence_f_4 = $_POST['presence_f_4'];
$total_f_4=$interpretation_f_4+$diction_f_4+$suitability_f_4+$mastery_f_4+$presence_f_4;







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













/*filipino*/

if($total_f_1==$total_f_2)
{

    /* start */

 if($total_f_3>$total_f_1)
{
    if($total_f_3>$total_f_4)
    {
       $fp3_rank=1;
       
    }
    else
    {
         $fp3_rank=2;
     
    }
   
}
else
{
    if($total_f_3>$total_f_4)
    {
        $fp3_rank=2;
     
    }
    else
    {
    $fp3_rank=3;
       
    }
}


 if($total_f_4>$total_f_1)
{
    if($total_f_4>$total_f_3)
    {
       $fp4_rank=1;
       
    }
    else
    {
         $fp4_rank=2;
     
    }
   
}
else
{
    if($total_f_4>$total_f_3)
    {
        $fp4_rank=2;
     
    }
    else
    {
    $fp4_rank=3;
       
    }
}

                
if($total_f_1>$total_f_3)
{
    if($total_f_1>$total_f_4)
    {
       $fp1_rank=1;
       $fp2_rank=1;
    }
    else
    {
         $fp1_rank=2;
       $fp2_rank=2;
    }
   
}
else
{
    if($total_f_1>$total_f_4)
    {
        $fp1_rank=2;
       $fp2_rank=2;
    }
    else
    {
    $fp1_rank=3;
       $fp2_rank=3;    
    }
}


/* end */
      
      
}
else
{
    
    if($total_f_1==$total_f_3)
    {
      
      
/* start */

 if($total_f_2>$total_f_1)
{
    if($total_f_2>$total_f_4)
    {
       $fp2_rank=1;
       
    }
    else
    {
         $fp2_rank=2;
     
    }
   
}
else
{
    if($total_f_2>$total_f_4)
    {
        $fp2_rank=2;
     
    }
    else
    {
    $fp2_rank=3;
       
    }
}


 if($total_f_4>$total_f_1)
{
    if($total_f_4>$total_f_2)
    {
       $fp4_rank=1;
       
    }
    else
    {
         $fp4_rank=2;
     
    }
   
}
else
{
    if($total_f_4>$total_f_2)
    {
        $fp4_rank=2;
     
    }
    else
    {
    $fp4_rank=3;
       
    }
}

                
if($total_f_1>$total_f_2)
{
    if($total_f_1>$total_f_4)
    {
       $fp1_rank=1;
       $fp3_rank=1;
    }
    else
    {
         $fp1_rank=2;
       $fp3_rank=2;
    }
   
}
else
{
    if($total_f_1>$total_f_4)
    {
        $fp1_rank=2;
       $fp3_rank=2;
    }
    else
    {
    $fp1_rank=3;
       $fp3_rank=3;    
    }
}


/* end */
      
      
        
    }
    else
    {
        if($total_f_1==$total_f_4)
        {
            
            
/* start */

 if($total_f_2>$total_f_1)
{
    if($total_f_2>$total_f_3)
    {
       $fp2_rank=1;
       
    }
    else
    {
         $fp2_rank=2;
     
    }
   
}
else
{
    if($total_f_2>$total_f_3)
    {
        $fp2_rank=2;
     
    }
    else
    {
    $fp2_rank=3;
       
    }
}


 if($total_f_3>$total_f_1)
{
    if($total_f_3>$total_f_2)
    {
       $fp3_rank=1;
       
    }
    else
    {
         $fp3_rank=2;
     
    }
   
}
else
{
    if($total_f_3>$total_f_2)
    {
        $fp3_rank=2;
     
    }
    else
    {
    $fp3_rank=3;
       
    }
}

                
if($total_f_1>$total_f_2)
{
    if($total_f_1>$total_f_3)
    {
       $fp1_rank=1;
       $fp4_rank=1;
    }
    else
    {
         $fp1_rank=2;
       $fp4_rank=2;
    }
   
}
else
{
    if($total_f_1>$total_f_3)
    {
        $fp1_rank=2;
       $fp4_rank=2;
    }
    else
    {
    $fp1_rank=3;
       $fp4_rank=3;    
    }
}


/* end */


    
        }
        else
        {
           if($total_f_2==$total_f_3) 
           {

/* start */

 if($total_f_1>$total_f_2)
{
    if($total_f_1>$total_f_4)
    {
       $fp1_rank=1;
       
    }
    else
    {
         $fp1_rank=2;
     
    }
   
}
else
{
    if($total_f_1>$total_f_4)
    {
        $fp1_rank=2;
     
    }
    else
    {
    $fp1_rank=3;
       
    }
}


 if($total_f_4>$total_f_1)
{
    if($total_f_4>$total_f_2)
    {
       $fp4_rank=1;
       
    }
    else
    {
         $fp4_rank=2;
     
    }
   
}
else
{
    if($total_f_4>$total_f_2)
    {
        $fp4_rank=2;
     
    }
    else
    {
    $fp4_rank=3;
       
    }
}

                
if($total_f_2>$total_f_1)
{
    if($total_f_2>$total_f_4)
    {
       $fp3_rank=1;
       $fp2_rank=1;
    }
    else
    {
         $fp3_rank=2;
       $fp2_rank=2;
    }
   
}
else
{
    if($total_f_2>$total_f_4)
    {
        $fp3_rank=2;
       $fp2_rank=2;
    }
    else
    {
    $fp3_rank=3;
       $fp2_rank=3;    
    }
}


/* end */


           }
           else
           {
            if($total_f_2==$total_f_4)
            {
                
                
                /* start */

 if($total_f_1>$total_f_2)
{
    if($total_f_1>$total_f_3)
    {
       $fp1_rank=1;
       
    }
    else
    {
         $fp1_rank=2;
     
    }
   
}
else
{
    if($total_f_1>$total_f_3)
    {
        $fp1_rank=2;
     
    }
    else
    {
    $fp1_rank=3;
       
    }
}


 if($total_f_3>$total_f_1)
{
    if($total_f_3>$total_f_2)
    {
       $fp3_rank=1;
       
    }
    else
    {
         $fp3_rank=2;
     
    }
   
}
else
{
    if($total_f_3>$total_f_2)
    {
        $fp3_rank=2;
     
    }
    else
    {
    $fp3_rank=3;
       
    }
}

                
if($total_f_2>$total_f_1)
{
    if($total_f_2>$total_f_3)
    {
       $fp2_rank=1;
       $fp4_rank=1;
    }
    else
    {
         $fp2_rank=2;
       $fp4_rank=2;
    }
   
}
else
{
    if($total_f_2>$total_f_3)
    {
        $fp2_rank=2;
       $p4_rank=2;
    }
    else
    {
    $fp2_rank=3;
       $fp4_rank=3;    
    }
}


/* end */
                
                
                
                
            }
            else
            {
                if($total3==$total_f_4)
                {
                   
                



/* start */

 if($total_f_1>$total_f_2)
{
    if($total_f_1>$total_f_3)
    {
       $fp1_rank=1;
       
    }
    else
    {
         $fp1_rank=2;
     
    }
   
}
else
{
    if($total_f_1>$total_f_3)
    {
        $fp1_rank=2;
     
    }
    else
    {
    $fp1_rank=3;
       
    }
}


 if($total_f_2>$total_f_1)
{
    if($total_f_2>$total_f_3)
    {
       $fp2_rank=1;
       
    }
    else
    {
         $fp2_rank=2;
     
    }
   
}
else
{
    if($total_f_2>$total_f_3)
    {
        $fp2_rank=2;
     
    }
    else
    {
    $fp2_rank=3;
       
    }
}

                
if($total_f_3>$total_f_2)
{
    if($total_f_2>$total_f_1)
    {
       $fp3_rank=1;
       $fp4_rank=1;
    }
    else
    {
         $fp3_rank=2;
       $fp4_rank=2;
    }
   
}
else
{
    if($total_f_2>$total_f_1)
    {
        $fp3_rank=2;
       $fp4_rank=2;
    }
    else
    {
    $fp3_rank=3;
       $fp4_rank=3;    
    }
}


/* end */

   
                    
                }
                else
                {
                    
                    
                    
                    
                    
                    if($total_f_1>$total_f_2)
{
    if($total_f_1>$total_f_3)
    {
        if($total_f_1>$total_f_4)
        {
           $fp1_rank=1;
        }
        else
        {
          $fp1_rank=2;  
        }
    }
    else
    {
       
        if($total_f_1>$total_f_4)
        {
           $fp1_rank=2;
        }
        else
        {
          $fp1_rank=3;  
        }
    
    
    }
    
}
else
{
    if($total_f_1>$total_f_3)
    {
        if($total_f_1>$total_f_4)
        {
           $fp1_rank=2;
        }
        else
        {
          $fp1_rank=3;  
        }
    }
    else
    {
       if($total_f_1>$total_f_4)
        {
           $fp1_rank=3;
        }
        else
        {
          $fp1_rank=4;  
        }
    }
} 
                    


if($total_f_2>$total_f_1)
{
    if($total_f_2>$total_f_3)
    {
        if($total_f_2>$total_f_4)
        {
           $fp2_rank=1;
        }
        else
        {
          $fp2_rank=2;  
        }
    }
    else
    {
         if($total_f_2>$total_f_4)
        {
           $fp2_rank=2;
        }
        else
        {
          $fp2_rank=3;  
        }
    }
    
}
else
{
    if($total_f_2>$total_f_3)
    {
        if($total_f_2>$total_f_4)
        {
           $fp2_rank=2;
        }
        else
        {
          $fp2_rank=3;  
        }
    }
    else
    {
       if($total_f_2>$total_f_4)
        {
           $fp2_rank=3;
        }
        else
        {
          $fp2_rank=4;  
        }
    }
}
 



if($total_f_3>$total_f_1)
{
    if($total_f_3>$total_f_2)
    {
        if($total_f_3>$total_f_4)
        {
           $fp3_rank=1;
        }
        else
        {
          $fp3_rank=2;  
        }
    }
    else
    {
        if($total_f_3>$total_f_4)
        {
           $fp3_rank=2;
        }
        else
        {
          $fp3_rank=3;  
        }
    }
    
}
else
{
    if($total_f_3>$total_f_2)
    {
        if($total_f_3>$total_f_4)
        {
           $fp3_rank=2;
        }
        else
        {
          $fp3_rank=3;  
        }
    }
    else
    {
       if($total_f_3>$total_f_4)
        {
           $fp3_rank=3;
        }
        else
        {
          $fp3_rank=4;  
        }
    }
}



if($total_f_4>$total_f_1)
{
    if($total_f_4>$total_f_2)
    {
        if($total_f_4>$total_f_3)
        {
           $fp4_rank=1;
        }
        else
        {
          $fp4_rank=2;  
        }
    }
    else
    {
         if($total_f_4>$total_f_3)
        {
           $fp4_rank=2;
        }
        else
        {
          $fp4_rank=3;  
        }
    }
    
}
else
{
    if($total_f_4>$total_f_2)
    {
        if($total_f_4>$total_f_3)
        {
           $fp4_rank=2;
        }
        else
        {
          $fp4_rank=3;  
        }
    }
    else
    {
       if($total_f_4>$total_f_3)
        {
           $fp4_rank=3;
        }
        else
        {
          $fp4_rank=4;  
        }
    }
}

    
                }
            }
           }
            
            
            

        }
    }
}





$conn->query("update declamation set interpretation='$interpretation_e_1',diction='$diction_e_1',suitability='$suitability_e_1',mastery='$mastery_e_1',stage='$presence_e_1',total='$total1',ranking='$p1_rank' where judge_id='$judge_id' and type='$type_e' and declaimer_num='$d1'");	
 
$conn->query("update declamation set interpretation='$interpretation_e_2',diction='$diction_e_2',suitability='$suitability_e_2',mastery='$mastery_e_2',stage='$presence_e_2',total='$total2'ranking='$p2_rank' where judge_id='$judge_id' and type='$type_e' and declaimer_num='$d2'");	
 
$conn->query("update declamation set interpretation='$interpretation_e_3',diction='$diction_e_3',suitability='$suitability_e_3',mastery='$mastery_e_3',stage='$presence_e_3',total='$total3'ranking='$p3_rank' where judge_id='$judge_id' and type='$type_e' and declaimer_num='$d3'");	

$conn->query("update declamation set interpretation='$interpretation_e_4',diction='$diction_e_4',suitability='$suitability_e_4',mastery='$mastery_e_4',stage='$presence_e_4',total='$total4'ranking='$p4_rank' where judge_id='$judge_id' and type='$type_e' and declaimer_num='$d4'");	


$conn->query("update declamation set interpretation='$interpretation_f_1',diction='$diction_f_1',suitability='$suitability_f_1',mastery='$mastery_f_1',stage='$presence_f_1',total='$total_f_1'ranking='$fp1_rank' where judge_id='$judge_id' and type='$type_f' and declaimer_num='$d1'");	
 
$conn->query("update declamation set interpretation='$interpretation_f_2',diction='$diction_f_2',suitability='$suitability_f_2',mastery='$mastery_f_2',stage='$presence_f_2',total='$total_f_2'ranking='$fp2_rank' where judge_id='$judge_id' and type='$type_f' and declaimer_num='$d2'");	
 
$conn->query("update declamation set interpretation='$interpretation_f_3',diction='$diction_f_3',suitability='$suitability_f_3',mastery='$mastery_f_3',stage='$presence_f_3',total='$total_f_3'ranking='$fp3_rank' where judge_id='$judge_id' and type='$type_f' and declaimer_num='$d3'");
 
$conn->query("update declamation set interpretation='$interpretation_f_4',diction='$diction_f_4',suitability='$suitability_f_4',mastery='$mastery_f_4',stage='$presence_f_4',total='$total_f_4'ranking='$fp4_rank' where judge_id='$judge_id' and type='$type_f' and declaimer_num='$d4'");	
 
 
 
?>
			                                       <script>
			                                      
			      								window.location = '../home.php';
			      							    alert('Data successfully saved.');
			      														
			      								</script>
 
<?php
}
?>
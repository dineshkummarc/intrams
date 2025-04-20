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
             <a href="#download-bootstrap">Modern Standard Panel</a>
              </li>
              
              <li class="">
             <a href="#download-bootstrap2">Latin American Panel</a>
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
        <h4 class="modal-title" id="myModalLabel">Criteria for Dance Sports</h4>
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
    <h1>Cultural Tilt: Dance Sports</h1>
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
            <h1>Modern Standard</h1> 
            
           
          </div>
          
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">
       
          <div class="table-responsive">
            <table class="table table-striped">
          <tr>
          <td> <h1>Couple 1</h1> </td>
          </tr>
          <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Floor Craft</th>
           <th>Timing and <br />Basic Rhythm</th>
            <th>Body Lines</th>
             <th>Footwork</th>
             
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="floorcraft_ms_1">
       
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
           <select name="timing_ms_1">
         
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
              <td> <select name="bodylines_ms_1">
        
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
                <td> <select name="footwork_ms_1">
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
          
          
           <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Movement</th>
           <th>Rhythmic<br />Interpretation</th>
            <th>Dance<br />Characterization</th>
             <th></th>
             
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="movement_ms_1">
        
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
           <select name="interpretation_ms_1">
        
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
              <td> <select name="characterization_ms_1">
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
                <td></td>
          </tr>
            
          </tbody>
          </table></td>
          </tr>
          </table>
          
         <table class="table table-striped">
          <tr>
        <td> <h1>Couple 2</h1> </td>
          </tr>
        <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Floor Craft</th>
           <th>Timing and <br />Basic Rhythm</th>
            <th>Body Lines</th>
             <th>Footwork</th>
             
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="floorcraft_ms_2">
       
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
           <select name="timing_ms_2">
         
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
              <td> <select name="bodylines_ms_2">
        
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
                <td> <select name="footwork_ms_2">
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
          
          
           <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Movement</th>
           <th>Rhythmic<br />Interpretation</th>
            <th>Dance<br />Characterization</th>
             <th></th>
             
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="movement_ms_2">
        
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
           <select name="interpretation_ms_2">
        
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
              <td> <select name="characterization_ms_2">
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
                <td></td>
          </tr>
            
          </tbody>
          </table></td>
          </tr>
          
          </table>
          
          
          <table class="table table-striped">
          <tr>
        <td> <h1>Couple 3</h1> </td>
          </tr>
          <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Floor Craft</th>
           <th>Timing and <br />Basic Rhythm</th>
            <th>Body Lines</th>
             <th>Footwork</th>
             
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="floorcraft_ms_3">
       
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
           <select name="timing_ms_3">
         
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
              <td> <select name="bodylines_ms_3">
        
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
                <td> <select name="footwork_ms_3">
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
          
          
           <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Movement</th>
           <th>Rhythmic<br />Interpretation</th>
            <th>Dance<br />Characterization</th>
             <th></th>
             
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="movement_ms_3">
        
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
           <select name="interpretation_ms_3">
        
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
              <td> <select name="characterization_ms_3">
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
                <td></td>
          </tr>
            
          </tbody>
          </table></td>
          </tr>
          
          </table>
          
          
          
         <table class="table table-striped">
          <tr>
       <td> <h1>Couple 4</h1> </td>
          </tr>
          <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Floor Craft</th>
           <th>Timing and <br />Basic Rhythm</th>
            <th>Body Lines</th>
             <th>Footwork</th>
             
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="floorcraft_ms_4">
       
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
           <select name="timing_ms_4">
         
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
              <td> <select name="bodylines_ms_4">
        
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
                <td> <select name="footwork_ms_4">
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
          
          
           <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Movement</th>
           <th>Rhythmic<br />Interpretation</th>
            <th>Dance<br />Characterization</th>
             <th></th>
             
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="movement_ms_4">
        
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
           <select name="interpretation_ms_4">
        
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
              <td> <select name="characterization_ms_4">
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
                <td></td>
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
            <h1>Latin American</h1> 
            
           
          </div>
          
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">
       
          <div class="table-responsive">
            <table class="table table-striped">
          <tr>
        <td> <h1>Couple 1</h1> </td>
          </tr>
          <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Floor Craft</th>
           <th>Timing and <br />Basic Rhythm</th>
            <th>Body Lines</th>
             <th>Footwork</th>
             
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="floorcraft_la_1">
       
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
           <select name="timing_la_1">
         
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
              <td> <select name="bodylines_la_1">
        
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
                <td> <select name="footwork_la_1">
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
          
          
           <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Movement</th>
           <th>Rhythmic<br />Interpretation</th>
            <th>Dance<br />Characterization</th>
             <th></th>
             
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="movement_la_1">
        
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
           <select name="interpretation_la_1">
        
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
              <td> <select name="characterization_la_1">
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
                <td></td>
          </tr>
            
          </tbody>
          </table></td>
          </tr>
          </table>
          
         <table class="table table-striped">
          <tr>
         <td> <h1>Couple 2</h1> </td>
          </tr>
        <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Floor Craft</th>
           <th>Timing and <br />Basic Rhythm</th>
            <th>Body Lines</th>
             <th>Footwork</th>
             
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="floorcraft_la_2">
       
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
           <select name="timing_la_2">
         
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
              <td> <select name="bodylines_la_2">
        
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
                <td> <select name="footwork_la_2">
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
          
          
           <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Movement</th>
           <th>Rhythmic<br />Interpretation</th>
            <th>Dance<br />Characterization</th>
             <th></th>
             
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="movement_la_2">
        
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
           <select name="interpretation_la_2">
        
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
              <td> <select name="characterization_la_2">
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
                <td></td>
          </tr>
            
          </tbody>
          </table></td>
          </tr>
          
          </table>
          
          
          <table class="table table-striped">
          <tr>
         <td> <h1>Couple 3</h1> </td>
          </tr>
          <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Floor Craft</th>
           <th>Timing and <br />Basic Rhythm</th>
            <th>Body Lines</th>
             <th>Footwork</th>
             
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="floorcraft_la_3">
       
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
           <select name="timing_la_3">
         
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
              <td> <select name="bodylines_la_3">
        
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
                <td> <select name="footwork_la_3">
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
          
          
           <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Movement</th>
           <th>Rhythmic<br />Interpretation</th>
            <th>Dance<br />Characterization</th>
             <th></th>
             
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="movement_la_3">
        
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
           <select name="interpretation_la_3">
        
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
              <td> <select name="characterization_la_3">
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
                <td></td>
          </tr>
            
          </tbody>
          </table></td>
          </tr>
          
          </table>
          
          
          
         <table class="table table-striped">
          <tr>
         <td> <h1>Couple 4</h1> </td>
          </tr>
          <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Floor Craft</th>
           <th>Timing and <br />Basic Rhythm</th>
            <th>Body Lines</th>
             <th>Footwork</th>
             
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="floorcraft_la_4">
       
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
           <select name="timing_la_4">
         
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
              <td> <select name="bodylines_la_4">
        
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
                <td> <select name="footwork_la_4">
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
          
          
           <tr>
          <td>
            <table class="table table-striped">
          <thead>
         
          <th>Movement</th>
           <th>Rhythmic<br />Interpretation</th>
            <th>Dance<br />Characterization</th>
             <th></th>
             
          </thead>
          
          <tbody>
          <tr>
       
          <td>
          <select name="movement_la_4">
        
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
           <select name="interpretation_la_4">
        
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
              <td> <select name="characterization_la_4">
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
                <td></td>
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

$type_ms="Modern Standard";
$type_la="Latin American";

$stat="Done";

$judge_id = $_POST['judge_id'];




$floorcraft_ms_1 = $_POST['floorcraft_ms_1'];
$timing_ms_1 = $_POST['timing_ms_1'];
$bodylines_ms_1 = $_POST['bodylines_ms_1'];
$footwork_ms_1 = $_POST['footwork_ms_1'];
$movement_ms_1 = $_POST['movement_ms_1'];
$interpretation_ms_1 = $_POST['interpretation_ms_1'];
$characterization_ms_1 = $_POST['characterization_ms_1'];
$total1=$floorcraft_ms_1+$timing_ms_1+$bodylines_ms_1+$footwork_ms_1+$movement_ms_1+$interpretation_ms_1+$characterization_ms_1;

$floorcraft_ms_2 = $_POST['floorcraft_ms_2'];
$timing_ms_2 = $_POST['timing_ms_2'];
$bodylines_ms_2 = $_POST['bodylines_ms_2'];
$footwork_ms_2 = $_POST['footwork_ms_2'];
$movement_ms_2 = $_POST['movement_ms_2'];
$interpretation_ms_2 = $_POST['interpretation_ms_2'];
$characterization_ms_2 = $_POST['characterization_ms_2'];
$total2=$floorcraft_ms_2+$timing_ms_2+$bodylines_ms_2+$footwork_ms_2+$movement_ms_2+$interpretation_ms_2+$characterization_ms_2;

 
$floorcraft_ms_3 = $_POST['floorcraft_ms_3'];
$timing_ms_3 = $_POST['timing_ms_3'];
$bodylines_ms_3 = $_POST['bodylines_ms_3'];
$footwork_ms_3 = $_POST['footwork_ms_3'];
$movement_ms_3 = $_POST['movement_ms_3'];
$interpretation_ms_3 = $_POST['interpretation_ms_3'];
$characterization_ms_3 = $_POST['characterization_ms_3'];
$total3=$floorcraft_ms_3+$timing_ms_3+$bodylines_ms_3+$footwork_ms_3+$movement_ms_3+$interpretation_ms_3+$characterization_ms_3;

$floorcraft_ms_4 = $_POST['floorcraft_ms_4'];
$timing_ms_4 = $_POST['timing_ms_4'];
$bodylines_ms_4 = $_POST['bodylines_ms_4'];
$footwork_ms_4 = $_POST['footwork_ms_4'];
$movement_ms_4 = $_POST['movement_ms_4'];
$interpretation_ms_4 = $_POST['interpretation_ms_4'];
$characterization_ms_4 = $_POST['characterization_ms_4'];
$total4=$floorcraft_ms_4+$timing_ms_4+$bodylines_ms_4+$footwork_ms_4+$movement_ms_4+$interpretation_ms_4+$characterization_ms_4;

$floorcraft_la_1 = $_POST['floorcraft_la_1'];
$timing_la_1 = $_POST['timing_la_1'];
$bodylines_la_1 = $_POST['bodylines_la_1'];
$footwork_la_1 = $_POST['footwork_la_1'];
$movement_la_1 = $_POST['movement_la_1'];
$interpretation_la_1 = $_POST['interpretation_la_1'];
$characterization_la_1 = $_POST['characterization_la_1'];
$total_f_1=$floorcraft_la_1+$timing_la_1+$bodylines_la_1+$footwork_la_1+$movement_la_1+$interpretation_la_1+$characterization_la_1;


$floorcraft_la_2 = $_POST['floorcraft_la_2'];
$timing_la_2 = $_POST['timing_la_2'];
$bodylines_la_2 = $_POST['bodylines_la_2'];
$footwork_la_2 = $_POST['footwork_la_2'];
$movement_la_2 = $_POST['movement_la_2'];
$interpretation_la_2 = $_POST['interpretation_la_2'];
$characterization_la_2 = $_POST['characterization_la_2'];
$total_f_2=$floorcraft_la_2+$timing_la_2+$bodylines_la_2+$footwork_la_2+$movement_la_2+$interpretation_la_2+$characterization_la_2;


$floorcraft_la_3 = $_POST['floorcraft_la_3'];
$timing_la_3 = $_POST['timing_la_3'];
$bodylines_la_3 = $_POST['bodylines_la_3'];
$footwork_la_3 = $_POST['footwork_la_3'];
$movement_la_3 = $_POST['movement_la_3'];
$interpretation_la_3 = $_POST['interpretation_la_3'];
$characterization_la_3 = $_POST['characterization_la_3'];
$total_f_3=$floorcraft_la_3+$timing_la_3+$bodylines_la_3+$footwork_la_3+$movement_la_3+$interpretation_la_3+$characterization_la_3;


$floorcraft_la_4 = $_POST['floorcraft_la_4'];
$timing_la_4 = $_POST['timing_la_4'];
$bodylines_la_4 = $_POST['bodylines_la_4'];
$footwork_la_4 = $_POST['footwork_la_4'];
$movement_la_4 = $_POST['movement_la_4'];
$interpretation_la_4 = $_POST['interpretation_la_4'];
$characterization_la_4 = $_POST['characterization_la_4'];
$total_f_4=$floorcraft_la_4+$timing_la_4+$bodylines_la_4+$footwork_la_4+$movement_la_4+$interpretation_la_4+$characterization_la_4;





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


 




$conn->query("insert into dancesports (floorcraft,timing,bodylines,footwork,movement,interpretation,characterization,total,couple_num,type,judge_id,ranking)
	   values('$floorcraft_ms_1','$timing_ms_1','$bodylines_ms_1','$footwork_ms_1','$movement_ms_1','$interpretation_ms_1','$characterization_ms_1','$total1','$d1','$type_ms','$judge_id','$p1_rank')");	
 
 
$conn->query("insert into dancesports (floorcraft,timing,bodylines,footwork,movement,interpretation,characterization,total,couple_num,type,judge_id,ranking)
	   values('$floorcraft_ms_2','$timing_ms_2','$bodylines_ms_2','$footwork_ms_2','$movement_ms_2','$interpretation_ms_2','$characterization_ms_2','$total2','$d2','$type_ms','$judge_id','$p2_rank')");	
 

$conn->query("insert into dancesports (floorcraft,timing,bodylines,footwork,movement,interpretation,characterization,total,couple_num,type,judge_id,ranking)
	   values('$floorcraft_ms_3','$timing_ms_3','$bodylines_ms_3','$footwork_ms_3','$movement_ms_3','$interpretation_ms_3','$characterization_ms_3','$total3','$d3','$type_ms','$judge_id','$p3_rank')");	


$conn->query("insert into dancesports (floorcraft,timing,bodylines,footwork,movement,interpretation,characterization,total,couple_num,type,judge_id,ranking)
	   values('$floorcraft_ms_4','$timing_ms_4','$bodylines_ms_4','$footwork_ms_4','$movement_ms_4','$interpretation_ms_4','$characterization_ms_4','$total4','$d4','$type_ms','$judge_id','$p4_rank')");
 

$conn->query("insert into dancesports (floorcraft,timing,bodylines,footwork,movement,interpretation,characterization,total,couple_num,type,judge_id,ranking)
	   values('$floorcraft_la_1','$timing_la_1','$bodylines_la_1','$footwork_la_1','$movement_la_1','$interpretation_la_1','$characterization_la_1','$total_f_1','$d1','$type_la','$judge_id','$fp1_rank')");	
 
 
$conn->query("insert into dancesports (floorcraft,timing,bodylines,footwork,movement,interpretation,characterization,total,couple_num,type,judge_id,ranking)
	   values('$floorcraft_la_2','$timing_la_2','$bodylines_la_2','$footwork_la_2','$movement_la_2','$interpretation_la_2','$characterization_la_2','$total_f_2','$d2','$type_la','$judge_id','$fp2_rank')");	
 

$conn->query("insert into dancesports (floorcraft,timing,bodylines,footwork,movement,interpretation,characterization,total,couple_num,type,judge_id,ranking)
	   values('$floorcraft_la_3','$timing_la_3','$bodylines_la_3','$footwork_la_3','$movement_la_3','$interpretation_la_3','$characterization_la_3','$total_f_3','$d3','$type_la','$judge_id','$fp3_rank')");	
 
 
$conn->query("insert into dancesports (floorcraft,timing,bodylines,footwork,movement,interpretation,characterization,total,couple_num,type,judge_id,ranking)
	   values('$floorcraft_la_4','$timing_la_4','$bodylines_la_4','$footwork_la_4','$movement_la_4','$interpretation_la_4','$characterization_la_4','$total_f_4','$d4','$type_la','$judge_id','$fp4_rank')");	
 
 
 $conn->query("update judges set e7_stat='$stat' where judge_id='$judge_id'");	
 
 
?>
			                                       <script>
			                                      
			      								window.location = '../home.php';
			      							    alert('Data successfully saved.');
			      														
			      								</script>
 
<?php
}
?>
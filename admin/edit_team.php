 <?php  
 include('../dbcon.php');
 $get_id=$_GET['num_id'];
 
 error_reporting(0);
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

    <title>My Messenger</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    
    
  </head>
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
              <table><tr>  <td><a href="settings.php" class="navbar-brand"> <i class="glyphicon glyphicon-chevron-left "></i>Back</a></td></tr></table> 
            </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
     
      <ul class="nav navbar-nav navbar-right">
        <li> 
        <div class="form-group">
         
        </div>
      
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
     
   
  
 
    
   
    <hr />
    
     <div class="row marketing">
        <div class="col-lg-2">
         
        </div>

        <div class="col-lg-8">
         
        
  <form method="POST" >        
          
   <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main">
          

           

         
          <div class="table-responsive">
        
            <table class="table">
             
                <tr>
                  
                  <th colspan="3">  <h1 class="text-muted">Edit Team</h1> </th>
                  
                 
                </tr>
           
         
              <tr>
<td>Grade Level</td>
<td>Team Name</td>
<td>Sequence</td>
</tr>

          <?php 	$query = $conn->query("select * from number where num_id='$get_id'") or die(mysql_error());
		while ($row = $query->fetch()) { ?>      
             
 
<input type="hidden" name="num_id" value="<?php echo $get_id; ?>" />



<tr>
<td><?php echo $row['grade_level']; ?></td>
<td><input class="form-control" type="text" name="team_name" value="<?php echo $row['team_name']; ?>" /></td>
<td>
<select name="num" class="form-control">
<option><?php echo $row['num']; ?></option>
<option>
1
</option>
<option>
2
</option>
<option>
3
</option>
<option>
4
</option>
</select>
</td>
</tr>


<tr>
<td colspan="3">
 <button class="btn btn-lg btn-success btn-block" type="submit" name="add_judge"><i class="glyphicon glyphicon-ok-circle"></i> Update Team</button> </td>
 </tr> 
          <?php } ?>
          
          
            </table>
          
          </div>
          
          
  
        </div>
 
</form>
  
          
        </div>
        <div class="col-lg-2">
         
        </div>
      </div>
 
<nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
    
        <p>&copy; Messenger 2015</p>
     
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

    <script src="../bootstrap/js/application.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

 
 <?php
if (isset($_POST['add_judge'])) 
 {
    
 $num_id=$_POST['num_id'];
  $team_name=$_POST['team_name'];
   $num=$_POST['num'];
 
 
if($password==$re_password)
{
  $conn->query("update number set team_name='$username',num='$password' where num_id='$num_id'");	
  

  ?>
			      				   
			                                       <script>
			                                      
			      								window.location = 'judges.php';
			      							    alert('Team successfully updated');
			      														
			      								</script>
			                                      <?php
}
else
{
   ?>
			      				   
			                                       <script>
			                                      
			      								window.location = 'settings.php';
			      				 
			      														
			      								</script>
			                                      <?php   
}			      
       
			      				 
                          
                                 }
				 ?>
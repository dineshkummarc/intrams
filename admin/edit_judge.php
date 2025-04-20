 <?php  
 include('../dbcon.php');
 $get_id=$_GET['judge_id'];
 
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
              <table><tr>  <td><a href="judges.php" class="navbar-brand"> <i class="glyphicon glyphicon-chevron-left "></i>Back</a></td></tr></table> 
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
              <thead>
                <tr>
                  
                  <th colspan="3">  <h1 class="text-muted">Edit Judges</h1> </th>
                  
                 
                </tr>
              </thead>
              <tbody>
          <?php 	$query = $conn->query("select * from judges where judge_id='$get_id'") or die(mysql_error());
		while ($row = $query->fetch()) { ?>      
  <tr><td colspan="3">Personal Info</td></tr>              
<tr>
<td>
<label>Firstname</label>
<input type="text" name="fname" class="form-control" placeholder="Firstname" value="<?php echo $row['fname']; ?>" required autofocus> 
</td>
<td>
<label>Middlename</label>
<input type="text" name="mname" class="form-control" placeholder="Middlename" value="<?php echo $row['mname']; ?>" required autofocus> 
</td>
<td>
<label>Lastname</label>
<input type="text" name="lname" class="form-control" placeholder="Lastname" value="<?php echo $row['lname']; ?>" required autofocus> 
</td>
</tr>
<tr><td colspan="3">Event to Judge</td></tr>
<tr>
 <td >
    <div class="input-group">
      <span class="input-group-addon">
      <?php if($row['e1']=="ok")
      {
        ?>
          <input name="e1" checked="true" value="ok" type="checkbox" aria-label="...">
        <?php
      }else{ ?>
        <input name="e1" value="ok" type="checkbox" aria-label="...">
        <?php } ?>
      </span>
      <input type="text" class="form-control" value="Declamation" aria-label="...">
    </div> 
 </td> <td>
     <div class="input-group">
     <span class="input-group-addon">
      <?php if($row['e2']=="ok")
      {
        ?>
          <input name="e2" checked="true" value="ok" type="checkbox" aria-label="...">
        <?php
      }else{ ?>
        <input name="e2" value="ok" type="checkbox" aria-label="...">
        <?php } ?>
      </span>
      <input type="text" class="form-control" value="Impromptu" aria-label="...">
    </div> 
 
     </td> <td>
     <div class="input-group">
    <span class="input-group-addon">
      <?php if($row['e3']=="ok")
      {
        ?>
          <input name="e3" checked="true" value="ok" type="checkbox" aria-label="...">
        <?php
      }else{ ?>
        <input name="e3" value="ok" type="checkbox" aria-label="...">
        <?php } ?>
      </span>
      <input type="text" class="form-control" value="Vocal Solo" aria-label="...">
    </div> 
  
    
   
 </td>
</tr>

<tr>
 <td >
    <div class="input-group">
    <span class="input-group-addon">
      <?php if($row['e4']=="ok")
      {
        ?>
          <input name="e4" checked="true" value="ok" type="checkbox" aria-label="...">
        <?php
      }else{ ?>
        <input name="e4" value="ok" type="checkbox" aria-label="...">
        <?php } ?>
      </span>
      <input type="text" class="form-control" value="Pop Song" aria-label="...">
    </div> 
 </td> <td>
     <div class="input-group">
     <span class="input-group-addon">
      <?php if($row['e5']=="ok")
      {
        ?>
          <input name="e5" checked="true" value="ok" type="checkbox" aria-label="...">
        <?php
      }else{ ?>
        <input name="e5" value="ok" type="checkbox" aria-label="...">
        <?php } ?>
      </span>
      <input type="text" class="form-control" value="Chorale"  aria-label="...">
    </div> 
 
     </td> <td>
     <div class="input-group">
     <span class="input-group-addon">
      <?php if($row['e6']=="ok")
      {
        ?>
          <input name="e6" checked="true" value="ok" type="checkbox" aria-label="...">
        <?php
      }else{ ?>
        <input name="e6" value="ok" type="checkbox" aria-label="...">
        <?php } ?>
      </span>
      <input type="text" class="form-control" value="Hip Hop" aria-label="...">
    </div> 
  
    
   
 </td>
</tr>


<tr>
 <td >
    
 </td> <td>
     <div class="input-group">
      <span class="input-group-addon">
      <?php if($row['e7']=="ok")
      {
        ?>
          <input name="e7" checked="true" value="ok" type="checkbox" aria-label="...">
        <?php
      }else{ ?>
        <input name="e7" value="ok" type="checkbox" aria-label="...">
        <?php } ?>
      </span>
      <input type="text" class="form-control" value="Dance Sports" aria-label="...">
    </div> 
 
     </td> <td>
     
 </td>
</tr>
<tr><td colspan="3">Security</td></tr>

 
<tr>
 
 <td>
<label>Username</label>
<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $row['username']; ?>" required autofocus> 
</td>
 
<td>
<label>Password</label>
<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $row['password']; ?>" required autofocus> 
</td>
<td>
<label>Re-type Password</label>
<input type="password" name="re_password" class="form-control" placeholder=" Re-type Password" value="<?php echo $row['password']; ?>" required autofocus> 
</td>
</tr>
<input type="hidden" name="judge_id" value="<?php echo $get_id; ?>" />

<tr><td colspan="3">
 
 <button class="btn btn-lg btn-success btn-block" type="submit" name="add_judge"><i class="glyphicon glyphicon-ok-circle"></i> Update Judge</button> </td></tr> 
          <?php } ?>
          
              </tbody>
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
    
 $judge_id=$_POST['judge_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];

$e1 = $_POST['e1'];
$e2 = $_POST['e2'];
$e3 = $_POST['e3'];
$e4 = $_POST['e4'];
$e5 = $_POST['e5'];
$e6 = $_POST['e6'];
$e7 = $_POST['e7'];

$stat="Undone";
$type="Judge";
 
 
if($password==$re_password)
{
  $conn->query("update judges set username='$username',password='$password',fname='$fname',mname='$mname',lname='$lname',e1='$e1',e2='$e2',e3='$e3',e4='$e4',e5='$e5',e6='$e6',e7='$e7',e1_stat='$stat',e2_stat='$stat',e3_stat='$stat',e4_stat='$stat',e5_stat='$stat',e6_stat='$stat',e7_stat='$stat',type='$type' where judge_id='$judge_id'");	
  

  ?>
			      				   
			                                       <script>
			                                      
			      								window.location = 'judges.php';
			      							    alert('Judge successfully updated');
			      														
			      								</script>
			                                      <?php
}
else
{
   ?>
			      				   
			                                       <script>
			                                      
			      								window.location = 'judges.php';
			      							    alert('Password did not match... try again.');
			      														
			      								</script>
			                                      <?php   
}			      
       
			      				 
                          
                                 }
				 ?>
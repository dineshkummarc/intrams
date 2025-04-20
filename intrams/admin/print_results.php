 <?php  include('../dbcon.php') ?>
 <?php  include('../session.php') ;?>
   
      
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





  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">

      <div class="span12">
     <table align="center" border="0">
   <tr>
   <td><img src="../images/logo.png" width="70" height="70" />
 <br /><br />
   </td>
   <td>&nbsp;</td>
   <td>
      <center>
<h4>Binalbagan Catholic College</h4>
 
<h5>High School Department</h5>
 
<h6>Binalbagan, Negros Occidental</h6>
 
</center>
</td>
   </tr>
   <tr>
   <td colspan="3">
   <center>
   <h3>Cultural Tilt 2015</h3>
 
<h4>Declamation</h4>
</center>
</td>
   </tr>
   </table>
 
     <table class="table table-striped">
   <tr><td><h4>English</h4></td></tr>
         <tr>
         <td>  
         <table class="table table-striped">
         <thead>
         <th>Judge</th>
        <th>Performer 1</th>
         <th>Performer 2</th>
          <th>Performer 3</th>
           <th>Performer 4</th>
    
         </thead>
         <tbody>
         <tr>
         <?php
 
 $de1=0;
 $de2=0;
 $de3=0;
 $de4=0;
 $judge_query = $conn->query("select * from judges where e1='ok'") or die(mysql_error());
		while ($judge_row = $judge_query->fetch())
         {
              $judge_id=$judge_row['judge_id'];
               $judge_name=$judge_row['fname']." ".$judge_row['mname']." ".$judge_row['lname'];
              ?>
              
             <td><?php echo $judge_name; ?></td>
         <?php
		
           
           $rank_query = $conn->query("select * from declamation where judge_id='$judge_id' and type='English' order by declaimer_num ASC") or die(mysql_error());
		while ($rank_row = $rank_query->fetch())
         {
            if($rank_row['declaimer_num']==1)
            {
            $de1= $de1+$rank_row['ranking'];
            }
            
            if($rank_row['declaimer_num']==2)
            {
                 $de2= $de2+$rank_row['ranking'];
            }
            
            if($rank_row['declaimer_num']==3)
            {
                 $de3= $de3+$rank_row['ranking'];
            }
            
            if($rank_row['declaimer_num']==4)
            {
                $de4= $de4+$rank_row['ranking']; 
            }
            
     ?>
  
     <td><?php echo $rank_row['ranking']; ?></td>

        <?php   } ?>
         </tr>
         <?php }  ?>
         <tr>
         <td>Total:</td>
          <td><?php echo $de1; ?></td>
           <td><?php echo $de2; ?></td>
            <td><?php echo $de3; ?></td>
             <td><?php echo $de4; ?></td>
         </tr>
     </tbody>
         </table></td>
         </tr>
         </table>
  
     <table class="table table-striped">
  <tr><td><h4>Filipino</h4></td></tr>
         <tr>
         <td>  
         <table class="table table-striped">
         <thead>
         <th>Judge</th>
        <th>Performer 1</th>
         <th>Performer 2</th>
          <th>Performer 3</th>
           <th>Performer 4</th>
    
         </thead>
         <tbody>
         <tr>
         <?php
 
 $fde1=0;
 $fde2=0;
 $fde3=0;
 $fde4=0;
 $judge_query = $conn->query("select * from judges where e1='ok'") or die(mysql_error());
		while ($judge_row = $judge_query->fetch())
         {
              $judge_id=$judge_row['judge_id'];
               $judge_name=$judge_row['fname']." ".$judge_row['mname']." ".$judge_row['lname'];
              ?>
              
             <td><?php echo $judge_name; ?></td>
         <?php
		
           
           $rank_query = $conn->query("select * from declamation where judge_id='$judge_id' and type='Filipino' order by declaimer_num ASC") or die(mysql_error());
		while ($rank_row = $rank_query->fetch())
         {
            if($rank_row['declaimer_num']==1)
            {
            $fde1= $fde1+$rank_row['ranking'];
            }
            
            if($rank_row['declaimer_num']==2)
            {
                 $fde2= $fde2+$rank_row['ranking'];
            }
            
            if($rank_row['declaimer_num']==3)
            {
                 $fde3= $fde3+$rank_row['ranking'];
            }
            
            if($rank_row['declaimer_num']==4)
            {
                $fde4= $fde4+$rank_row['ranking']; 
            }
            
     ?>
  
     <td><?php echo $rank_row['ranking']; ?></td>

        <?php   } ?>
         </tr>
         <?php }  ?>
         <tr>
         <td>Total:</td>
          <td><?php echo $fde1; ?></td>
           <td><?php echo $fde2; ?></td>
            <td><?php echo $fde3; ?></td>
             <td><?php echo $fde4; ?></td>
         </tr>
     </tbody>
         </table></td>
         </tr>
         </table>
    
    
    <br /><br /><br /><br /><br /><br /><br /><br /><br />
    
    
       <table align="center" border="0">
   <tr>
   <td><img src="../images/logo.png" width="70" height="70" />
 <br /><br />
   </td>
   <td>&nbsp;</td>
   <td>
      <center>
<h4>Binalbagan Catholic College</h4>
 
<h5>High School Department</h5>
 
<h6>Binalbagan, Negros Occidental</h6>
 
</center>
</td>
   </tr>
   <tr>
   <td colspan="3">
   <center>
   <h3>Cultural Tilt 2015</h3>
 
<h4>Impromptu Speaking</h4>
</center>
<br /><br />
</td>
   </tr>
   </table>
 
     <table class="table table-striped">
  
         <tr>
         <td>  
         <table class="table table-striped">
         <thead>
         <th>Judge</th>
        <th>Performer 1</th>
         <th>Performer 2</th>
          <th>Performer 3</th>
           <th>Performer 4</th>
    
         </thead>
         <tbody>
         <tr>
         <?php
 
 $de1=0;
 $de2=0;
 $de3=0;
 $de4=0;
 $judge_query = $conn->query("select * from judges where e2='ok'") or die(mysql_error());
		while ($judge_row = $judge_query->fetch())
         {
              $judge_id=$judge_row['judge_id'];
               $judge_name=$judge_row['fname']." ".$judge_row['mname']." ".$judge_row['lname'];
              ?>
              
             <td><?php echo $judge_name; ?></td>
         <?php
		
           
           $rank_query = $conn->query("select * from impromptu where judge_id='$judge_id' order by speaker_num ASC") or die(mysql_error());
		while ($rank_row = $rank_query->fetch())
         {
            if($rank_row['speaker_num']==1)
            {
            $de1= $de1+$rank_row['ranking'];
            }
            
            if($rank_row['speaker_num']==2)
            {
                 $de2= $de2+$rank_row['ranking'];
            }
            
            if($rank_row['speaker_num']==3)
            {
                 $de3= $de3+$rank_row['ranking'];
            }
            
            if($rank_row['speaker_num']==4)
            {
                $de4= $de4+$rank_row['ranking']; 
            }
            
     ?>
  
     <td><?php echo $rank_row['ranking']; ?></td>

        <?php   } ?>
         </tr>
         <?php }  ?>
         <tr>
         <td>Total:</td>
          <td><?php echo $de1; ?></td>
           <td><?php echo $de2; ?></td>
            <td><?php echo $de3; ?></td>
             <td><?php echo $de4; ?></td>
         </tr>
     </tbody>
         </table></td>
         </tr>
         </table>







  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    
    
       <table align="center" border="0">
   <tr>
   <td><img src="../images/logo.png" width="70" height="70" />
 <br /><br />
   </td>
   <td>&nbsp;</td>
   <td>
      <center>
<h4>Binalbagan Catholic College</h4>
 
<h5>High School Department</h5>
 
<h6>Binalbagan, Negros Occidental</h6>
 
</center>
</td>
   </tr>
   <tr>
   <td colspan="3">
   <center>
   <h3>Cultural Tilt 2015</h3>
 
<h4>Vocal Solo - Visayan Folksong</h4>
</center>
<br /><br />
</td>
   </tr>
   </table>
 
     <table class="table table-striped">
  
         <tr>
         <td>  
         <table class="table table-striped">
         <thead>
         <th>Judge</th>
        <th>Performer 1</th>
         <th>Performer 2</th>
          <th>Performer 3</th>
           <th>Performer 4</th>
    
         </thead>
         <tbody>
         <tr>
         <?php
 
 $de1=0;
 $de2=0;
 $de3=0;
 $de4=0;
 $judge_query = $conn->query("select * from judges where e3='ok'") or die(mysql_error());
		while ($judge_row = $judge_query->fetch())
         {
              $judge_id=$judge_row['judge_id'];
               $judge_name=$judge_row['fname']." ".$judge_row['mname']." ".$judge_row['lname'];
              ?>
              
             <td><?php echo $judge_name; ?></td>
         <?php
		
           
           $rank_query = $conn->query("select * from vocalsolo where judge_id='$judge_id' order by singer_num ASC") or die(mysql_error());
		while ($rank_row = $rank_query->fetch())
         {
            if($rank_row['singer_num']==1)
            {
            $de1= $de1+$rank_row['ranking'];
            }
            
            if($rank_row['singer_num']==2)
            {
                 $de2= $de2+$rank_row['ranking'];
            }
            
            if($rank_row['singer_num']==3)
            {
                 $de3= $de3+$rank_row['ranking'];
            }
            
            if($rank_row['singer_num']==4)
            {
                $de4= $de4+$rank_row['ranking']; 
            }
            
     ?>
  
     <td><?php echo $rank_row['ranking']; ?></td>

        <?php   } ?>
         </tr>
         <?php }  ?>
         <tr>
         <td>Total:</td>
          <td><?php echo $de1; ?></td>
           <td><?php echo $de2; ?></td>
            <td><?php echo $de3; ?></td>
             <td><?php echo $de4; ?></td>
         </tr>
     </tbody>
         </table></td>
         </tr>
         </table>
         
         
         
         
 
 
 
     <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    
    
       <table align="center" border="0">
   <tr>
   <td><img src="../images/logo.png" width="70" height="70" />
 <br /><br />
   </td>
   <td>&nbsp;</td>
   <td>
      <center>
<h4>Binalbagan Catholic College</h4>
 
<h5>High School Department</h5>
 
<h6>Binalbagan, Negros Occidental</h6>
 
</center>
</td>
   </tr>
   <tr>
   <td colspan="3">
   <center>
   <h3>Cultural Tilt 2015</h3>
 
<h4>Pop Song - OPM</h4>
</center>
<br /><br />
</td>
   </tr>
   </table>
 
     <table class="table table-striped">
  
         <tr>
         <td>  
         <table class="table table-striped">
         <thead>
         <th>Judge</th>
        <th>Performer 1</th>
         <th>Performer 2</th>
          <th>Performer 3</th>
           <th>Performer 4</th>
    
         </thead>
         <tbody>
         <tr>
         <?php
 
 $de1=0;
 $de2=0;
 $de3=0;
 $de4=0;
 $judge_query = $conn->query("select * from judges where e4='ok'") or die(mysql_error());
		while ($judge_row = $judge_query->fetch())
         {
              $judge_id=$judge_row['judge_id'];
               $judge_name=$judge_row['fname']." ".$judge_row['mname']." ".$judge_row['lname'];
              ?>
              
             <td><?php echo $judge_name; ?></td>
         <?php
		
           
           $rank_query = $conn->query("select * from popsong where judge_id='$judge_id' order by singer_num ASC") or die(mysql_error());
		while ($rank_row = $rank_query->fetch())
         {
            if($rank_row['singer_num']==1)
            {
            $de1= $de1+$rank_row['ranking'];
            }
            
            if($rank_row['singer_num']==2)
            {
                 $de2= $de2+$rank_row['ranking'];
            }
            
            if($rank_row['singer_num']==3)
            {
                 $de3= $de3+$rank_row['ranking'];
            }
            
            if($rank_row['singer_num']==4)
            {
                $de4= $de4+$rank_row['ranking']; 
            }
            
     ?>
  
     <td><?php echo $rank_row['ranking']; ?></td>

        <?php   } ?>
         </tr>
         <?php }  ?>
         <tr>
         <td>Total:</td>
          <td><?php echo $de1; ?></td>
           <td><?php echo $de2; ?></td>
            <td><?php echo $de3; ?></td>
             <td><?php echo $de4; ?></td>
         </tr>
     </tbody>
         </table></td>
         </tr>
         </table>
 
 
 
 
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    
    
       <table align="center" border="0">
   <tr>
   <td><img src="../images/logo.png" width="70" height="70" />
 <br /><br />
   </td>
   <td>&nbsp;</td>
   <td>
      <center>
<h4>Binalbagan Catholic College</h4>
 
<h5>High School Department</h5>
 
<h6>Binalbagan, Negros Occidental</h6>
 
</center>
</td>
   </tr>
   <tr>
   <td colspan="3">
   <center>
   <h3>Cultural Tilt 2015</h3>
 
<h4>Chorale Singing</h4>
</center>
<br /><br />
</td>
   </tr>
   </table>
 
     <table class="table table-striped">
  
         <tr>
         <td>  
         <table class="table table-striped">
         <thead>
         <th>Judge</th>
        <th>Group 1</th>
         <th>Group 2</th>
          <th>Group 3</th>
           <th>Group 4</th>
    
         </thead>
         <tbody>
         <tr>
         <?php
 
 $de1=0;
 $de2=0;
 $de3=0;
 $de4=0;
 $judge_query = $conn->query("select * from judges where e5='ok'") or die(mysql_error());
		while ($judge_row = $judge_query->fetch())
         {
              $judge_id=$judge_row['judge_id'];
               $judge_name=$judge_row['fname']." ".$judge_row['mname']." ".$judge_row['lname'];
              ?>
              
             <td><?php echo $judge_name; ?></td>
         <?php
		
           
           $rank_query = $conn->query("select * from chorale where judge_id='$judge_id' order by group_num ASC") or die(mysql_error());
		while ($rank_row = $rank_query->fetch())
         {
            if($rank_row['group_num']==1)
            {
            $de1= $de1+$rank_row['ranking'];
            }
            
            if($rank_row['group_num']==2)
            {
                 $de2= $de2+$rank_row['ranking'];
            }
            
            if($rank_row['group_num']==3)
            {
                 $de3= $de3+$rank_row['ranking'];
            }
            
            if($rank_row['group_num']==4)
            {
                $de4= $de4+$rank_row['ranking']; 
            }
            
     ?>
  
     <td><?php echo $rank_row['ranking']; ?></td>

        <?php   } ?>
         </tr>
         <?php }  ?>
         <tr>
         <td>Total:</td>
          <td><?php echo $de1; ?></td>
           <td><?php echo $de2; ?></td>
            <td><?php echo $de3; ?></td>
             <td><?php echo $de4; ?></td>
         </tr>
     </tbody>
         </table></td>
         </tr>
         </table>

         
        
  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    
    
       <table align="center" border="0">
   <tr>
   <td><img src="../images/logo.png" width="70" height="70" />
 <br /><br />
   </td>
   <td>&nbsp;</td>
   <td>
      <center>
<h4>Binalbagan Catholic College</h4>
 
<h5>High School Department</h5>
 
<h6>Binalbagan, Negros Occidental</h6>
 
</center>
</td>
   </tr>
   <tr>
   <td colspan="3">
   <center>
   <h3>Cultural Tilt 2015</h3>
 
<h4>Hip-Hop Dance</h4>
</center>
<br /><br />
</td>
   </tr>
   </table>
 
     <table class="table table-striped">
  
         <tr>
         <td>  
         <table class="table table-striped">
         <thead>
         <th>Judge</th>
        <th>Group 1</th>
         <th>Group 2</th>
          <th>Group 3</th>
           <th>Group 4</th>
    
         </thead>
         <tbody>
         <tr>
         <?php
 
 $de1=0;
 $de2=0;
 $de3=0;
 $de4=0;
 $judge_query = $conn->query("select * from judges where e6='ok'") or die(mysql_error());
		while ($judge_row = $judge_query->fetch())
         {
              $judge_id=$judge_row['judge_id'];
               $judge_name=$judge_row['fname']." ".$judge_row['mname']." ".$judge_row['lname'];
              ?>
              
             <td><?php echo $judge_name; ?></td>
         <?php
		
           
           $rank_query = $conn->query("select * from hiphop where judge_id='$judge_id' order by group_num ASC") or die(mysql_error());
		while ($rank_row = $rank_query->fetch())
         {
            if($rank_row['group_num']==1)
            {
            $de1= $de1+$rank_row['ranking'];
            }
            
            if($rank_row['group_num']==2)
            {
                 $de2= $de2+$rank_row['ranking'];
            }
            
            if($rank_row['group_num']==3)
            {
                 $de3= $de3+$rank_row['ranking'];
            }
            
            if($rank_row['group_num']==4)
            {
                $de4= $de4+$rank_row['ranking']; 
            }
            
     ?>
  
     <td><?php echo $rank_row['ranking']; ?></td>

        <?php   } ?>
         </tr>
         <?php }  ?>
         <tr>
         <td>Total:</td>
          <td><?php echo $de1; ?></td>
           <td><?php echo $de2; ?></td>
            <td><?php echo $de3; ?></td>
             <td><?php echo $de4; ?></td>
         </tr>
     </tbody>
         </table></td>
         </tr>
         </table>


<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    

   <table align="center" border="0">
   <tr>
   <td><img src="../images/logo.png" width="70" height="70" />
 <br /><br />
   </td>
   <td>&nbsp;</td>
   <td>
      <center>
<h4>Binalbagan Catholic College</h4>
 
<h5>High School Department</h5>
 
<h6>Binalbagan, Negros Occidental</h6>
 
</center>
</td>
   </tr>
   <tr>
   <td colspan="3">
   <center>
   <h3>Cultural Tilt 2015</h3>
 
<h4>Dance Sports</h4>
</center>
</td>
   </tr>
   </table>
 
     <table class="table table-striped">
   <tr><td><h4>Modern Standard</h4></td></tr>
         <tr>
         <td>  
         <table class="table table-striped">
         <thead>
         <th>Judge</th>
        <th>Couple 1</th>
         <th>Couple 2</th>
          <th>Couple 3</th>
           <th>Couple 4</th>
    
         </thead>
         <tbody>
         <tr>
         <?php
 
 $de1=0;
 $de2=0;
 $de3=0;
 $de4=0;
 $judge_query = $conn->query("select * from judges where e7='ok'") or die(mysql_error());
		while ($judge_row = $judge_query->fetch())
         {
              $judge_id=$judge_row['judge_id'];
               $judge_name=$judge_row['fname']." ".$judge_row['mname']." ".$judge_row['lname'];
              ?>
              
             <td><?php echo $judge_name; ?></td>
         <?php
		
           
           $rank_query = $conn->query("select * from dancesports where judge_id='$judge_id' and type='Modern Standard' order by couple_num ASC") or die(mysql_error());
		while ($rank_row = $rank_query->fetch())
         {
            if($rank_row['couple_num']==1)
            {
            $de1= $de1+$rank_row['ranking'];
            }
            
            if($rank_row['couple_num']==2)
            {
                 $de2= $de2+$rank_row['ranking'];
            }
            
            if($rank_row['couple_num']==3)
            {
                 $de3= $de3+$rank_row['ranking'];
            }
            
            if($rank_row['couple_num']==4)
            {
                $de4= $de4+$rank_row['ranking']; 
            }
            
     ?>
  
     <td><?php echo $rank_row['ranking']; ?></td>

        <?php   } ?>
         </tr>
         <?php }  ?>
         <tr>
         <td>Total:</td>
          <td><?php echo $de1; ?></td>
           <td><?php echo $de2; ?></td>
            <td><?php echo $de3; ?></td>
             <td><?php echo $de4; ?></td>
         </tr>
     </tbody>
         </table></td>
         </tr>
         </table>
  
     <table class="table table-striped">
  <tr><td><h4>Latin American</h4></td></tr>
         <tr>
         <td>  
         <table class="table table-striped">
         <thead>
         <th>Judge</th>
        <th>Couple 1</th>
         <th>Couple 2</th>
          <th>Couple 3</th>
           <th>Couple 4</th>
    
         </thead>
         <tbody>
         <tr>
         <?php
 
 $fde1=0;
 $fde2=0;
 $fde3=0;
 $fde4=0;
 $judge_query = $conn->query("select * from judges where e7='ok'") or die(mysql_error());
		while ($judge_row = $judge_query->fetch())
         {
              $judge_id=$judge_row['judge_id'];
               $judge_name=$judge_row['fname']." ".$judge_row['mname']." ".$judge_row['lname'];
              ?>
              
             <td><?php echo $judge_name; ?></td>
         <?php
		
           
           $rank_query = $conn->query("select * from dancesports where judge_id='$judge_id' and type='Latin American' order by couple_num ASC") or die(mysql_error());
		while ($rank_row = $rank_query->fetch())
         {
            if($rank_row['couple_num']==1)
            {
            $fde1= $fde1+$rank_row['ranking'];
            }
            
            if($rank_row['couple_num']==2)
            {
                 $fde2= $fde2+$rank_row['ranking'];
            }
            
            if($rank_row['couple_num']==3)
            {
                 $fde3= $fde3+$rank_row['ranking'];
            }
            
            if($rank_row['couple_num']==4)
            {
                $fde4= $fde4+$rank_row['ranking']; 
            }
            
     ?>
  
     <td><?php echo $rank_row['ranking']; ?></td>

        <?php   } ?>
         </tr>
         <?php }  ?>
         <tr>
         <td>Total:</td>
          <td><?php echo $fde1; ?></td>
           <td><?php echo $fde2; ?></td>
            <td><?php echo $fde3; ?></td>
             <td><?php echo $fde4; ?></td>
         </tr>
     </tbody>
         </table></td>
         </tr>
         </table>
       
      </div>
    </div>

  </div>

 

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

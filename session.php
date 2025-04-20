<?php
//Start session
 session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || ($_SESSION['id'] == '')) { ?>
  	<script>
								window.location = 'index.php';
							</script><?php
    exit();
}


$session_id=$_SESSION['id'];

date_default_timezone_set('Asia/Manila');  

$user_query = $conn->query("select * from judges where judge_id = '$session_id'");

$user_row = $user_query->fetch();

$fullname = $user_row['fname']." ".$user_row['mname']." ".$user_row['lname'] ;
 
?>
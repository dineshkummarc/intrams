 
 
<?php
 include('../dbcon.php');
 $get_id=$_GET['judge_id'];
 
 error_reporting(0);
            
								$conn->query("delete from judges where judge_id='$get_id'");
					 
						 	?>
                            
							<script>
                          alert('Judge successfully removed');
								window.location = 'judges.php';
							</script>	
				 
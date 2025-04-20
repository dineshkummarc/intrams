<?php
		include('dbcon.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		/* student */
			$query = $conn->query("SELECT * FROM judges WHERE username='$username' AND password='$password'");
			$row = $query->fetch();
			$num_row = $query->rowcount();
		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['judge_id'];
         
	 
        ?>	<script>
        window.location = 'home.php';
							</script><?php	
		}else{ 
			?>	<script>
              alert('Username and Password did not Match');
								window.location = 'index.php';
							</script><?php	
		}	
				
		?>
        
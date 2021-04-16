<?php
   	
	// Database connection
	$conn = mysqli_connect('localhost','root','','BankingSysteam');
	if($conn){
		?>
		<script >
			alert('connection successful')
		</script>

		<?php 		
	} else {

		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
		
	}
?>
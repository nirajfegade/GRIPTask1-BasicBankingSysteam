<?php
   	$transfrom=$_POST['transfrom'];
	$transto=$_POST['transto'];
	$amt=$_POST['amt'];

	// Database connection
	$conn = new mysqli('localhost','root','','BankingSysteam');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("UPDATE customer SET balance=?+balance where name=?");
		$stmt->bind_param("is",$amt,$transto);
		$execval = $stmt->execute();
		echo $execval;
		echo "Transaction successfully...";
		$stmt->close();


		$stmt1 = $conn->prepare("UPDATE customer SET balance=balance-? where name=?");
		$stmt1->bind_param("is",$amt,$transfrom);
		$execval = $stmt1->execute();
		echo $execval;
		echo "Transaction successfully...";
		$stmt1->close();

		$stmt2 = $conn->prepare("insert into Transfer(transferfrom,transferto,amount) values(?,?,?)");
		$stmt2->bind_param("ssi",$transfrom,$transto,$amt);
		$execval = $stmt2->execute();
		echo $execval;
		echo "Transaction successfully...";
		$stmt2->close();

		$conn->close();
		header('location:page1.php');
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="all.css" /> 
        <style type="text/css" >
    	table{
    		border-collapse: collapse;
    		width: 80%;
    		color: #2bab0d;
    		font-family: Times New Roman;
    		font-size: 25px;
    		text-align: left;
    	
    	}
    	th
    	{
    		background-color: #2bab0d;
    		color: white;
    	}
    	td
    	{
    		background-color:  #e3eaa7;
    		color:  green;
    	
    	}
    </style> 
    </head>
    <title>Page (Home)</title>
    
     
    <body>
        <header>
            <b>Basic Banking Systeam</b>
        </header>
        <div class="menu-bar">
        <ul>
            <li class="active" ><a href="page1.php">Home</a></li>
            <li><a href="page2.php">Contact</a></li>
            <li><a href="">About</a></li>
        </ul>

        <pre>


        <table>
        	<tr>
        		<th>Customer Id</th>
        		<th>Name</th>
        		<th>Balance</th>
                <th>Email</th>
        	</tr>

       


    <?php
  
	// Database connection
	$conn = new mysqli('localhost','root','','BankingSysteam');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {

		$sql="SELECT cust_id,name,balance,email from customer";
		$result=$conn -> query($sql);

		if ($result -> num_rows > 0) {
			while ($row=$result -> fetch_assoc()) {
				echo "<tr><td>".$row["cust_id"]."</td><td>".$row["name"]."</td><td>".$row["balance"]."</td><td>".$row["email"]."</td></tr>";
				# code...
			}
			echo "</table>";
		}
		else{
			echo "0 result";
		}

		$conn->close();
		
	}
?>
 </table>


</pre>


           
        
    
    <footer>Developed By </footer>
     <footer>Niraj Fegade</footer>
    </body>
</html> 





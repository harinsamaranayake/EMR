
 <?php
	include("config.php");

	$error = "";
	if ($_SERVER["REQUEST_METHOD"]=="POST") {

	$nic = $_POST["nic"];
	$password = $_POST["password"];




	$sql = "SELECT login_id FROM log WHERE nic='$nic' AND password='$password' ";

	$results = $conn->query($sql);
	$count = mysqli_num_rows($results);
	 if ($count==1) {
		$_SESSION['valid']=true;
		$_SESSION['timeout']=time();
		$_SESSION['nic']=$nic;
		$_SESSION['password']=$password;
		header("location: about us.html");
	}else{
		$error = "Incorrect User Name or Password!";
		echo "Incorrect NIC or Password";
	 }  
	}	
?>


<html>
	<head>
		<title>User Login</title>	
		<link rel="stylesheet" href="CSS/login.css">	
	</head>

	<body>
		<!-- icon-->
		
			<div align="center";	class="div1">
				<img src="icon/ic_emr.png" alt="icon" width="70px" height="70px">
			</div>
		
			<div class="login">
				<form action="Login.php" method="post">
					
					<h1 align="center">Customer Login</h1>

					
						<p>
							<input type="text" name="nic" placeholder="NIC" required>
						</p>

						<p>
							<input type="password" name="password" placeholder="password" required>

						</p>
						

						<p>
							<button type="submit" name="submit">Login</button>

						</p>
				</form>
			</div>
	</body>
</html>

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

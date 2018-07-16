<?php
  
// Start the session
session_start();


	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "krishidost";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$cusername = $_POST['cuname'];
$cpassword = $_POST['cpswd'];


	$_SESSION["USER"] = $username ;
//$fpassword=md5($fpassword);

	$sql = "SELECT c_password FROM company WHERE c_username='$cusername'";
	$result = $conn->query($sql);
	
	if ($result->num_rows>0) {
		$row = $result->fetch_assoc();
		if($row["c_password"] == $cpassword)
		{
			
			header("location:Equipcompany.html");
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("Invalid credentials. Try Again");';
			echo 'window.location.href="clogin.html";';
			echo '</script>'; 
		}
	}


  //	$password = md5($password);
 /* 	$query = "SELECT * FROM farmers WHERE F_username='$username' AND F_password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  header('location: welcome.php');
  	}else {
  		echo '<script language="javascript">';
			echo 'alert("Invalid credentials. Try Again");';
			echo 'window.location.href="login.php";';
			echo '</script>'; 
  	}
  
	*/
	

	
$conn->close();
?>
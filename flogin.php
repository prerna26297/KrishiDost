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
	
	$fusername = $_POST['funame'];
$fpassword = $_POST['fpswd'];


	$_SESSION["USER"] = $username ;
//$fpassword=md5($fpassword);

	$sql = "SELECT F_password FROM farmer WHERE F_username='$fusername'";
	$result = $conn->query($sql);
	
	if ($result->num_rows>0) {
		$row = $result->fetch_assoc();
		if($row["F_password"] == $fpassword)
		{
			
			header("location:Equip.html");
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("Invalid credentials. Try Again");';
			echo 'window.location.href="flogin.html";';
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
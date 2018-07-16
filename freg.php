
<?php

$fname=$_REQUEST['fname'];
$faadhar=$_REQUEST['aadhar'];
$flocation=$_REQUEST['flocation'];
$funame=$_REQUEST['user'];
$fpaswd=$_REQUEST['pass'];

$servername = "localhost";
$dbname = "krishidost";
$username="root";
$password="";

// Create connection
$conn =  mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
	echo 'conn';
    die("connection failed: " . $conn->connect_error);
} 
/*
function addNewUser($username, $password){
   global $connection;
   $password = md5($password);
   $q = "INSERT INTO ".TBL_USERS." VALUES ('$username', '$password')";
   return mysql_query($q, $connection);
}
*/
//$fpaswd=md5($fpaswd);
$sql =  "INSERT INTO `farmer`(`F_name`, `F_location`,`Aadhar card`, `F_username`,`F_password`) 
VALUES ('".$fname."','".$flocation."','".$faadhar."','".$funame."','".$fpaswd."')";

if (mysqli_query($conn,$sql)) {
	
	echo '<script language="javascript">';
echo 'alert("Your account has been created.");';
echo 'window.location.href="flogin.html";';
echo '</script>'; 
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

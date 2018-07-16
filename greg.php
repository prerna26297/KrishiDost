
<?php

$gname=$_REQUEST['gname'];
$glocation=$_REQUEST['glocation'];
$guname=$_REQUEST['user'];
$gpaswd=$_REQUEST['pass'];

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
$sql =  "INSERT INTO `gramsevak`(`G_name`, `G_location`,`G_username`,`G_password`) 
VALUES ('".$gname."','".$glocation."','".$guname."','".$gpaswd."')";

if (mysqli_query($conn,$sql)) {
	
	echo '<script language="javascript">';
echo 'alert("Your account has been created.");';
echo 'window.location.href="glogin.html";';
echo '</script>'; 
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

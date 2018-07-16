
<?php

$cname=$_REQUEST['cname'];
$ctool=$_REQUEST['ctool'];
$finaide=$_REQUEST['finaide'];
$roi=$_REQUEST['roi'];
$cuname=$_REQUEST['uname'];
$cpaswd=$_REQUEST['pass'];

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
$sql =  "INSERT INTO `company`(`company_name`, `company_tool`,`financial_aide`, `rate_of_interest`,`c_username`,`c_password`) 
VALUES ('".$cname."','".$ctool."','".$finaide."','".$roi."','".$cuname."','".$cpaswd."')";

if (mysqli_query($conn,$sql)) {
	
	echo '<script language="javascript">';
echo 'alert("Your account has been created.");';
echo 'window.location.href="clogin.html";';
echo '</script>'; 
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
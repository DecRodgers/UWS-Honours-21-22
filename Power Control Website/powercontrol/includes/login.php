<?php 
session_start();
require_once 'dbconnection.php';
// Create connection
$conf = new DBConfig;
$conn = mysqli_connect($conf->DB_HOST,$conf->DB_USER,$conf->DB_PASS,$conf->DB_NAME);

// check connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT passcodehash FROM sign_login WHERE passcodeid = 1 LIMIT 1";
$result = mysqli_query($conn, $sql) or die(mysql_error());
$db_passcode = mysqli_fetch_assoc($result);
$user_passcode = $_POST['passcode'];

if (password_verify($user_passcode, $db_passcode['passcodehash'])) {
	//login success, create session
    session_regenerate_id();
    $_SESSION['loggedin'] = TRUE;            
    header('Location: ../powercontrol.php?status=none');
} else {
    $error = 'Incorrect Passcode';
    $_SESSION["error"] = $error;
    header("location: ../index.php"); //send user back to the login page.
}

//close connection
mysqli_close($conn);
?>

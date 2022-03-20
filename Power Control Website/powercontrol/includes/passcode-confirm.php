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

$current_passcode = $_POST['currentPass'];
$new_passcode = $_POST['newPass'];
$confirm_passcode = $_POST['confirmPass'];

if($confirm_passcode  == $new_passcode) {
    $select_sql = "SELECT passcodehash FROM sign_login WHERE passcodeid = 1 LIMIT 1";
    $result = mysqli_query($conn, $select_sql) or die(mysql_error());
    $db_passcode = mysqli_fetch_assoc($result);
    if (password_verify($current_passcode, $db_passcode['passcodehash'])) {
        $update_sql = "UPDATE sign_login SET passcode = '" . $new_passcode  . "', passcodehash = '" . password_hash($new_passcode, PASSWORD_DEFAULT) . "' WHERE passcodeid = 1";
        if(mysqli_query($conn,$update_sql)){
            //$message =  '<span style="color: green">Passcode updated successfully!</span>';
            $_SESSION["message"] = '<span style="color: green">Passcode updated successfully!</span>';
            header("location: ../change-passcode.php"); //send user back 
        } else {
            $_SESSION["error"] ='<span style="color: red">Error updating passcode: ' . mysqli_error($conn) . '</span>';
            header("location: ../change-passcode.php"); //send user back
        }
    } else {
        $_SESSION["error"] = '<span style="color: red">Incorrect Current Passcode!</span>';
        header("location: ../change-passcode.php"); //send user back 
    }
} else {
    $_SESSION["error"] = '<span style="color: red">Passcodes do not match!</span>';
    header("location: ../change-passcode.php"); //send user back
}
    

//close connection
mysqli_close($conn);
?>


<?php
// Only if the user has a valid session can they access this page
session_start();
// If the user is not logged in redirect to the login page.
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>
<title>Change Passcode</title>
<?php include 'includes/header.php';?>

<body>
    <div style="
       text-align: center;
       margin: 0 auto;       
	padding-top: 80px;
    ">
       <h1>Change Passcode</h1>       
       <form action="includes/passcode-confirm.php" method="post">
		<!--  -->
		<label for="passcode">
		       <i class="fas fa-lock"></i>
		<label>
	      <input type="password" name="currentPass" placeholder="Current Passcode" id="currentpass" required><br>
	      <p></p>
              <input type="password" name="newPass" placeholder="New Passcode" id="newpass" required><br>
              <p></p>
	      <input type="password" name="confirmPass" placeholder="Confirm Passcode" id="confirmpass" required><br>
                <p></p>
		<input type="submit" class="btn btn-success" value="Change Passcode"><br>
		<?php
        // Displays message below login if passcode incorrect
		if(isset($_SESSION["message"])){
			echo $_SESSION["message"];              
		} elseif(isset($_SESSION["error"])) {
                        echo $_SESSION["error"];
               }
	       ?>  
		</form>
       </div>       
</body>

 <?php
    // destroy/unset message and error variables
    unset($_SESSION["error"]);
	unset($_SESSION["message"]);
?>



<?php include 'includes/footer.php';?>

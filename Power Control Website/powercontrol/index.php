<?php
session_start();
if ($_SESSION['loggedin'] == TRUE){    
	header("location: powercontrol.php"); //send user back to the login page.
}
?>
<title>Digital Sign Login</title>
<?php include 'includes/header.php';?>

<body>
       <div class="login" style="       
       text-align: center;       
       margin: 0 auto;
	   padding-top: 80px;
       ">
		<h1>Digital Sign Login</h1>
			<form action="includes/login.php" method="post">
				<!--  -->
				<label for="passcode">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="passcode" placeholder="Passcode" id="passcode" required><br>
                <p></p>
				<input type="submit" class="btn btn-primary" value="Login"><br>
				<?php
                    //displays message below login if passcode incorrect
		if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo ('<span style="color: red">'. $error .'</span>');
                    }
                ?>  
			</form>
       </div>
 </body>


 <?php
    //destroy/unset set variable
    unset($_SESSION["error"]);
?>

<?php include 'includes/footer.php';?>

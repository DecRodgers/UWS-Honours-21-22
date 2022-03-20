<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>
<title>Raspberry Pi Power Control</title>
<?php include 'includes/header.php';?>

<body>
       <div style="
       text-align: center;       
       margin: 0 auto;
	padding-top: 80px;
       ">
       <h1>Power Control Page</h1>
              <p></p>
              <input type="button" class="btn btn-primary" id="reboot" value="Reboot Pi" onCLick="reboot()"/>
              <input type="button" class="btn btn-danger" id="shutdown" value="Shutdown Pi" onCLick="shutdown()"/>
       </div>
       <div id="rebootMessage" style="display:none">
              <h3 style ="text-align: center;">Pi will reboot in 15 seconds.</h3>
              <h3 style ="text-align: center;">Please close this window</h3>
       </div>
       <div id="shutdownMessage" style="display:none">
              <h3 style ="text-align: center;">Pi will power off in one minute.</h3>
              <h3 style ="text-align: center;">Please close this window</h3>
       </div>
 </body>
 
 <script>  
  var x = document.getElementById("rebootMessage")
  function reboot() {         
       if (x.style.display === "none"){
              x.style.display = "block";
       } 
       window.location="powercontrol.php?status=reboot";
  }
</script>

<script>    
var z = document.getElementById("shutdownMessage")
  function shutdown() {         
       if (z.style.display === "none"){
              z.style.display = "block";
       } 
       window.location="powercontrol.php?status=shutdown";
  }
</script>    
 
<?php include 'includes/footer.php';?>

<?php  

  $status = $_GET["status"]; 
     
  function reboot(){                    
       ob_start();
       echo "<h2>Reboot: 10 Second</h2>";
       ob_flush();
       sleep(5);
       ob_end_clean();
       ob_start();
       header("location: includes/logout.php"); //send user back to the login page.
       sleep(5);
       ob_flush();
       exec("sudo shutdown -r now");
       ob_end_clean();
  }
  
  function shutdown(){                    
       ob_start();
       echo "<h2>Shutdown: 1 Minute</h2>";
       ob_flush();
       sleep(5);
       ob_end_clean();
       ob_start();
       header("location: includes/logout.php"); //send user back to the login page.
       sleep(5);
       ob_flush();
       exec("sudo shutdown -h -t 10"); 
       ob_end_clean();
       
  } 
  
  if ($status == "reboot"){ 
       sleep(5);
       reboot();
  }
  
  if ($status == "shutdown"){ 
       sleep(5);       
       shutdown();
  }  
?>  

</html>




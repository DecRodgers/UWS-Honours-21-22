<!doctype html>
<html lang="en">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- External js for hamburger menu -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<header>
       <nav class="navbar navbar-dark bg-dark">            
              <a class="navbar-brand" href="index.php" style="color:white;">Digital Sign Dashboard</a>
              <?php
              //If loggedin is true, show menu
              if ($_SESSION['loggedin'] == TRUE){            
              echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                   <i class="fas fa-bars fa-1x"></i></span></button>
       
              <div class="collapse navbar-collapse " id="navbarSupportedContent1">            
                     <ul class="navbar-nav float-right text-right pr-3 mr-auto"> <!-- Float-right to align button on the right, text-right for submenu -->
                            <li class="nav-item active">     
                                   <a class="nav-link" href="powercontrol.php">Power Control<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">     
                                   <a class="nav-link" href="change-passcode.php">Change Passcode</a>
                            </li>    
                            <li class="nav-item active">     
                                   <a class="nav-link" href="includes/logout.php">Logout</a>
                            </li>
                     </ul>
              </div>';
              }
              ?>
       </nav>   
</header>

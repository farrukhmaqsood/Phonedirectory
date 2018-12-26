<?php
session_start();

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="/Phonedirectory/Content/Profile.css" rel="stylesheet" />
    
</head>
<body>
    

    <nav class="navbar topnav">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">PHONEDIRECTORY PROJECT</a>
            </div>
            <ul class="nav navbar-nav">
            <li>
            <a href="/phonedirectory/Phonedir.php"></span> Phone Directory</a> 
            </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="/phonedirectory/Login.php"></span> Login </a> 
            </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid row-content">
        
    <div class="row">
    <div class="col-sm-offset-4 col-sm-4" style="margin-top:150px;border: 2px solid #000080;padding-bottom:20px;box-shadow: 2px 2px #39acf0;">

        <h2 class="ph ">New Registration</h2>
        <p class="text-danger">
            
        </p>
    
        <form method="Post" Action="Process.php"> 
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="confirm-password" type="password" class="form-control" name="confirm-password" placeholder="Confirm Password" required>
    </div>
<br>
    <div class="col-sm-offset-1 input-group">
      <input type="submit" class="btn btn-primary" name="signup" value="Sign Up" >
      <input type="reset" class="btn btn-primary" style="margin-left:20px;" value="Reset" >
    </div>

    

  </form>


      </div>
    </div>
        
</div>
    <!-- Footer -->
    <footer class="text-center">
        <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p>
    </footer>

</body>
</html>

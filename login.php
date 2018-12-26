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
            <a href="/phonedirectory/signup.php"></span> Sign Up</a> 
            </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid row-content">
        
    <div class="row">
      <div class="col-sm-offset-4 col-sm-4" style="margin-top:150px;border: 2px solid #000080;padding-bottom:20px;box-shadow: 2px 2px #39acf0;">
      <p class="text-danger">
<?php
session_start();
if (isset($_SESSION["msg2"])){
    echo $_SESSION["msg2"];

}

?>
</p>
        <h2 class="ph">Login</h2>

        <form method="post" action="Process.php">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="email" type="email" class="form-control" name="email" placeholder="Email">
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <br>
    
    <div class="col-sm-offset-1 input-group">
      <input type="submit" class="btn btn-primary" name="login" value="Login" >
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

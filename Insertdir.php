<?php 
session_start();
    $id = $_SESSION["user"]; 
    if($id == ""){
        header('Location: Login.php');
    }
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
              <a href="/phonedirectory/Logoff.php"></span> Logoff </a> 
            </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid row-content">
        
    <div class="row">
    <div class="col-sm-offset-4 col-sm-4" style="margin-top:150px;border: 2px solid #000080;padding-bottom:20px;box-shadow: 2px 2px #39acf0;">

        <h2 class="ph ">Insert New Number</h2>
        
    
        <form method="Post" Action="Process.php"> 
        <div class="input-group">
      <span class="input-group-addon"></span>
      <input id="phoneno" type="text" class="form-control" name="phoneno" placeholder="Phone NO" required>
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon"></span>
      <input id="name" type="text" class="form-control" name="name" placeholder="Name" required>
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon"></span>
      <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
    </div>
    <br>
    
      <input id="userid" type="hidden" name="userid" value="<?php echo $id; ?>" >
<br>
    <div class="col-sm-offset-1 input-group">
      <input type="submit" class="btn btn-primary" name="InsertNo" value="Insert" >
      <input type="reset" class="btn btn-primary" style="margin-left:20px;" value="Reset" >
    </div>

    

  </form>


      </div>
    </div>
        
</div>
    <!-- Footer -->
    <footer class="text-center">
        <p>copy@phonedir.com</a></p>
    </footer>

</body>
</html>

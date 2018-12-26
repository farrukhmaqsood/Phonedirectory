<?php 
session_start();
    $id = $_SESSION["user"]; 
    if($id == ""){
        header('Location: Login.php');
    }
    $phoneid = $_GET['pid'];
?> 

<?php 
      
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "phonedirectory";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 

      $sql = "SELECT `Id`, `PhoneNo`, `Name`, `Email`, `UserId` FROM PhoneDirectory WHERE Id = '$phoneid' ";
      
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
           $phone = $row["PhoneNo"];
           $name = $row["Name"];
           $email = $row["Email"];
           $userid = $row["UserId"];
           
            }
      }else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }


      $conn->close();

     


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

        <h3 class="text-danger">Are you sure you want to delete?</h2>
        
    
        <form method="Post" Action="Process.php"> 
        <div class="input-group">
      <span class="input-group-addon"></span>
      <input id="phoneno" type="text" class="form-control" name="phoneno" value="<?php echo $phone; ?>">
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon"></span>
      <input id="name" type="text" class="form-control" name="name" value="<?php echo $name; ?>">
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon"></span>
      <input id="email" type="email" class="form-control" name="email" value="<?php echo $email; ?>">
    </div>
    <br>
    
    <div class="input-group">
      
      <input id="userid" type="hidden" name="Id" value="<?php echo $phoneid; ?>" >
    </div>
<br>
    <div class="col-sm-offset-1 input-group">
      <input type="submit" class="btn btn-primary" name="DeleteNo" value="Delete" >
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

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
    <div class="col-sm-offset-3 col-md-6 col-sm-8" style="margin-top:150px;border: 2px solid #000080;padding-bottom:20px;box-shadow: 2px 2px #39acf0;">

        <h2 class="ph ">Phone Directory Index</h2>

        <a class="mlink" href="/phonedirectory/Insertdir.php">Insert</a> 

        <table class="table table-hover table-responsive">
    <thead>
      <tr>
        <th>#</th>
        <th>Phone No</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>User-Id</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
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

      $sql = "SELECT `Id`, `PhoneNo`, `Name`, `Email`, `UserId` FROM PhoneDirectory WHERE UserId = '$id' ";
      
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
           $id = $row["Id"];
           $phone = $row["PhoneNo"];
           $name = $row["Name"];
           $email = $row["Email"];
           $userid = $row["UserId"];
           echo "<tr>";
            
    echo  "<td>$id</td>";
    echo  "<td>$phone</td>";
    echo  "<td>$name</td>";
    echo  "<td>$email</td>";
    echo  "<td>$userid</td>";
    echo  "<td>
      <a href='/phonedirectory/Updatedir.php?pid=$id'>Update</a>
      <a href='/phonedirectory/Deletedir.php?pid=$id'>Delete</a>
      </td>";
      echo "</tr>";
            }
      }else if ($result->num_rows == 0) {
        echo "<tr> <td colspan='5'> No record available </td> </tr>";
      }else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }


      $conn->close();

     


?>
        
      
    </tbody>
  </table>
  <p class="text-danger">
  <?php
if (isset($_SESSION["msg"])){
    echo $_SESSION["msg"];

}

?>
        </p>
 

      </div>
    </div>
        
</div>
    <!-- Footer -->
    <footer class="text-center">
        <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p>
    </footer>

</body>
</html>

            


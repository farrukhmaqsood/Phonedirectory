<?php
session_start();
if (!empty($_POST['signup'])) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!empty($_POST["email"])) {
        $email = htmlspecialchars($_POST['email']);
    }
       if (!empty($_POST["password"])) {
        $inputpassword = md5(htmlspecialchars($_POST['password']));
    }
    if (!empty($_POST["confirm-password"])) {
      $cpassword = md5(htmlspecialchars($_POST['confirm-password']));
 
        

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

$sql = "SELECT `Email` FROM `users` WHERE email = '$email' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION["msg2"] = "Email already exists.";
  header('Location: login.php');
}else if ($result->num_rows == 0) {
    
    $sql = "INSERT INTO `users` (`Id`, `Email`, `Password`, `C_Password`) VALUES (NULL,'$email','$inputpassword','$cpassword')";


if ($conn->query($sql) === TRUE) {
  $_SESSION["msg2"] = "New record created successfully";
    header('Location: login.php');
}

    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();
}
}
}













if (!empty($_POST['login'])) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!empty($_POST["email"])) {
        $email = htmlspecialchars($_POST['email']);
    }
       if (!empty($_POST["password"])) {
        $inputpassword = md5(htmlspecialchars($_POST['password']));
    }
    
 
 echo "$email <br> $inputpassword";
       
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

$sql = "SELECT `Id`, `Email`, `Password`, `C_Password` FROM `users` WHERE email = '$email' && Password = '$inputpassword' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  $_SESSION["user"] = $row["Id"];
  header('Location: Phonedir.php');
  }    
}else if ($result->num_rows == 0) {
    $_SESSION["msg2"] = "Incorrect Email or Password";
    header('Location: Phonedir.php');
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
}



 




if (!empty($_POST['InsertNo'])) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    if (!empty($_POST["email"])) {
        $email = htmlspecialchars($_POST['email']);
    }
       if (!empty($_POST["name"])) {
        $name = htmlspecialchars($_POST['name']);
    }
    if (!empty($_POST["userid"])) {
      $userid = htmlspecialchars($_POST['userid']);
  }
     if (!empty($_POST["phoneno"])) {
      $phoneno = htmlspecialchars($_POST['phoneno']);
  }
    
 
 echo "$userid <br> $phoneno";
       
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

$sql = "INSERT INTO `PhoneDirectory` (`Id`, `PhoneNo`, `Name`, `Email`, `UserId`) VALUES (NULL,'$phoneno','$name','$email','$userid')";


if ($conn->query($sql) === TRUE) {
  $_SESSION["msg"] = "New record created successfully";
    header('Location: phonedir.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

}
}









if (!empty($_POST['UpdateNo'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        if (!empty($_POST["Id"])) {
            $pid = htmlspecialchars($_POST['Id']);
        }
      if (!empty($_POST["email"])) {
          $email = htmlspecialchars($_POST['email']);
      }
         if (!empty($_POST["name"])) {
          $name = htmlspecialchars($_POST['name']);
      }
       if (!empty($_POST["phoneno"])) {
        $phoneno = htmlspecialchars($_POST['phoneno']);
    }
      
   
   echo "$userid <br> $phoneno";
         
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
  
  $sql = "UPDATE PhoneDirectory SET PhoneNo='$phoneno',Name='$name',Email='$email' WHERE Id='$pid'";
 
  
  if ($conn->query($sql) === TRUE) {
    $_SESSION["msg"] = "Record updated successfully";
      header('Location: phonedir.php');
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  
  $conn->close();
  
  }
  }












  if (!empty($_POST['DeleteNo'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        if (!empty($_POST["Id"])) {
            $pid = htmlspecialchars($_POST['Id']);
        }
      
      
   
   echo "$userid <br> $phoneno";
         
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
  
  $sql = "DELETE FROM PhoneDirectory WHERE Id='$pid'";
 
  
  if ($conn->query($sql) === TRUE) {
    $_SESSION["msg"] = "Record deleted successfully";
      header('Location: phonedir.php');
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  
  $conn->close();
  
  }
  }








?>
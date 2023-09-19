<?php

$conn = new mysqli("localhost", "root", "","pronto");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];


    $stmt = $conn->prepare("SELECT * FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();


 
      
        $row = $result->fetch_assoc();

      
        if ($password == $row['password']) {
            header("location:../user.php");
            // echo "ok";
        } else {
          ?> 
          <script type="text/javascript">
              alert("invalid Username or Password");
          </script>
      <?php
        }
    } else {
      ?> 
          <script type="text/javascript">
              alert("User Exist");
          </script>
      <?php  

    }
  

      $stmt->close();
      $conn->close();

  

?>
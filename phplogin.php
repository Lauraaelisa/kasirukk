<?php
   include ('conecting.php');
   if (isset($_POST['submit'])) {
      $Username = $_POST['Username'];
      $password = $_POST['password'];
   
      $sqlquery = "SELECT * FROM register WHERE Username = '$Username' and password = '$password'";

      $result = mysqli_query($conn, $sqlquery);

      if ($result && mysqli_num_rows($result) > 0) {
            $row=mysqli_fetch_assoc($result);
            $_SESSION ['email']=$row['email'];     
         header("Location: tambahbarang.php");
      } else {
         echo"<script> 
         alert('Salah Password/username');
         window.location.href='index.php';
         </script>";
      }

      }

?>
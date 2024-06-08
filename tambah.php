 <?php
   include ('conecting.php');
   if (isset($_POST['submit'])) {
                    
      $Username = $_POST['Username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $role = $_POST['role'];

      $sqlquery = "INSERT INTO register(Username, email, password, role) 
      VALUES('$Username', '$email', '$password', '$role')";

      $result = mysqli_query($conn, $sqlquery);

      if ($result) {
         header("Location: index.php");
      } else {
         echo "Failed: " . mysqli_error($conn);
      }
            
   }
?>
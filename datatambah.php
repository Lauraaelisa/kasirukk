<?php
   include ('conecting.php');
   if (isset($_POST['submit'])) {
                    
    $namabarang = mysqli_real_escape_string($conn, $_POST['namabarang']);
    $jumlah = mysqli_real_escape_string($conn, $_POST['jumlah']);
    $subtotal = mysqli_real_escape_string($conn, $_POST['subtotal']);
    
    $sqlquery = "INSERT INTO barang(namabarang, jumlah, subtotal) 
    VALUES('$namabarang', '$jumlah', '$subtotal')";

      $result = mysqli_query($conn, $sqlquery);

      if ($result) {
         header("Location: read.php");
      } else {
         echo "Failed: " . mysqli_error($conn); 
      }
            
   }
?>
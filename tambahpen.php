<?php
   include ('conecting.php');
   if (isset($_POST['submit'])) {
                    
      $namapemesan = $_POST['namapemesan'];
      $namamenu = $_POST['namamenu'];
      $harga = $_POST['harga'];
      $jumlah = $_POST['jumlah'];

      $sqlquery = "INSERT INTO penjualan(namapemesan, namamenu, harga, jumlah) 
      VALUES('$namapemesan', '$namamenu', '$harga', '$jumlah')";

      $result = mysqli_query($conn, $sqlquery);

      if ($result) {
         header("Location: index.php");
      } else {
         echo "Failed: " . mysqli_error($conn);
      }
            
   }
?>
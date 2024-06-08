<?php

session_start();

if(isset($_SESSION['login'])){
    header('location:read.php');
    exit();
}
include "conecting.php";

if (isset($_POST["submit"])) {
   $namabarang = $_POST['namabarang'];
   $jumlah = $_POST['jumlah'];
   $subtotal = $_POST['subtotal'];

   $sql = "INSERT INTO barang(namabarang, jumlah, subtotal) 
   VALUES('$namabarang', '$jumlah', '$subtotal')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      echo "<script>
      alert('Data berhasil ditambah');
      window.location.href = 'kasir.php';
      </script>";
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Barang</title>
    <link rel="stylesheet" href="barang.css">
    </head>
    <body>
        <div class="wrap">
            <header>	
                <h1>Tambah </h1>
                <a href="home.php">Home</a></p>
                <a href="register.php">Register</a></p>
                <a href="#myModal" style="font-size:18px;" onclick="document.getElementById('myModal').style.display='block'">Log Out</a>
                <div class="menu">
            </header>
           
        <div class="container">
        <center><h1> Tambah Barang </h1> </center> <br> 
        <form action="datatambah.php" method="POST">
        <label> Nama Produk : </label><br>
        <input type ="text" name="namabarang" required><br>
        <label>Jumlah Produk :</label><br>
        <input type="text"  name="jumlah" required><br>
        <label>Sub Total :</label><br>
        <input type="text" name="subtotal"  required><br>
        </select><br>  

        <center> <button type="submit" name="submit" class="btn submit">Submit</button></center> 
        

        </form></h1>

        <!-- Modal -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
      <p>Anda Yakin Ingin Logout?</p>
      <div class="modal-buttons">
        <button class="yes" onclick="window.location.href='index.php';">Yes</button>
        <button class="no" onclick="document.getElementById('myModal').style.display='none'">No</button>
      </div>
    </div>
  </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div id="footer">
                    Copyright laura@.com
                </div>
       
	</div>
    </body>
    <script>
    function preventBack() {window.history.forward();}
       setTimeout(preventBack(), 0);
       window.onunload = function() {null};
    </script>

    </html>
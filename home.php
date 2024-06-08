<?php
session_start();

if(isset($_SESSION['login'])){
    header('location:index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="registerr.css">
    </head>
    <body>
        <div class="wrap">
            <header>	
                <h1>Home</h1>
                <a href="register.php">Register</a></p>
                <a href="penjualan.php">Kasir</a></p>
                <a href="read.php">Stok Barang</a></p>
                <a href="#myModal" style="font-size:18px;" onclick="document.getElementById('myModal').style.display='block'">Log Out</a>
                <div class="menu">
            </header>

            <div class="container">
            <center><h1> Selamat Datang Di Website Saya </h1> </center>  <br>
            <img src="tae.jpg" style="float:center;width:800px;height:500px;">

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
    </html>
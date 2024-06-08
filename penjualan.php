<?php
session_start();

if(isset($_SESSION['login'])){
    header('location:read.php');
    exit();
} 
require 'tambahpen.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>penjualan</title>
    <link rel="stylesheet" href="penjualan.css">
    </head>
    <body>
        <div class="wrap">
            <header>	
                <h1>Kasir</h1>
                <a href="home.php">Home</a></p>
                <a href="register.php">Register</a></p>
                <a href="read.php">Stok Barang</a></p>
                <a href="#myModal" style="font-size:18px;" onclick="document.getElementById('myModal').style.display='block'">Log Out</a>
                <div class="menu">
            </header>
           
        <div class="container">
        <center><h1> Kasir </h1> </center>  <br>
        <form action="tambahpen.php" method="POST">
        <label> Nama Pemesan : </label><br>
        <input type ="text" name="namapemesan" required><br>
        <label>Nama Menu :</label><br>
        <input type="text" id="namamenu" name="namamenu" required><br>
        <label>Harga :</label><br>
        <input type="text" name="harga" id="harga" required><br>
        <label for="jumlah">Jumlah :</label>
        <input type="text" name="jumlah" id="jumlah" required><br>
        </select><br>  

        <center> <button type="submit" name="submit" class="btn submit">Submit</button></center>
      
        </form></h1>
         <!-- Modal -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
      <p>Anda Yakin Ingin Logout?</p>
      <div class="modal-buttons">
        <button class="yes" onclick="window.location.href='login.php';">Yes</button>
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
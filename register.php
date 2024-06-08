<?php
session_start();

if(isset($_SESSION['login'])){
    header('location:index.php');
    exit();
}

require 'tambah.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="registerr.css">
    </head>
    <body>
        <div class="wrap">
            <header>	
                <h1>Register</h1>
                <a href="home.php">Home</a></p>
                <a href="penjualan.php">Kasir</a></p>
                <a href="read.php">Stok Barang</a></p>
                <a href="#myModal" style="font-size:18px;" onclick="document.getElementById('myModal').style.display='block'">Log Out</a>
                <div class="menu">
            </header>
           
        <div class="container">
        <center><h1> Register </h1> </center>  <br>
        <form action="tambah.php" method="POST">
        <label> User Name : </label><br>
        <input type ="text" name="Username" required><br>
        <label>Password :</label><br>
        <input type="password" id="password" name="password" required><br>
        <label>E-mail :</label><br>
        <input type="text" name="email" id="email" required><br>
        <label for="role">Role :</label>
        <select name="role" id="role" required>
        <option value="Admin">Admin</option>
        <option value="kasir">Kasir</option>  
        <option value="pelanggan">Pelanggan</option> 
        </select><br>  

        <center> <button type="submit" name="submit" class="btn submit">Submit</button></center>
        <center><p class="register"><a href="index.php">Creat Acount!!</a></p></center>

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
    </html>
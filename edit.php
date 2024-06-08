<?php
session_start();

if(isset($_SESSION['login'])){
    header('location:index.php');
    exit();
}
include "conecting.php";

$id = $_GET['id'];

if (isset($_POST["submit"])) {
  $namabarang = $_POST['namabarang'];
  $jumlah = $_POST['jumlah'];
  $subtotal = $_POST['subtotal'];
 
  $sql = "UPDATE barang
          SET `namabarang`='$namabarang',`jumlah`='$jumlah',`subtotal`='$subtotal'
          WHERE id = '$id'";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "<script>
  alert('Data berhasil diedit');
  window.location.href = 'read.php';
  </script>";
    exit();
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Edit</title>
    <link rel="stylesheet" href="edit.css">
    </head>
    <body>
        <div class="wrap">
            <header>	
                <h1>Edit</h1>
                <a href="home.php">Home</a></p>
                <a href="#myModal" style="font-size:18px;" onclick="document.getElementById('myModal').style.display='block'">Log Out</a>
      </div>
                <div class="menu">
            </header>
</head>

<body>

    <?php
    $sql = "SELECT * FROM barang WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
      <form action="" method="post">
     <center> <h2>Edit Data</h2></center><br>
        <div class="col">
          <label class="form-label">Nama Barang :</label>
          <input type="text" name="namabarang" value="<?php echo $row['namabarang'] ?>"><br><br>
      
          <label class="form-label">Jumlah :</label>
          <input type="text" name="jumlah" value="<?php echo $row['jumlah'] ?>"><br><br>
    
          <label class="form-label">Subtotal :</label>
          <input type="text" name="subtotal" value="<?php echo $row['subtotal'] ?>"><br><br>
      
          <div>
            <button type="submit" name="submit">Update</button>
           <button ><a href="read.php">Cancel</a></button>
          </div>

        </div>

      </form>
    </div>
  </div>
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

</body>

</html>
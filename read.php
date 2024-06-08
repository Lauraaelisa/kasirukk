<?php
session_start();

if(isset($_SESSION['login'])){
    header('location:index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stok</title>
  <link href="kasir.css" rel="stylesheet">
</head>

<body>

<header>
<h1>Stok Barang</h1>
      <a href="home.php">Home</a></p>
      <a href="register.php">Register</a></p>
      <a href="penjualan.php">Kasir</a></p>
      <a href="#myModal" style="font-size:18px;" onclick="document.getElementById('myModal').style.display='block'">Log Out</a>
      </div>
    </div>
  </header>


  <div class="container">
    <?php
    include "conecting.php";
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="tambahbarang.php" class="add-button">Tambah</a><br><br>

    <table>
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Subtotal</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `barang`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["namabarang"] ?></td>
            <td><?php echo $row["jumlah"] ?></td>
            <td><?php echo $row["subtotal"] ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="add-button">Edit</a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="add-button">Delete</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
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

  <div class="clear"></div>
                    <div id="footer">
                    Copyright laura@.com
                </div>
       

</body>

<script>
    function preventBack() {window.history.forward();}
       setTimeout(preventBack(), 0);
       window.onunload = function() {null};

       window.onclick = function(event) {
      var modal = document.getElementById('myModal');
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>


</html>

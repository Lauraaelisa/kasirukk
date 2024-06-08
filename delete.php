<?php
session_start();

if(isset($_SESSION['login'])){
    header('location:index.php');
    exit();
}
include "conecting.php";
$id= $_GET["id"];
$sql = "DELETE FROM barang WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
  echo "<script>
  alert('Data berhasil dihapus');
  window.location.href = 'read.php';
  </script>";
} else {
  echo "Failed: " . mysqli_error($conn);
}
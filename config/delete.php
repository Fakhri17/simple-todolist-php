<?php
  include 'koneksi.php';
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM task_list WHERE id_task = $id";
    $result = mysqli_query($conn, $query);
    if ($result) {
      header('Location: ../index.php');
    } else {
      echo "Gagal menghapus data";
    }
  }
?>
<?php
  include 'koneksi.php';
  if (isset($_POST['submit'])) {
    $id = $_POST['idTask'];
    $title = $_POST['nameTask'];
    $summary = $_POST['summary'];
    $isCompleted = $_POST['isCompleted'] == 'yes' ? 1 : 0;
    $query = "UPDATE task_list SET name_task = '$title', summary = '$summary', isCompleted = $isCompleted WHERE id_task = $id";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if ($result) {
      header('Location: ../index.php');
    }
    else{
      echo "Gagal";
    }

  }
?>
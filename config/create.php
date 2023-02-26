<?php
  include 'koneksi.php';
  if (isset($_POST['submit'])) {
    $title = $_POST['nameTask'];
    $summary = $_POST['summary'];
    $query = "INSERT INTO task_list (name_task, summary, isCompleted) VALUES ('$title', '$summary', 0)";
    $result = mysqli_query($conn, $query);
    if ($result) {
      header('Location: ../index.php');
    } else {
      echo "Gagal menambahkan data";
    }

   
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List PHP | Coder Web Dev</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <section class="my-5">
      <div class="container">
        <h1 class="mb-5">Selamat datang</h1>
        <div class="table-responsive">
          <table class="table table-bordered border-0">
            <thead>
              <tr>
                <th scope="col">Nama Task</th>
                <th scope="col">Deskripsi Singkat</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include 'config/koneksi.php';
                $query = mysqli_query($conn, "SELECT * FROM task_list");
                while($data = mysqli_fetch_array($query)){      
              ?>
              <tr>
                <?php $classCompleted = $data['isCompleted'] == 1 ? 'bg-success-subtle text-success-emphasis fw-semibold' : 'bg-danger-subtle text-danger-emphasis fw-semibold'; ?>
                <td><?php echo $data['name_task']; ?></td>
                <td><?php echo $data['summary']; ?></td>
                <td class="<?= $classCompleted ?>"><?php echo $isCompleted = $data['isCompleted'] == 1 ? 'Selesai' : 'Belum'; ?></td>
                <td>
                  <a href="edit.php?id=<?php echo $data['id_task']; ?>" class="btn btn-warning">Edit</a>
                  <a href="config/delete.php?id=<?php echo $data['id_task']; ?>" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
              <?php } ?>        
            </tbody>
          </table>
        </div>
        <a href="add.php" class="btn btn-primary">Tambah</a>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
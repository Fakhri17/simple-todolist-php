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
      <h1 class="mb-5">Edit Todo</h1>
      <?php
        include 'config/koneksi.php';
        $id = $_GET['id'];
        $query = "SELECT * FROM task_list WHERE id_task = $id";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $data = mysqli_fetch_assoc($result);
      ?>
      <form action="config/update.php" method="POST">
        <input type="hidden" name="idTask" value="<?= $data['id_task'] ?>">
        <div class="mb-3">
          <label for="nameTask" class="form-label">Nama Task</label>
          <input type="text" class="form-control" id="nameTask" name="nameTask" value="<?= $data['name_task'] ?>">
        </div>
        <div class="mb-3">
          <label for="summary" class="form-label">Deskripsi Singkat</label>
          <textarea class="form-control" id="summary" name="summary" rows="3"><?= $data['summary'] ?></textarea>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="isCompleted" id="exampleRadios1" value="no" <?php if($data['isCompleted'] == 0) echo "checked"; ?>>
          <label class="form-check-label" for="exampleRadios1">
            Belum
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="isCompleted" id="exampleRadios2" value="yes" <?php if($data['isCompleted'] == 1) echo "checked"; ?>>
          <label class="form-check-label" for="exampleRadios2">
            Selesai
          </label>
        </div>
        <div class="mt-4">
          <a href="./index.php" class="btn btn-primary">Kembali</a>
          <button type="submit" class="btn btn-success" name="submit">Submit</button>
        </div>
      </form>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
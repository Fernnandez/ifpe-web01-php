<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css" />
  <title>Table and List</title>
</head>

<body>
  <?php
  $list = file('../data/list.txt');
  $table = fopen('../data/table.csv', 'r');
  ?>

  <div class="container">
    <h1 class="title">Exercice One Web-01 List and Table</h1>

    <div class='itens'>
      <div>
        <h3 class="title">New Project</h3>
        <form action="create.php" method='POST' class='form'>
          <label for="name">Nome</label>
          <input type="text" name='name' required>
          <label for="stacks">Stacks</label>
          <input type="text" name='stacks' required>
          <label for="difficulty">Difficulty</label>
          <input type="options" name='difficulty' required>
          <label for="time">Time</label>
          <input type="text" name='time' required>
          <button>Enviar</button>
        </form>
      </div>
      <div class="table">
        <h3 class="title">Model Projects</h3>
        <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>Stacks</th>
              <th>Difficulty</th>
              <th>Time</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while (($line = fgets($table)) !== false) : ?>
              <tr>
                <?php $row = explode(',', $line) ?>
                <?php $id = array_shift($row) ?>
                <?php foreach ($row as $item) : ?>
                  <td><?= $item ?></td>
                <?php endforeach ?>
                <td>
                  <a href="./delete.php?id=<?= $id ?>">
                    <img src="./style/delete.png" alt="delete">
                  </a>
                </td>
              </tr>
            <?php endwhile ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>
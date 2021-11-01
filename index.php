<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <title>Table and List</title>
</head>
<body>
  <?php
  $list = file('list.txt');
  $table = fopen('table.csv', 'r');  
  ?>

  <div class="container">
			<h1 class="title">Exercice One Web-01 List and Table</h1>
			
      <div class='itens'>
        <div class="list">
          <h3 class="title">my study list</h3>
          <ul>
            <?php foreach($list as $data): ?>
              <li>
                <?= $data ?>
              </li>
            <?php endforeach ?>
          </ul>				  
        </div>
        <div class="table">
          <h3 class="title">model projects</h3>
          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Stacks</th>
                <th>Difficulty</th>
                <th>Time</th>
              </tr>
            </thead>
            <tbody>
              <?php while (($line = fgets($table)) !== false): ?>
                <tr>
                  <?php $row= explode(',', $line) ?>
                  <?php foreach($row as $item): ?>
                    <td><?= $item ?></td>
                <?php endforeach ?>  
                </tr>
              <?php endwhile ?>
            </tbody>
          </table>
        </div>
      </div>

   
        <form action="create.php" method='POST' class='form'>
          <label for="name">Nome</label>
          <input type="text" name='name'>
          <label for="stacks">Stacks</label>
          <input type="text" name='stacks'>
          <label for="difficulty">Difficulty</label>
          <input type="text" name='difficulty'>
          <label for="time">Time</label>
          <input type="text" name='time'>
          <button>Enviar</button>
        </form>
		</div>
</body>
</html>
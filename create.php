<?php 
$name = $_POST['name'];
$stacks = $_POST['stacks'];
$difficulty = $_POST['difficulty'];
$time = $_POST['time'];
$handleTable = fopen('table.csv', 'a');
fwrite($handleTable, "$name, $stacks, $difficulty, $time\n");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="index.php">Retornar a lista</a>
</body>
</html>
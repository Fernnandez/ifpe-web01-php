<?php
$name = $_POST['name'];
$stacks = $_POST['stacks'];
$difficulty = $_POST['difficulty'];
$time = $_POST['time'];
$key = str_replace('.', '', microtime(true));


$handleTable = fopen('../data/table.csv', 'a');
fwrite($handleTable, "$key, $name, $stacks, $difficulty, $time\n");

header('Location: index.php');

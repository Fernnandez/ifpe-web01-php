<?php

$handle = fopen('../data/table.csv', 'r');

$data = '';

while ($row = fgets($handle)) {
  $parts = explode(",", $row);

  if ($parts[0] != $_GET['id']) {
    $data .= $row;
  }
};

file_put_contents("../data/table.csv", $data);

header('Location: index.php');

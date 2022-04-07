<!DOCTYPE html>
<html lang='eng'>
<head>
  <title>Background colors</title>
  <meta charset="utf-8">
  <meta  name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    div {
      background-color: white;
      border: black thin solid;
      display: inline-block;
      padding: 5px;
    }
  </style>
</head>
<body>
  <h1>Random Dice with PHP</h1>
  <?php

    function random_dice()  {
      $i = rand(1, 6);
      echo "\t\t\t<img alt=\"dice$i\" src=\"dice/dice$i.png\" width=\"128\" height=\"128\">\n";
    }

    echo "<p>\n";
    for ($count = 1; $count <= 5; $count++) {
      random_dice();
    }
    echo "\t\t</p>\n";
  ?>
  <p><a href="javascript:window.location.reload(true)">Reload</a></p>
  </body>
  </html>

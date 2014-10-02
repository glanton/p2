<?php
  $wordList = array("Whisky", "Hotel", "Jasmine", "Train", "Pencil", "Night", "Hammock", "Shore", "Lightbulb", "Orange", "Mother", "Rice", "Sleepy", "Water", "Pillow", "Window", "Leopard", "Shoelace", "Adventure", "Pasture");
  
  if (!empty($_GET)) {
    $submitted = "submitted";
    $password = "";
    for ($i = 0; $i < $_GET["wordCount"]; $i++) {
      $password = $password . $wordList[rand(0, 19)];
    }
  }
  
  
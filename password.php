<?php
  // Okay, so I just picked these words because I liked them. Not the most secure solution once you realize there are only 52 words, but for the sake of the exercise I like the combinations these make.
  $wordList = array("Aardvark", "Adventure", "Bassoon", "Brighton", "Candid", "Cobbler", "Deep", "Dune", "Empty", "Ernie", "Fanta", "Fatal", "Gandalf", "Growing", "Hammock", "Hotel", "Iridium", "Iron", "Jasmine", "Joyce", "Known", "Knit", "Leopard", "Lightbulb", "Moor", "Mother", "Night", "Norse", "Oblong", "Orange", "Pasture", "Pillow", "Quality", "Quatrain", "Ransom", "Rice", "Shoelace", "Sleepy", "Tapestry", "Train", "Underground", "Urn", "Varnish", "Violet", "Window", "Whisky", "Xenomorph", "Xylophone", "Yellow", "Yonder", "Zambia", "Zorro");
  
  $specialCharList = array ("!", "@", "#", "$", "%", "^", "&", "*");
 
  
  // only create password if GET array is not empty
  if (!empty($_GET)) {
    $submitted = "submitted";
    $password = "";
    
    // store wordCount for quick refresh
    $wordCount = $_GET["wordCount"];
    
    // add a random word from the word list (maximum of 5 words)
    for ($i = 0; $i < $wordCount; $i++) {
      $password = $password . $wordList[rand(0, count($wordList) - 1)];
    }
    
    // add a number to the end of the passowrd
    if ($_GET["includeNumber"] == "true") {
      $password = $password . rand(0, 99);
      $includeNumber = "checked";
    }
    
    // add a special character to the end of the passowrd
    if ($_GET["includeSpecialChar"] == "true") {
      $password = $password . $specialCharList[rand(0, count($specialCharList) - 1)];
      $includeSpecialChar = "checked";
    }
    
    // use CamelCase (the word list is already formatted in CamelCase so if this isn't select switch all to lowercase)
    if ($_GET["useCamelCase"] != "true") {
      $password = strtolower($password);
    } else {
      $useCamelCase = "checked";
    }
  }
  
  
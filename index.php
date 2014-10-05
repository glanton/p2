<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>p2</title>
  <link rel="stylesheet" type="text/css" href="p2.css">
    <?php require "password.php"; ?>
</head>
<body>
  <div class="title">So, you need a new password?</div>
  <div class="content">
    <div class="section topLeft">So, you need a new password. You're in the right place, and with a little inspiration from <a target="_blank" href="http://xkcd.com/936/">the webcomic xkcd</a>, it will not only be strong, but you'll also remember it. First, some questions:<br><br>
    
    <form action="index.php" method="GET">
        <div class="question double">
          <input id="wordCount" name="wordCount" type="number" min="1" max="5" value="<?php echo $wordCount; ?>" required>
          <label for="wordCount">How many words would you like your new password to contain?</label>
        </div>
        
        <div class="question">
          <input type="checkbox" id="includeNumber" name="includeNumber" value="true" <?php echo $includeNumber; ?>>
          <label for="includeNumber">Include a number?</label>
        </div>
        
        <div class="question">
          <input type="checkbox" id="includeSpecialChar" name="includeSpecialChar" value="true" <?php echo $includeSpecialChar; ?>>
          <label for="includeSpecialChar">Include a special character?</label>
        </div>
        
        <div class="question">
          <input type="checkbox" id="useCamelCase" name="useCamelCase" value="true" <?php echo $useCamelCase; ?>>
          <label for="useCamelCase">Use CamelCase?</label>
        </div>
        
        <input id="submit" name="submit" type="submit" value="Make Password">
      </form>
    </div>
    
    <div class="section topRight">
      <a target="_blank" href="http://xkcd.com/936/">
        <img src="xkcd.png" alt="xkcd comic on password strength">
      </a>
    </div>

    <div class="section bot <?php echo $submitted; ?>"><?php echo $password; ?></div>
  </div>
  <br>
  <br>
</body>
</html>
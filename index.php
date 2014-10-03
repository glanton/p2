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
    <div class="section topLeft">So, you need a new password. You're in the right place, and with a little inspiration from <a target="_blank" href="http://xkcd.com/936/">the webcomic xkcd</a>, it will not only be strong, but you'll also remember it. To get there we need to ask you some questions:<br><br>
    
    <form action="index.php" method="GET">
        <input id="wordCount" name="wordCount"type="number"  min="1" max="5" required><label for="wordCount"> How many words would you like your password to contain?</label><br><br>
        
        <input type="checkbox" id="includeNumber" name="includeNumber" value="true"> Include a number?<br><br>
        
        <input type="checkbox" id="includeSpecialChar" name="includeSpecialChar" value="true"> Include a special character?<br><br>
        
        <input id="submit" name="submit" type="submit" value="Make Password">
      </form>
    
    </div>
    <div class="section topRight"><a target="_blank" href="http://xkcd.com/936/"><img src="xkcd.png" alt="xkcd comic on password strength"></a></div>

    <div class="section bot <?php echo $submitted; ?>"><?php echo $password; ?></div>
  </div>
  <br>
  <br>
</body>
</html>
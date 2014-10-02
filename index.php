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
        <label for="wordCount">How many words would you like your password to contain?</label><br>
        <input id="wordCount" name="wordCount"type="number"  min="1" max="5"><br><br>
        
        <label for="numberInclude">Include a number?</label><br>
        <input id="numberIncludeYes" name="numberInclude"type="radio" value="Yes">
        <label for="numberIncludeYes">Yes</label>
        <input id="numberIncludeNo" name="numberInclude"type="radio" value="No">
        <label for="numberIncludeNo">No</label><br><br>
        
        <label for="specialCharInclude">Include a special character?</label><br>
        <input id="specialCharIncludeYes" name="specialCharInclude"type="radio" value="Yes">
        <label for="specialCharIncludeYes">Yes</label>
        <input id="specialCharIncludeNo" name="specialCharInclude"type="radio" value="No">
        <label for="specialCharIncludeNo">No</label><br><br>
        
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
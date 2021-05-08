<!DOCTYPE html>
<form method="post" action=<?php echo '"'.htmlspecialchars($_SERVER["PHP_SELF"]).'"';?>>  
  Twitch Channel: <input type="text" name="name">
  <input type="submit" name="submit" value="Submit">  
</form>
<?php

$channel = htmlspecialchars($_POST["name"]);
$twitchurl = '<webview id="view" class="page" src="https://www.twitch.tv/embed/' . $channel . '/chat?parent=tpyt.uk" autosize="on"></webview>';
echo $twitchurl;
?>

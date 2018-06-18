<body>
  <p>Message sent!<p>
    <form action="index.php">
  <p><input type="submit" value="Go Back!"></p>
  </form>
<?php
$myfile = fopen("data.txt", "a") or die("Unable to open file!");
fwrite($myfile, "<br>" . $_POST["name"]);
fclose($myfile);
?>
<?php
$myfile = fopen("log.txt", "a") or die("Unable to open file!");
fwrite($myfile, "\r\n" . $_POST["name"] . " - " . $_SERVER['REMOTE_ADDR'] . " - " . $_SERVER['HTTP_X_FORWARDED_FOR'] . " - " . $_SERVER['HTTP_CLIENT_IP']);
fclose($myfile);
?>

</body>

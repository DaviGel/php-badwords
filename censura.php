<?php
  $paragraph = $_POST["paragraph"];
  $bad_word = $_POST["bad-word"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Badwords </title>
  </head>
  <body>
    <p>
      <?php
        echo $paragraph;
        echo strlen($paragraph);
      ?>
    </p>
    <p>
      <?php
        echo $new_paragraph = str_replace(strtolower($bad_word), '***', strtolower($paragraph));
        echo strlen($new_paragraph);
      ?>
    </p>
  </body>
</html>
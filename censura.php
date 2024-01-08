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
    <p><?php var_dump($paragraph); ?></p>
    <p>
      <?php var_dump(str_replace($bad_word, '***', strtolower($paragraph))); ?>
    </p>
  </body>
</html>
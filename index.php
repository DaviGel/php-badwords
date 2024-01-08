<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Badwords</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /Bootstrap -->
  </head>
  <body>
    <div class="container mt-5">
      <h1>PHP Badwords</h1>
      <form action="censura.php" method="POST">
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Paragraph</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="paragraph"></textarea>
        </div>
        <div class="mb-3">
          <label for="exampleInput" class="form-label">Bad word to censor</label>
          <input type="text" class="form-control" id="exampleInput" name="bad-word">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>
</html>
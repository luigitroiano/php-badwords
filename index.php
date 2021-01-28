<!-- PHP -->
<?php
  $name = $argv[1];
  $surname = $argv[2];
  echo "Ciao " . $name . " " . $surname;

  $name = "Luigi";
?>
<!-- /PHP -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./dist/css/app.css">
  </head>
  <body>
    <h1>Ciao <?php echo $name;?></h1>

    <!-- VueJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- JS -->
    <script src="./dist/js/app.js"></script>
  </body>
</html>
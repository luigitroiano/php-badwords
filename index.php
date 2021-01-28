<!-- PHP -->
<?php
$name = $argv[1];
$surname = $argv[2];
echo "Ciao " . $name . " " . $surname;

$name = "Luigi";

/*Istruzioni:
Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. */
$paragraph = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut obcaecati alias odio rerum quia voluptatum repudiandae commodi eos laborum inventore, iste provident ipsam dolore maxime, consequatur natus dicta culpa officia.";
$censored = $_GET["badword"];
$censored_word = str_replace($censored, "***", $paragraph);

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
  <h1>Ciao <?php echo $name; ?></h1><br>
  <h2>Paragrafo originale:</h2>
  <p><?php echo $paragraph; ?></p>
  <p>Questo paragrafo ha: <?php echo strlen($paragraph); ?> caratteri.</p>
  <h2>Paragrafo censurato:</h2>
  <p><?php echo $censored_word; ?></p>

  <!-- VueJS -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <!-- JS -->
  <script src="./dist/js/app.js"></script>
</body>

</html>
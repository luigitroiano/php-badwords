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
$censored = $_POST["badword"];
# $censored = $_GET["badword"]; da utilizzare se voglio mandare una richiesta "GET" col form
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

  <!-- Form creato con richiesta POST, a differenza di GET ci restituisce DATI direttamente nel "body" della richiesta. Ovviamente bisogna specificare l'attributo ACTION del form con il nome del file php perchè sennò non sa dove spedire i dati ottenuti, invece con GET non serve action perchè le informazioni ottenute vengono restituite direttamente nell'url della pagina. Per i form è piú utilizzato il metodo POST, in quanto ci vengono date informazioni sensibili. -->
  <h3>Insersci qui la parola che vuoi censurare dal paragrafo:</h3>
  <form action="index.php" method="post">
    <input type="text" name="badword">
    <input type="submit" value="Cliccami tutto">
  </form>

  <!-- Form creato con richiesta GET, a differenza di POST ci restituisce "query strings parameters" direttamente nell' url della pagina stessa. Di defaul il Form ha method = Get. -->
  <!-- <form action="" method="get">
    <input type="text" name="badword">
    <input type="submit" value="Cliccami tutto">
  </form> -->

  <!-- VueJS -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <!-- JS -->
  <script src="./dist/js/app.js"></script>
</body>

</html>
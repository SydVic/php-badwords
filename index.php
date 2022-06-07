<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>

  <?php 
  // la variabile contenente il paragrafo
  $paragraph = "The ice age is coming, the sun's zooming in
  Engines stop running, the wheat is growing thin
  A nuclear era, but I have no fear
  'Cause London is drowning
  I, I live by the river.";
  ?>

  <h2>Testo originale</h2>
  <p>
    <?php
    // stampa in html del paragrafo originale
    echo $paragraph;
    ?>
  </p>

  <h2>Lunghezza del testo originale</h2>
  <p>
    <?php
    // stampa in html della lunghezza del paragrafo originale
    $paragraph_length = strlen($paragraph);
    echo "Il testo originale è lungo " . $paragraph_length . " caratteri";
    ?>
  </p>

  <?php
  $user_badword = $_GET['badword'];
  ?>

  <h2>Paragrafo censurato</h2>
  <p>
    <?php
    $censored_paragraph = str_replace($user_badword, "***", $paragraph);
    echo $censored_paragraph;
    ?>
  </p>

  <h2>Lunghezza del testo censurato</h2>
  <p>
    <?php
    // stampa in html della lunghezza del paragrafo originale
    $censored_paragraph_length = strlen($censored_paragraph);
    echo "Il testo censurato è lungo " . $censored_paragraph_length . " caratteri";
    ?>
  </p>

</body>
</html>
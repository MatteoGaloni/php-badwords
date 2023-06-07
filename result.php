<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./result_style.css">
</head>

<body>
    <?php
    $paragrafo = $_GET["paragraph"];
    $stringa = $paragrafo;
    $parola_censurata = $_GET["censored_word"];

    $nuova_frase = str_ireplace($parola_censurata, "***", $paragrafo);
    ?>
    <h1>TEST PHP </h1>
    <h2>Il numero delle parole nel paragrafo è -> </h2>
    <span> <?php echo strlen($stringa) ?> </span>

    <h2>Questo è il paragrafo:</h2>
    <p><?php echo $paragrafo ?></p>


    <h2>La parola da censurare è: </h2>
    <span><?php echo $parola_censurata ?></span>

    <h2>Questo è il paragrafo censurato</h2>
    <p> <?php echo $nuova_frase ?></p>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords-form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./form_style.css">
</head>

<body>
    <div class="container">
        <form class="form-group" action="result.php" method="GET">
            <div>
                <textarea name="paragraph" id="paragraph" cols="30" rows="10" placeholder="inserisci il tuo testo qui"></textarea>
            </div>
            <div>
                <input type="text" name="censored_word" placeholder="inserisci la parola da censurare">
            </div>
            <button class="btn btn-secondary" type="submit">Invia</button>
        </form>
    </div>

</body>

</html>
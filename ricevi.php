<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>
<body>
    <?php
        $text = $_GET["textUser"];
        $badword = $_GET["badword"];

        $textFixed = str_ireplace($badword, "***", $text,);
    ?>
    <main>
        <div class="container py-3">
            <div class="row border rounded text-center p-4">
                <h4>
                    Frase Scritta
                </h4>
                <p>
                    <?php echo $text; ?>
                </p>
                <small>
                    Caratteri: <?php echo strlen( $text )?>
                </small>
                <br>

                <h4 class="mt-4">
                    Parola Censurata
                </h4>
                <p>
                    <?php echo $textFixed; ?>
                </p>
            </div>
        </div>
    </main>
</body>
</html>
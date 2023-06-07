<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>badwords</title>
</head>

<body>
    <form action="ricevo.php" method="GET">
        <div class="container d-flex flex-column align-items-center">
            <div class="w-50">
                <div class="mb-3">
                    <label for="textUser" class="form-label">Inserisci un testo con una parola da oscurare</label>
                    <textarea class="form-control" name="textUser" id="textUser" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="badword" class="form-label">Parola da Oscurare</label>
                    <input type="text" class="form-control" id="badword" name="badword" placeholder="Parola">
                </div>
            </div>
            <div>
                <button type="submit">
                    Invio
                </button>
            </div>
        </div>
    </form>
</body>

</html>
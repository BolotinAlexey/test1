<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zanówienie</title>
    <link rel="stylesheet" href="phpStyle.css">
</head>
<body>
    <header class="header">
        <h1>Zanówienie internetowe</h1>
    </header>
    <main class="main">
        <form action="zamowienie.php" class="form" method="post">
            <label>Ili cukerkov(2,99Pl/szt)
            <input type="text" name="cukerki">
            </label>
            <br><br>
            <label >Ili wafelków(5,29Pl/szt)
           <input type="text" name="wafelki">
            </label>
            <br>
            <br>
            <button class="button" type="submit">
                submit
            </button>
        </form>
    </main>
    <footer class="footer"></footer>
</body>
</html>
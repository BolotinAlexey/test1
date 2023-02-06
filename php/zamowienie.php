<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=header, initial-scale=1.0">
    <title>Podsumowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Podsumowanie zamówienia</h1>
    </header>
    <main>
        <?php
        $cukerki=$_POST['cukerki'];
        $wafelki=$_POST['wafelki'];
        $suma=2.99*$cukerki+5.29*$wafelki;
        echo<<<END

        <table class="table" border="1" cellspacing="0">
            <tr class="row">
                <td class="item">Cukerki(2,99Pl/szt)</td>
                <td class="item">$cukerki</td>
            </tr>
            <tr class="row">
                <td class="item">Wafelek(5,29Pl/szt)</td>
                <td class="item">$wafelki</td>
            </tr>
            <tr class="row">
                <td class="item">SUMA</td>
                <td class="item">$suma</td>
            </tr>
        </table>
        
        <a href="index.php">Powrót do strony głównoi</a>
    </main>
    <footer></footer>
    END;
    ?>
</body>
</html>
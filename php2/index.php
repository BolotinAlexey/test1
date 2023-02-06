<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td,th{
            border:solid 1px #000;
            padding:10px;
            background-color: yellow;

        }
        th{
            background-color: blue;
            color:white;

        }
        
    </style>
</head>
<body>

    <?php
    $polanczenie=mysqli_connect('localhost','root','','ogoloshenia');
    $ex=mysqli_query($polanczenie,"SELECT * FROM ogloszenie");
    if($ex->num_rows >0){
        echo "<table>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>tytul</th>";
        echo "<th>tresc</th";
        echo "</tr>";

        while ($i=$ex->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $i['id'] . "</td>";
            echo "<td>" . $i['tytul'] . "</td>";
            echo "<td>" . $i['tresc'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
        else
        {
            echo "Nie ma nic w baze danych";
        }
        
        mysqli_close($polanczenie);
    ?>

</body>
</html>
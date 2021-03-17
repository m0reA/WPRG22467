<!doctype html>
<html>
    <head>
        <title>Moja strona</title>
    </head>
    <body>
        <h1>Strona domowa</h1>
        <p>Strona domowa - Andrei Novikov</p>
        <?php
$pesel = "9 2 0 4 1 7 4 1 1 1 2";
$chechnia = explode(" ",$pesel);


echo "day".$chechnia[4].$chechnia[5];
echo "month".$chechnia[2].$chechnia[3];
echo "year".$chechnia[0].$chechnia[1];


        ?>
    </body>
</html>

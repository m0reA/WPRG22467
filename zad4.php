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
$c = explode(" ",$pesel);


echo "day".$c[4].$c[5];
echo "month".$c[2].$c[3];
echo "year".$c[0].$c[1];


?>
</body>
</html>








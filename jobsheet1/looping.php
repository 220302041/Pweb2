<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>

<body>
    <?php
    echo "Perulangan FOR bilangan genap dari 1 hingga  10 </br>";
    for ($x = 2; $x <= 10; $x += 2)
        echo "$x </br>";
    echo "</br>Perulangan WHILE  bilangan ganjil dari 1 hingga  10 </br>";
    $y = 1;
    while ($y <= 10) {
        echo "$y </br>";
        $y += 2;
    }
    echo "</br> Perulangan DO WHILE menampilkan bilangan prima kurang dari 20 </br>";
    $x = 0;
    $y = 2;
    do {
        $z = 0;
        for ($i = 1; $i <= $y; $i++) {
            if (($y % $i) == 0) {
                $z++;
            }
        }
        if ($z < 3) {
            echo "$y </br>";
            $x = $x + 1;
        }
        $y = $y + 1;
    } while ($x < 8);


    ?>
</body>

</html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>

<body>
    <?php
    $nilai = $_POST['nilai'];
    $nilai = $nilai . " ";
    if ($nilai > 0) {
        echo "$nilai adalah Bilangan Positif </br>";
    } else if ($nilai < 0) {
        echo "$nilai adalah Bilangan Negatif </br>";
    } else {
        echo "$nilai adalah Bilangan Nol </br>";
        echo "<br>";
    }
    ?>
    <form method="POST">

        Masukan nilai =
        <input type="text" name="nilai" value="<?php echo $nilai; ?>" /><br />
        <input type="submit" name="submit" value="SUBMIT" /><br /><br />
    </form>
</body>

</html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>

<body>
    <h2>Form Hitung Luas Persegi Panjang Dan Lingkaran Dengan PHP</h2>
    <h3>Isi Data:</h3>
    <form action="" method="POST">
        <label for="panjang">Persegi Panjang dan Lingkaran</br></label>
        <br>
        <table>
            <tr>
                <td>Panjang</td>
                <td>:</td>
                <td><input type="text" name="panjang" required></td>
            </tr>
            <tr>
                <td>Lebar</td>
                <td>:</td>
                <td><input type="text" name="lebar" required></td>
            </tr>
            <tr>
                <td>Lingkaran</td>
                <td>:</td>
                <td><input type="text" name="lingkaran" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>

    <?php
    function persegi_panjang($panjang, $lebar)
    {
        return $panjang * $lebar;
    }
    function lingkaran($r)
    {
        return 3.15 * $r * $r;
    }
    ?>
    <?php
    if (isset($_POST['submit'])) {
        $panjang    = $_POST['panjang'];
        $lebar        = $_POST['lebar'];
        $r        = $_POST['lingkaran'];

        // menghitung luas persegi panjang
        $luas_persegi_panjang = $panjang * $lebar;
        // menghitung keliling persegi panjang
        $keliling_persegi_panjang = 2 * ($panjang + $lebar);
        $luas_lingkaran = 3.14 * $r * $r;

        echo "Hasil hitung luas persegi panjang dan lingkaran adalah sebagai berikut:<br />";
        echo "Diketahui;<br />";
        echo "Panjang = $panjang<br />";
        echo "Lebar = $lebar<br />";
        echo "Lingkaran = $r<br/>";
        echo "<br>";
        echo "Maka luas persegi panjang sama dengan [ $panjang x $lebar ] = $luas_persegi_panjang<br />";

        echo "Maka keliling persegi panjang sama dengan [ 2 x ($panjang + $lebar) ] = $keliling_persegi_panjang<br/>";
        
        echo "Maka luas lingkaran sama dengan [ 3.14*$r*$r] = $luas_lingkaran<br />";
    }
    ?>

</body>

</html>
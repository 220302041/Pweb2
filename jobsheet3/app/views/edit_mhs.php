<?php
include '../classes/database.php';
$db = new database();
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div class="px-5 mb-4 mt-4">
    <h3>Edit Data Mahasiswa</h3>
    <a class="btn btn-primary"href="tampil_mhs.php ?id=<?php echo $x['id']; ?>&aksi=kembali">Kembali</a>
   
    <form action="proses_mhs.php?aksi=update" method="post">

        <?php
        foreach ($db->edit($_GET['id']) as $d) {
        ?>

            <table>

                <tr>
                    <td class="form-label ">Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                        <input class="form-control mt-4" type="text" name="nama" value="<?php echo $d['nama'] ?>">
                    </td>
                </tr>
                <tr>
                    <td class="form-label ">NIM</td>
                    <td><input class="form-control mt-4" type="text" name="nim" value="<?php echo $d['nim'] ?>"></td>
                </tr>
                <tr>
                    <td class="form-label ">Alamat</td>
                    <td><input class="form-control mt-4" type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input class="btn btn-success " type="submit" value="Simpan">
                    </td>
                </tr>
            </table>
        <?php
        }
        ?>

</div>
</form>
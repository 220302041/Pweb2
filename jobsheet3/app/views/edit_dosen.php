<?php
include '../classes/database.php';
$db = new database();
?>


<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div class="px-5 mb-4 mt-4">
    <h3>Edit Data Dosen</h3>
    <a class="btn btn-primary"href="tampil_dosen.php ?id=<?php echo $x['id']; ?>&aksi=kembali">Kembali</a>    
    <form action="proses_dosen.php?aksi=update" method="post">
        <?php
        foreach ($db->edit_dosen($_GET['id']) as $d) {
        ?>
            <table>

                <tr>
                    <td class="form-label mt-4">NIDN</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                        <input class="form-control mt-4" type="text" name="nidn" value="<?php echo $d['nidn'] ?>">
                    </td>
                </tr>
                <tr>
                    <td class="form-label mt-4">Nama</td>
                    <td><input class="form-control mt-4" type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
                </tr>
                <tr>
                    <td class="form-label mt-4">Tempat Lahir</td>
                    <td><input class="form-control mt-4" type="text" name="tempat_lahir" value="<?php echo $d['tempat_lahir'] ?>"></td>
                </tr>
                <tr>
                    <td class="form-label mt-4">Tanggal Lahir</td>
                    <td><input class="form-control mt-4" type="text" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir'] ?>"></td>
                </tr>
                <tr>
                    <td class="form-label mt-4">Jenis Kelamin</td>
                    <td><input class="form-control mt-4" type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin'] ?>"></td>
                </tr>
                <tr>
                    <td class="form-label mt-4">Agama</td>
                    <td><input class="form-control mt-4" type="text" name="agama" value="<?php echo $d['agama'] ?>"></td>
                </tr>
                <tr>
                    <td class="form-label mt-4">Alamat</td>
                    <td><input class="form-control mt-4" type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input class="btn btn-success mt-4" type="submit" value="Simpan">
                    </td>
                </tr>
            </table>
        <?php
        }
        ?>

</div>
</form>
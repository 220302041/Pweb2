<?php
include '../classes/database.php';
$db = new database();
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div class="px-5 mb-4 mt-4">
    <h3>Tambah Data Mahasiswa</h3>
    <a class="btn btn-primary" href="tampil_mhs.php ?id=<?php echo $x['id']; ?>&aksi=kembali">Kembali</a>
    <form action="proses_mhs.php?aksi=tambah" method="post">
        <table>

            <tr>
                <td class="form-label mt-4">Nama</td>
                <td><input class="form-control mt-4" type="text" name="nama"></td>
            </tr>
            <tr>
                <td class="form-label mt-4">NIM</td>
                <td><input class="form-control mt-4" type="text" name="nim"></td>
            </tr>
            <tr>
                <td class="form-label mt-4">Alamat</td>
                <td><textarea class="form-control mt-4" type="text" name="alamat"></textarea></td>
            </tr>
            <tr>
                    <td></td>
                    <td>
                        <input class="btn btn-success " type="submit" value="Simpan">
                    </td>
                </tr>
        </table>
</div>
</form>
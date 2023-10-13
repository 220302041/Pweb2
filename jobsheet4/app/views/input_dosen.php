<?php
include '../classes/database.php';
$db = new database();
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div class="px-5 mb-4 mt-4">
    <h3>Tambah Data Dosen</h3>
    <a class="btn btn-primary" href="tampil_dosen.php ?id=<?php echo $x['id']; ?>&aksi=kembali">Kembali</a>
    <form action="proses_dosen.php?aksi=tambah" method="post">
        <table>
            <tr>
                <td class="form-label mt-4">NIDN</td>
                <td><input class="form-control mt-4" type="text" name="nidn"></td>
            </tr>

            <tr>
                <td class="form-label mt-4">Nama</td>
                <td><input class="form-control mt-4" type="text" name="nama"></td>
            </tr>
            <tr>
                <td class="form-label mt-4">Tempat lahir</td>
                <td><input class="form-control mt-4" type="text" name="tempat_lahir"></td>
            </tr>
            <tr>
                <td class="form-label mt-4">Tanggal Lahir</td>
                <td><input class="form-control mt-4" type="date" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td class="form-label mt-4">Jenis Kelamin</td>
                <td><input class="form-control mt-4" type="text" name="jenis_kelamin"></td>
            </tr>
            <tr>
                <td class="form-label mt-4">Agama</td>
                <td><input class="form-control mt-4" type="text" name="agama"></td>
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
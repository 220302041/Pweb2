<?php
//memanggil class database
include '../classes/database.php';
//instansiasi class database
$db = new database;
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div class="px-4 py-4 mb-5">
    <nav class="navbar navbar-expand-lg bg-primary">


        <div class="container-fluid">
            <a class="navbar-brand" href="#">SIAKAD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        
                        <a class="nav-link active" aria-current="page" href="tampil_mhs.php">Home</a>
                       
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_mhs.php">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_dosen.php">Dosen</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- alert -->
    <?php
    if (isset($_GET['pesan']) && $_GET['pesan'] == 'berhasil') {
    ?>
        <div class="alert alert-success mx-auto text-center" style="width:20%" role="alert">
            Data <a href="#" class="alert-link">BERHASIL</a> Di tambahkan
        </div>
    <?php
        header("refresh:2,url=tampil_dosen.php");
    } else if (isset($_GET['pesan']) && $_GET['pesan'] == 'sukses') {
    ?>
        <div class="alert alert-success mx-auto text-center" style="width:15%" role="alert">
            Data <a href="#" class="alert-link">BERHASIL</a> Di edit
        </div>
    <?php
        header("refresh:2,url=tampil_dosen.php");
    }
    if (isset($_GET['pesan']) && $_GET['pesan'] == 'done') {
    ?>
        <div class="alert alert-success mx-auto text-center" style="width:18%" role="alert">
            Data <a href="#" class="alert-link">BERHASIL</a> Di hapus
        </div>
    <?php
        header("refresh:2,url=tampil_dosen.php");
    }
    ?>
   <div class="px-4 py-4 mb-5">
        <h3>Data Dosen</h3>
        <a class="btn btn-outline-primary mb-4 mt-4" href="input_dosen.php">Tambah Dosen</a>
        <br>
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
            foreach ($db->tampil_dosen() as $x) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $x['nidn'] ?></td>
                    <td><?php echo $x['nama'] ?></td>
                    <td><?php echo $x['tempat_lahir'] ?></td>
                    <td><?php echo $x['tanggal_lahir'] ?></td>
                    <td><?php echo $x['jenis_kelamin'] ?></td>
                    <td><?php echo $x['agama'] ?></td>
                    <td><?php echo $x['alamat'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="edit_dosen.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                        <a class="btn btn-danger" href="proses_dosen.php ?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>

        </table>
<?php
include '../classes/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_dosen($_POST['nidn'], $_POST['nama'], $_POST['tempat_lahir'], $_POST['tanggal_lahir'], $_POST['jenis_kelamin'], $_POST['agama'], $_POST['alamat']);
    header("location:tampil_dosen.php?pesan=berhasil");
} elseif ($aksi == "update") {
    $db->update_dosen($_POST['id'], $_POST['nidn'], $_POST['nama'], $_POST['tempat_lahir'], $_POST['tanggal_lahir'], $_POST['jenis_kelamin'], $_POST['agama'], $_POST['alamat']);
    header("location:tampil_dosen.php?pesan=sukses&id=" . $_POST['id']);
} elseif ($aksi == "hapus") {
    $db->hapus_dosen($_GET['id']);
    header("location:tampil_dosen.php?pesan=done&id=" . $_POST['id']);
}

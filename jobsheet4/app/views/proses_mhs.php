<?php
include '../classes/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_mahasiswa($_POST['nama'], $_POST['nim'], $_POST['alamat']);
    header("location:tampil_mhs.php?pesan=berhasil");
} elseif ($aksi == "update") {
    $db->update($_POST['id'], $_POST['nama'], $_POST['nim'], $_POST['alamat']);
    header("location:tampil_mhs.php?pesan=sukses&id=" . $_POST['id']);
} elseif ($aksi == "hapus") {
    $db->hapus($_GET['id']);
    header("location:tampil_mhs.php?pesan=done&id=" . $_POST['id']);
}

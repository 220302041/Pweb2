<?php

class manusia
{
    public $nama_saya;

    function panggil_nama($saya)
    {
        $this->nama_saya = $saya;
    }
}
//class turunan atau sub class dari class manusia
class mahasiswa extends manusia
{
    public $nama_mahasiswa;
    private $tgl_lahir;
    protected $alamat;
    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }
}
//instansiasi class mahasiswa
$informatika = new mahasiswa();

$informatika->panggil_nama("Refina");
$informatika->panggil_mahasiswa("Putri");

//tampilkan isi property
echo "Nama Depan Saya : " . $informatika->nama_saya . "</br>";
echo "Nama Belakang : " . $informatika->nama_mahasiswa;

// TUGAS INHERITANCE //

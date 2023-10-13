<?php

class manusia
{
    public $nama_saya;

    function __construct()
    {
        echo "Saya Mahasiswa Teknik Informatika </br>";
    }


    function __destruct()
    {
        echo "Politeknik Negeri Cilacap";
    }

    public function setPanggil_nama($saya)
    {
        $this->nama_saya = $saya;
    }

    public function getPanggil_nama(): string
    {
        return $this->nama_saya;
    }
}
//class turunan atau sub class dari class manusia
class mahasiswa extends manusia
{
    //property yang dapat diakses dari class turunan
    private $tgl_lahir;
    protected $alamat;
    function __construct()
    {
        echo "Saya Mahasiswa Teknik Informatika </br>";
    }


    function __destruct()
    {
        echo "Politeknik Negeri Cilacap";
    }



    public function setTampilkan_tgllahir($mahasiswa)
    {
        $this->tgl_lahir = $mahasiswa;
    }

    public function getTampilkan_tgllahir(): string
    {
        return $this->tgl_lahir;
    }

    public function setTampilkan_alamat($mahasiswa)
    {
        $this->alamat = $mahasiswa;
    }

    public function getTampilkan_alamat(): string
    {
        return $this->alamat;
    }
}
//instansiasi class mahasiswa
$informatika = new mahasiswa();
$informatika->setPanggil_nama("Refina Inayatul Putri ");
$informatika->setTampilkan_tgllahir("25-11-2004");
$informatika->setTampilkan_alamat("Jalan Tancang");


echo "Nama saya " . $informatika->getPanggil_nama() . "<br>";
echo " Saya lahir tanggal " . $informatika->getTampilkan_tgllahir() . "<br>";
echo "Alamat rumah saya di " . $informatika->getTampilkan_alamat() . "<br>";

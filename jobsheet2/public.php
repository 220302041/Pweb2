<?php
//membuat class mahasiswa
class mahasiswa
{
    //property public
    public $nama;
    private $nim="08110737";

    //public method
    function tampilkan_nama(){
        //nilai kembalian
        return "Nama Saya Refina </br>";
    }
    //membuat pri
    function tampilkan_nim()
    {
        return "NIM saya " .$this->nim;
    }
}
//instruksi objek mahasiswa kedalam variabel $mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();

//memanggil method tampilkan_nama dan nim
echo $mahasiswa->tampilkan_nama();
echo $nim->tampilkan_nim();
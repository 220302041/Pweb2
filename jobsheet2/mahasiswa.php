<?php

//membuat class
class mahasiswa
{
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;

    //method untuk menampilkan nim
    function tampil_nim()
    {
        //isi method
        return "NIM Saya adalah 220302041</br>";
    }

    //method untuk menampilkan nama
    function tampil_nama()
    {
        //isi method
        return "Nama Saya adalah Refina</br>";
    }

    //method untuk menampilkan alamat
    function tampil_alamat()
    {
        //isi method
        return "Alamat Saya adalah di jalan Tancang</br></br>";
    }
}


//membuat objek nama_mahasiswa
$nim_mahasiswa = new mahasiswa();
$nama_mahasiswa = new mahasiswa();
$alamat_mahasiswa = new mahasiswa();
//menampilkan objek ke layar
echo $nim_mahasiswa->tampil_nim();
echo $nama_mahasiswa->tampil_nama();
echo $alamat_mahasiswa->tampil_alamat();

// TUGAS DOSEN //

class Dosen
{
    var $nidn;
    var $nama;
    var $prodi;

    //method untuk menampilkan nidn
    function tampil_nidn()
    {
        //isi method
        return "NIDN Saya adalah 220302041 </br>";
    }

    //method untuk menampilkan alamat
    function tampil_nama()
    {
        //isi method
        return "Nama Saya adalah Refina Inayatul Putri </br>";
    }

    function tampil_prodi()
    {
        //isi method
        return "Prodi Saya adalah D3-Teknik Informatika";
    }
}

//membuat objek nidn
$nidn_dosen = new Dosen();

//menampilkan objek ke layar
echo $nidn_dosen->tampil_nidn();

//membuat objek nama
$nama_dosen = new Dosen();

//menampilkan objek ke layar
echo $nama_dosen->tampil_nama();

//membuat objek prodi
$prodi_dosen = new Dosen();

//menampilkan objek ke layar
echo $prodi_dosen->tampil_prodi();

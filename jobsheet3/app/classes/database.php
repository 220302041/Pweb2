<?php

class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    function tampil_mahasiswa()
    {
        $data = mysqli_query($this->koneksi, "select * from mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_mhs($nama, $nim, $alamat)
    {
        mysqli_query($this->koneksi, "insert into mahasiswa (nama,nim,alamat) values('$nama','$nim','$alamat')");
    }

    function edit($id)
    {
        $data = mysqli_query($this->koneksi,"select *from mahasiswa where id='$id'");
        while ($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function update($id, $nim, $nama, $alamat){
        mysqli_query($this->koneksi,"update mahasiswa set nama='$nama', nim='$nim',alamat='$alamat' where id='$id',");
    }
}
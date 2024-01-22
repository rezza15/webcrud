<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "kampus";

    $konek = mysqli_connect($host,$user,$pass); //koneksi ke sqlnya
    if (!$konek) {
        die("gagal koneksi...");
    }

    $pilihDB = mysqli_select_db($konek,$dbName); //pilih database
    if (!$pilihDB) {
        $pilihDB = mysqli_query($konek,"CREATE DATABASE $dbName"); //buat database
        if (!$pilihDB) {
            die("gagal buat database...");
        }else {
            $pilihDB = mysqli_select_db($konek,$dbName); //pilih database
            if (!$pilihDB) {
                die("gagal koneksi ke database...");
            }
        }
    }

    $sqlTabelMahasiswa = "create table if not exists mahasiswa (
                            idMahasiswa int auto_increment not null primary key,
                            nim char(9) not null,
                            nama varchar(30) not null,
                            email varchar(30),
                            jurusan enum ('TI','SI','TK','MI','KA') not null,
                            jenjang enum ('D3','S1','S2') not null,
                            jenis_kelamin enum ('laki-laki','perempuan') not null,
                            kota_asal varchar(30) not null,
                            KEY(nim))";
    mysqli_query($konek,$sqlTabelMahasiswa) or die("gagal buat tabel Mahasiswa."); //membuat tabel mahasiswa
?>
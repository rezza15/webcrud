<?php
error_reporting (E_ALL ^ E_NOTICE);
require 'createdb.php';

$connect = mysqli_connect($host, $user, $pass, $dbName);

function query($query) {
    global $connect;
    $jadi = mysqli_query($connect, $query);
    return $jadi;
}

function query_getData($query){
    global $connect;
    $select = mysqli_query($connect, $query); //select * data
    $view = [];
    while ( $row = mysqli_fetch_assoc($select)) {
        $view[] = $row;
    }
    return $view; 
}

function tambah($data){
    global $connect;
    $nim = $data["nim"];
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = $data["jurusan"];
    $jenjang = $data["jenjang"];
    $jenis_kelamin = $data["jenis_kelamin"];
    $kota_asal = htmlspecialchars($data["kota_asal"]);

    $nimCheck = query("SELECT nim FROM mahasiswa WHERE nim = '$nim'");
    if (mysqli_fetch_assoc($nimCheck)) {
        echo "<script>
            alert('NIM sudah ada!');
            </script>";
            return false;
    }

    mysqli_query($connect,"INSERT INTO mahasiswa VALUES
        ('', '$nim', '$nama', '$email', '$jurusan', '$jenjang', '$jenis_kelamin',
        '$kota_asal')");

    return mysqli_affected_rows($connect);
}

function update($data){
    global $connect;

    $id = $data["id"];
    $nim = $data["nim"];
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = $data["jurusan"];
    $jenjang = $data["jenjang"];
    $jenis_kelamin = $data["jenis_kelamin"];
    $kota_asal = htmlspecialchars($data["kota_asal"]);

    mysqli_query($connect, "UPDATE mahasiswa SET nim ='$nim',
            nama = '$nama', email = '$email', jurusan = '$jurusan',
            jenjang = '$jenjang', jenis_kelamin = '$jenis_kelamin',
            kota_asal = '$kota_asal' WHERE idMahasiswa = $id");
    
    return mysqli_affected_rows($connect);
}

function delete($data){
    global $connect;
    $id = $data;
    mysqli_query($connect,"DELETE FROM mahasiswa WHERE idMahasiswa = $data");
    return mysqli_affected_rows($connect);
}
?>

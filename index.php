<?php
require 'functions.php';

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('Data berhasil ditambah! ☺');
        document.location.href= 'index.php';
        </script>";
    }else {
        echo "<script>
        alert('Data Gagal Ditambahkan!');
        document.location.href= 'index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
    <style>
    body,html {
        background-image: url("pb.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: white;
        height: 100%;
        margin-top: 35px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#option" aria-controls="option"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="option">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="dataMhs.php">Daftar Mahasiswa<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" style="height: 100%;" align="center">
        <table border="0" style="width: 50%;">
            <thead style="height: 5%" align="center">
                <tr style="height: 10%">
                    <td>
                        <h2 style="font-family: 'Lucida Sans'">Tambah data</h2>
                    </td>
                </tr>
            </thead>
            <tbody align="center">
                <tr style="height: 70%">
                    <td>
                        <form method="post" action="" align="left" style="width: 80%; padding: 20px; border: 0px solid #f1f1f1; background-color: rgba(0, 0, 51, 0.2);">
                            <div class="form-group">
                                <input type="number" class="form-control" id="nim" name="nim" placeholder="NIM" required>
                                <small id="nimHelp" class="form-text">Masukan NIM.</small>
                            </div>
                            <div class="form-group">
                                <input type="namespace" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                                <small id="nameHelp" class="form-text">Nama lengkap mahasiswa.</small>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                <small id="emailHelp" class="form-text">Masukan email Mahasiswa.</small>
                            </div>
                            <div class="form-group">
                                <select id="jurusan" class="form-control" name="jurusan" required>
                                    <option>Jurusan</option>
                                    <option value="TI">TI</option>
                                    <option value="SI">SI</option>
                                    <option value="TK">TK</option>
                                    <option value="MI">MI</option>
                                    <option value="KA">KA</option>
                                </select>
                                <small id="GenderHelp" class="form-text">Pilih Jurusan.</small>
                            </div>
                            <div class="form-group">
                                <select id="jenjang" class="form-control" name="jenjang" required>
                                    <option>Jenjang</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                </select>
                                <small id="GenderHelp" class="form-text">Pilih Jenjang.</small>
                            </div>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary">
                                    <input type="radio" value="laki-laki" name="jenis_kelamin" required> Laki-laki
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" value="perempuan" name="jenis_kelamin" required> Perempuan
                                </label>
                            </div><br />
                            <small id="GenderHelp" class="form-text">Pilih Jenis Kelamin Anda.</small>
                            <br />
                            <input type="text" class="form-control" id="kota_asal" name="kota_asal" placeholder="Kota Asal" required>
                            <small id="kota_asalHelp" class="form-text">Masukan asal kota kelahiran.</small>
                            <br />
                            </div>
                            <div align="right">
                                <button type="submit" class="btn btn-dark" name="submit">Tambah Data</button>
                            </div>
                        </form>
                    </td>
                </tr>
            <tr>
                <td></td>
            </tr>
            </tbody>
            <tfoot style="height: 5%;" align="center">
                <tr>
                    <td style="font-family: 'Courier New', Courier, monospace; font-size: 8pt; padding-top: 10px">Januari 2024</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
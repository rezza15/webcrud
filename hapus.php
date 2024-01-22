<?php
require 'functions.php';

$idM = $_GET["id"];
if ($uu = delete($idM) > 0) {
    echo "<script>
        alert('Data berhasil dihapus! ☺');
        document.location.href= 'dataMhs.php';
        </script>";
}else {
    echo "<script>
        alert('Data gagal dihapus!');
        document.location.href= 'dataMhs.php';
        </script>";
}
        //document.location.href= 'dataMhs.php';
?>

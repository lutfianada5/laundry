<?php
    
    include '../koneksi.php';

    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "INSERT INTO pelanggan VALUES('', '$nama', '$hp', '$alamat')");

    echo "<script type='text/javascript'>
        alert('Data Berhasil ditambah');
        window.location.href='pelanggan.php';
      </script>";
?>
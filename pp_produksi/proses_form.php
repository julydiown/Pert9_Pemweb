<?php

include("config.php");

if(isset($_POST['submit'])){

 
    $nama_pemilik = $_POST['nama_pemilik'];
    $nama_pelabuhan = $_POST['nama_pelabuhan'];
    $jenis_ikan = $_POST['jenis_ikan'];
    $volume_jual = $_POST['volume_jual'];
    $volume_tidakjual = $_POST['volume_tidakjual'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO produksi (nama_pemilik, nama_pelabuhan, jenis_ikan, volume_jual, volume_tidakjual, harga) VALUE ('$nama_pemilik', '$nama_pelabuhan', '$jenis_ikan', '$volume_jual', '$volume_tidakjual', '$harga')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
<?php

include("config.php");


if(isset($_POST['simpan'])){


    $nama_pemilik = $_POST['nama_pemilik'];
    $nama_pelabuhan = $_POST['nama_pelabuhan'];
    $jenis_ikan = $_POST['jenis_ikan'];
    $volume_jual = $_POST['volume_jual'];
    $volume_tidakjual = $_POST['volume_tidakjual'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO produksi (nama_pemilik, nama_pelabuhan, jenis_ikan, volume_jual, volume_tidakjual, harga) VALUE ('$nama_pemilik', '$nama_pelabuhan', '$jenis_ikan', '$volume_jual', '$volume_tidakjual', '$harga')";
   
    $sql = "UPDATE produksi SET nama_pemilik='$nama_pemilik', nama_pelabuhan='$nama_pelabuhan', jenis_ikan='$jenis_ikan', volume_jual='$volume_jual', volume_tidakjual='$volume_tidakjual,  harga='$harga' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: baca.php');
    } else {

        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
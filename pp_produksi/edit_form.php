<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: baca.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM produksi WHERE id=$id";
$query = mysqli_query($db, $sql);
$pp = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Produksi Perikanan</title>
</head>

<body>
    <header>
        <h3>Formulir Edit  Produksi Perikanan</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $pp['id'] ?>" />

        <p>
            <label for="nama">Nama Pemilik: </label>
            <input type="text" name="nama_pemilik" placeholder="nama pemilik" value="<?php echo $pp['nama_pemilik'] ?>" />
        </p>
        <p>
        <label for="nama">Nama Pelabuhan: </label>
            <input type="text" name="nama_pelabuhan" placeholder="nama pelabuhan" value="<?php echo $pp['nama_pelabuhan'] ?>" />
        </p>
        <p>
			<label for="jenis_ikan">Jenis Ikan: </label>
			<input type="text" name="jenis_ikan" placeholder="jenis ikan" value="<?php echo $pp['jenis_ikan'] ?>"/>
		</p>
		<p>
			<label for="volume_jual">Volume Terjual (kg): </label>
			<input type="number" name="volume_jual" value="<?php echo $pp['volume_jual'] ?>"/>
		</p>
		<p>
        <label for="volume_tidakjual">Volume Tidak Terjual (kg): </label>
			<input type="number" name="volume_tidakjual" value="<?php echo $pp['volume_tidakjual'] ?>"/>
		</p>
		<p>
        <label for="harga">Harga (rp): </label>
			<input type="number" name="harga" value="<?php echo $pp['harga'] ?>" />
		</p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>
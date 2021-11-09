<!DOCTYPE html>
<html>
<head>
	<title>Formulir Produksi Pelabuhan Perikanan</title>
</head>

<body>
	<header>
		<h3>Formulir Produksi Perikanan</h3>
	</header>
	
	<form action="proses_form.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="nama_pemilik">Nama Pemilik: </label>
			<input type="text" name="nama_pemilik" placeholder="nama pemilik" />
		</p>
        <p>
			<label for="nama_pelabuhan">Nama Pelabuhan: </label>
			<input type="text" name="nama_pelabuhan" placeholder="nama pelabuhan" />
		</p>
		<p>
			<label for="jenis_ikan">Jenis Ikan: </label>
			<input type="text" name="jenis_ikan" placeholder="jenis ikan" />
		</p>
		<p>
			<label for="volume_jual">Volume Terjual (kg): </label>
			<input type="number" name="volume_jual" />
		</p>
		<p>
        <label for="volume_tidakjual">Volume Tidak Terjual (kg): </label>
			<input type="number" name="volume_tidakjual" />
		</p>
		<p>
        <label for="harga">Harga (rp): </label>
			<input type="number" name="harga" />
		</p>
		<p>
			<input type="submit" value="submit" name="submit" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Baca Data Produksi Pelabuhan Perikanan</title>
</head>

<body>
    <header>
        <h3>Baca Data Produksi Pelabuhan Perikanan</h3>
    </header>

    <nav>
        <a href="form.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pemilik</th>
            <th>Nama Pelabuhan</th>
            <th>Jenis Ikan</th>
            <th>Volume Terjual (kg)</th>
            <th>Volume Tidak Terjual (kg)</th>
            <th>Harga</th>
            <th>Tindakan</th>

        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM produksi";
        $query = mysqli_query($db, $sql);

        while($pp = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$pp['id']."</td>";
            echo "<td>".$pp['nama_pemilik']."</td>";
            echo "<td>".$pp['nama_pelabuhan']."</td>";
            echo "<td>".$pp['jenis_ikan']."</td>";
            echo "<td>".$pp['volume_jual']."</td>";
            echo "<td>".$pp['volume_tidakjual']."</td>";
            echo "<td>".$pp['harga']."</td>";

            echo "<td>";
            echo "<a href='edit_form.php?id=".$pp['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$pp['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>
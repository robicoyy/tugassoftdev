<?php
require '../functions.php';

$transaksi = query("SELECT * FROM transaksi");

if( isset($_POST["submit"]) ) {
	if( tambah_transaksi($_POST) > 0 ) {
		echo "
			<script>
				alert('DATA BERHASIL DITAMBAHKAN!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('DATA GAGAL DITAMBAHKAN!');
				document.location.href = 'index.php';
			</script>
		";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../w3.css">
    <link rel="stylesheet" href="../style.css">
    <title>CRUD | Data Transaksi</title>
</head>

<body>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large w3-red" onclick="w3_close()">Close &times;</button>
        <a href="../siswa/index.php" class="w3-bar-item w3-button">Siswa</a>
        <a href="../dosen/index.php" class="w3-bar-item w3-button">Dosen</a>
        <a href="../matakuliah/index.php" class="w3-bar-item w3-button">Matakuliah</a>
        <a href="../transaksi/index.php" class="w3-bar-item w3-button">Transaksi</a>
        <a href="../ruang/index.php" class="w3-bar-item w3-button">Ruang</a>
    </div>

    <div id="main">

        <div class="w3-teal">
            <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
            <div class="w3-container">
                <h1>Form Transaksi</h1>
            </div>
        </div>

        <div class="w3-container">
            <form action="" method="POST" id="myFormId">
                <div>
                    <div>
                        <label for="nim">NIM</label>
                        <input type="text" id="nim" name="NIM" value="" required>
                    </div>
                    <div>
                        <label for="nip">NIP</label>
                        <input type="text" id="nip" name="NIP" value="" required>
                    </div>
                    <div>
                        <label for="kodemk">Kode MK</label>
                        <input type="text" id="kodemk" name="KODEMK" value="" required>
                    </div>
                    <div class="button">
                        <button class="submit" type="submit" name="submit">Submit</button>
                        <button class="reset" type="reset" name="reset">Reset</button>
                    </div>
                </div>
            </form>

            <h3 class="h3-data">Data Transaksi</h3>
            <table>
                <thead>
                    <tr>
                        <th class="number">No.</th>
                        <th>NIM</th>
                        <th>NIP</th>
                        <th>Kode MK</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($transaksi as $row) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row["NIM"]; ?></td>
                        <td><?= $row["NIP"]; ?></td>
                        <td><?= $row["KODEMK"]; ?></td>
                        <td class="btn-link">
                            <button class="submit"><a href="edit.php?id=<?= $row["id"]; ?>">Edit</a></button>
                            <button class="reset"><a href="delete.php?id=<?= $row["id"]; ?>"  onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Delete</a></button>
                        </td>
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

    <script>
        function w3_open() {
            document.getElementById("main").style.marginLeft = "25%";
            document.getElementById("mySidebar").style.width = "25%";
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("openNav").style.display = 'none';
        }
        function w3_close() {
            document.getElementById("main").style.marginLeft = "0%";
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("openNav").style.display = "inline-block";
        }
    </script>

</body>

</html>
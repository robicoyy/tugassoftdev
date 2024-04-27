<?php
require '../functions.php';

$id = $_GET["id"];

$transaksi = query("SELECT * FROM transaksi WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {
	if( ubah_transaksi($_POST) > 0 ) {
		echo "
			<script>
				alert('DATA BERHASIL DIUBAH!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('DATA GAGAL DIUBAH!');
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
    <title>CRUD | Edit Transaksi</title>
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
                <h1>Form Edit Transaksi</h1>
            </div>
        </div>

        <div class="w3-container">
            <form action="" method="POST" id="myFormId">
                <div>
                    <input type="hidden" name="id" value="<?= $transaksi["id"]; ?>">
                    <div>
                        <label for="nim">NIM</label>
                        <input type="text" id="nim" name="NIM" value="<?= $transaksi["NIM"]; ?>" required>
                    </div>
                    <div>
                        <label for="nip">NIP</label>
                        <input type="text" id="nip" name="NIP" value="<?= $transaksi["NIP"]; ?>" required>
                    </div>
                    <div>
                        <label for="kodemk">KODEMK</label>
                        <input type="text" id="kodemk" name="KODEMK" value="<?= $transaksi["KODEMK"]; ?>" required>
                    </div>
                    <div class="button">
                        <button class="submit" type="submit" name="submit">Ubah Data</button>
                    </div>
                </div>
            </form>
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
<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "baak_pens_2");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

// Manipulasi Tabel Siswa
function tambah_siswa($data) {
	global $conn;

	$nim = htmlspecialchars($data["NIM"]);
	$nama = htmlspecialchars($data["NAMA"]);
	$alamat = htmlspecialchars($data["ALAMAT"]);
	$kota = htmlspecialchars($data["KOTA"]);

    $query = "INSERT INTO siswa VALUES ('$nim', '$nama', '$alamat', '$kota')";

    mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah_siswa($data) {
	global $conn;

	$nim = htmlspecialchars($data["NIM"]);
	$nama = htmlspecialchars($data["NAMA"]);
	$alamat = htmlspecialchars($data["ALAMAT"]);
	$kota = htmlspecialchars($data["KOTA"]);

	$query = "UPDATE siswa SET
				NIM = '$nim',
				NAMA = '$nama',
				ALAMAT = '$alamat',
				KOTA = '$kota'
			  WHERE NIM = $nim
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus_siswa($nim) {
	global $conn;
	mysqli_query($conn, "DELETE FROM siswa WHERE NIM = '$nim'");
	return mysqli_affected_rows($conn);
}

// Manipulasi Tabel Dosen
function tambah_dosen($data) {
	global $conn;

	$nip = htmlspecialchars($data["NIP"]);
	$nama = htmlspecialchars($data["NAMA"]);
	$alamat = htmlspecialchars($data["ALAMAT"]);
	$kota = htmlspecialchars($data["KOTA"]);
	$email = htmlspecialchars($data["EMAIL"]);
	$nohp = htmlspecialchars($data["NOHP"]);

    $query = "INSERT INTO dosen VALUES ('$nip', '$nama', '$alamat', '$kota', '$email', '$nohp')";

    mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah_dosen($data) {
	global $conn;

	$nip = htmlspecialchars($data["NIP"]);
	$nama = htmlspecialchars($data["NAMA"]);
	$alamat = htmlspecialchars($data["ALAMAT"]);
	$kota = htmlspecialchars($data["KOTA"]);
	$email = htmlspecialchars($data["EMAIL"]);
	$nohp = htmlspecialchars($data["NOHP"]);

	$query = "UPDATE dosen SET
				NIP = '$nip',
				NAMA = '$nama',
				ALAMAT = '$alamat',
				KOTA = '$kota',
				EMAIL = '$email',
				NOHP = '$nohp'
			  WHERE NIP = $nip
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus_dosen($nip) {
	global $conn;
	mysqli_query($conn, "DELETE FROM dosen WHERE NIP = '$nip'");
	return mysqli_affected_rows($conn);
}

// Manipulasi Tabel Matakuliah
function tambah_matakuliah($data) {
	global $conn;

	$kodemk = htmlspecialchars($data["KODEMK"]);
	$nmmatkul = htmlspecialchars($data["NMMATKUL"]);
	$sks = htmlspecialchars($data["SKS"]);
	$jam = htmlspecialchars($data["JAM"]);
	$ruang = htmlspecialchars($data["RUANG"]);

    $query = "INSERT INTO matakuliah VALUES ('$kodemk', '$nmmatkul', '$sks', '$jam', '$ruang')";

    mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah_matakuliah($data) {
	global $conn;

	$kodemk = htmlspecialchars($data["KODEMK"]);
	$nmmatkul = htmlspecialchars($data["NMMATKUL"]);
	$sks = htmlspecialchars($data["SKS"]);
	$jam = htmlspecialchars($data["JAM"]);
	$ruang = htmlspecialchars($data["RUANG"]);

	$query = "UPDATE matakuliah SET
				KODEMK = '$kodemk',
				NMMATKUL = '$nmmatkul',
				SKS = '$sks',
				JAM = '$jam',
				RUANG = '$ruang'
			  WHERE KODEMK = $kodemk
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus_matakuliah($kodemk) {
	global $conn;
	mysqli_query($conn, "DELETE FROM matakuliah WHERE KODEMK = '$kodemk'");
	return mysqli_affected_rows($conn);
}

?>

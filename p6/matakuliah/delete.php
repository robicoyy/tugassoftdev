<?php
require '../functions.php';

$kodemk = $_GET["KODEMK"];

if( hapus_matakuliah($kodemk) > 0 ) {
	echo "
		<script>
			alert('DATA BERHASIL DIHAPUS!');
			document.location.href = 'index.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('DATA GAGAL DIHAPUS!');
			document.location.href = 'index.php';
		</script>
	";
}
?>
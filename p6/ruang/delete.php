<?php
require '../functions.php';

$id = $_GET["id"];

if( hapus_ruang($id) > 0 ) {
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
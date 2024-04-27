<?php
require '../functions.php';

$nim = $_GET["NIM"];

if( hapus_siswa($nim) > 0 ) {
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
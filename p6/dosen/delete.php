<?php
require '../functions.php';

$nip = $_GET["NIP"];

if( hapus_dosen($nip) > 0 ) {
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
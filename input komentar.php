<?php
include "koneksi.php";

if (isset($_POST['tambah'])) {
	$nama = addslashes($_POST['nama']);
	$komentar = addslashes($_POST['komen']);
	$tanggal = gmdate("d/m/Y", time() + 60 * 60 * 7);
	$post = $_POST['tambah'];
	$as = mysqli_query($koneksi, "insert into komen values ('','$nama','$komentar','$tanggal')");
	if ($as) {
?>
		<script>
			document.location = "index.php";
		</script>
	<?php
	} else {
	?>
		<script>
			alert('gagal posting');
			document.location = "index.php";
		</script>
<?php
	}
}
?>
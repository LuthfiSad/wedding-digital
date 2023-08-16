

<?php
include"koneksi.php";

$as = mysqli_query($koneksi,"select * from komen order by id desc");
while($r = mysqli_fetch_array($as)) {
	?>
		<hr>
		<p><?=$r['tanggal'];?></p>
		<br><p><b><?=$r['nama'];?></b></p>
		<p><?=$r['komentar'];?></p>
		<hr><br>
	<?php
}
?>
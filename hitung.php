<?php
include 'koneksi/-koneksi.php';
//(p1),(p2),(p3),(p4),(p5),(p1)// IKO NAMO KOLOM NYO
$tes =mysqlI_num_fields(mysqlI_query($koneksi,"SELECT COUNT(p2),(p3),(p4),(p5),(p1) FROM pengawas WHERE 'aku' "));

?>

<center>
	<h1>Jumlah Pengawas :<?php echo $tes;?></h1> <br>
</center>





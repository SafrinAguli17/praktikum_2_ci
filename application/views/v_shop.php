<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <title>Instagram Store</title>
<body>
<center><h1>INSTAGRAM STORE</h1></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>kode</th>
			<th>kode_toko</th>
			<th>link</th>
			<th>link2</th>
            <th>link3</th>
            <th>judul</th>
            <th>judul_toko</th>
            <th>status_br</th>
            <th>harga</th>
            <th>harga_promo</th>
            <th>harga_normal</th>
            <th>mark_up</th>
            <th>suplier</th>
            <th>suplier2</th>
            <th>suplier3</th>
            <th>images</th>
            <th>deskripsi</th>
            <th>gambar1</th>
            <th>gambar2</th>
            <th>posted</th>
            <th>mediald</th>
		</tr>
		 <?php
		$no = 1;
	foreach($datashop as $lihat){ 
		?>
		<tr>
			<td><?php echo $lihat->kode ?></td>
			<td><?php echo $lihat->kode_toko ?></td>
            <td><?php echo $lihat->link ?></td>
            <td><?php echo $lihat->link2 ?></td>
            <td><?php echo $lihat->link3 ?></td>
            <td><?php echo $lihat->judul ?></td>
            <td><?php echo $lihat->judul_toko ?></td>
            <td><?php echo $lihat->status_br ?></td>
            <td><?php echo $lihat->harga ?></td>
            <td><?php echo $lihat->harga_promo ?></td>
            <td><?php echo $lihat->harga_normal ?></td>
            <td><?php echo $lihat->mark_up ?></td>
            <td><?php echo $lihat->suplier ?></td>
            <td><?php echo $lihat->suplier2 ?></td>
            <td><?php echo $lihat->suplier3 ?></td>
            <td><?php echo $lihat->images ?></td>
            <td><?php echo $lihat->deskripsi ?></td>
            <td><?php echo $lihat->gambar1 ?></td>
            <td><?php echo $lihat->gambar2 ?></td>
            <td><?php echo $lihat->posted ?></td>
            <td><?php echo $lihat->mediaId ?></td>
           
		</tr>
		<?php } ?>
	</table>
</body>
</html>
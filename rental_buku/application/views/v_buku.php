<!DOCTYPE html>
<html>
<head>
<title>Data Buku</title>
</head>
<body>
<h1 align="center">Data Buku | RentalBuku.net</h1>
<table border="1" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<th>Judul buku </th>
		<th>Pengarang </th>
		<th>Penerbit </th>
		<th>Tahun Terbit </th>
		<th>ISBN </th>
		<th>Jumlah Buku </th>
		<th>Lokasi </th>
	</tr>
<?php foreach($buku as $b){ ?>
	<tr>
		<td nowrap="nowrap"><?php echo $b->judul_buku ?></td>
		<td nowrap="nowrap"><?php echo $b->pengarang ?></td>
		<td nowrap="nowrap"><?php echo $b->penerbit ?></td>
		<td nowrap="nowrap"><?php echo $b->thn_terbit ?></td>
		<td nowrap="nowrap"><?php echo $b->isbn ?></td>
		<td nowrap="nowrap"><?php echo $b->jumlah_buku ?></td>
		<td nowrap="nowrap"><?php echo $b->lokasi ?></td>
	</tr>
<?php } ?>
</table>
</body>
</html>
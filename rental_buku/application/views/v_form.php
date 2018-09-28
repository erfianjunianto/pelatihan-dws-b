<!DOCTYPE html>
<html>
<head>
	<title>Membuat Form Validation pada CodeIgniter | RentalBuku</title>
</head>
<body>
	<table border="1" cellpadding="5" align="center">
		<tr>
			<td>
	<h1>Membuat Form Validasi dengan CodeIgniter</h1>
	<?php //echo validation_errors();
		echo form_error('nama');
		echo form_error('email');
		echo form_error('konfirm_email');
	?>
	<?php echo form_open('form/aksi'); ?>
	<table border="0" cellspacing="0" cellpadding="5">
	<form>
		<tr>
			<td>
				<label>Nama</label>
			</td>
			<td>
				<input type="text" name="nama">
			</td>
		</tr>
		<tr>
			<td>
				<label>Email</label>
			</td>
			<td>
				<input type="text" name="email">
			</td>
		</tr>
		<tr>
			<td>
				<label>Konfirmasi Email</label>
			</td>
			<td>
				<input type="text" name="konfirm_email"><br>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<input type="submit" name="submit" value="Simpan">
			</td>
		</tr>
	</form>
	</table>
</td>
</tr>
</table>
</body>
</html>
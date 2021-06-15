<!doctype html>
<html lang="en">
<head>
	<title>Tambah Data Pendaftaran</title>
</head>

<body>
	<h1>Tambah Data Pendaftaran</h1>
	<a href="pendaftaran.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>ID Pendaftaran</label>
		<br>
		<input type="text" name="id_pendaftaran">
		<br>
		<label>NIS</label>
		<br>
		<input type="text" name="nis">
        <br>
		<label>Nama Siswa</label>
		<br>
		<input type="text" name="nama_siswa">
		<br>
		<label>Tgl Pendaftaran</label>
		<br>
		<input type="date" name="tgl_pendaftaran">
        <br><br>
		<button type="submit" name="submit_simpan_pendaftaran">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>
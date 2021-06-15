<!doctype html>
<html lang="en">
<head>
	<title>Tambah Data Siswa</title>
</head>

<body>
	<h1>Tambah Data Siswa</h1>
	<a href="siswa.php">Kembali</a>
	<br><br>
	<form action="siswa.php" method="post">
		<label>ID Siswa</label>
		<br>
		<input type="text" name="id_siswa">
		<br>
		<label>ID Pendaftaran</label>
		<br>
		<input type="text" name="id_pendaftaran">
        <br>
		<label>Nama Siswa</label>
		<br>
		<input type="text" name="nama_siswa">
		<br>
		<label>Jenis Kelamin</label>
		<br>
		<input type="enum" name="jenis_kelamin">
		<br>
		<label>Alamat</label>
		<br>
		<input type="text" name="alamat">
        <br><br>
		<button type="submit" name="submit_simpan_siswa">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>
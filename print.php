<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Cetak Data</title>
	<style>
		h1 {
		text-align: center;
		}
		table, 
		td, 
		th {
		border: 1px solid #ddd;
		text-align: left;
		}
		table {
		border-collapse: collapse;
		width: 100%;
		}
		th, 
		td {
		padding: 15px;
		}
	</style>
</head>

<body>
	<h1>Laporan Data Pendaftaran Siswa</h1>
	<table>
		<thead>
			<tr tr bgcolor="B0C4DE">
                    <th>No.</th>
                    <th>Nama Siswa</th>
                    <th>ID Pendaftaran</th>
                    <th>ID Siswa</th>
                    <th>Alamat</th>
                    <th>Tgl Pendaftaran</th>
                    <th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $model->tampil_data();
			if ( !empty($result) ) {
				foreach ($result as $data): ?>
					<tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->nama_siswa ?></td>
                            <td><?= $data->id_pendaftaran ?></td>
                            <td><?= $data->id_siswa?></td> 
                            <td><?= $data->alamat ?></td>
                            <td><?= $data->tgl_pendaftaran ?></td>
                            <td>
					</tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td colspan="9">Belum ada data pada tabel data pendaftaransiswa.</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
	window.print();
	</script>
</body>
</html>
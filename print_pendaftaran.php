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
	<h1>Laporan Data Pendaftaran</h1>
	<table class="table table-striped" border="1">
		<thead>
			<tr bgcolor="B0C4DE">
                    <th scope="col">No.</th>
                    <th scope="col">ID Pendaftaran</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Tgl Pendaftaran</th>
                    <th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $model->tampil_data_pendaftaran();
			if ( !empty($result) ) {
				foreach ($result as $data): ?>
					<tr>
                            <td><?= $index++ ?></td>
                            <td><?= $data->id_pendaftaran ?></td>
                            <td><?= $data->nis ?></td> 
                            <td><?= $data->nama_siswa ?></td> 
                            <td><?= $data->tgl_pendaftaran ?></td>
                            <td>
					</tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td colspan="9">Belum ada data pada tabel pendaftaran.</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
	window.print();
	</script>
</body>
</html>
<?php
$id_pjm = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_pendaftaran($id_pendaftaran);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Pendaftaran</title>
</head>

<body>
    <h1>Edit Data Pendaftaran</h1>
    <a href="pendaftaran.php">Kembali</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>ID Pendaftaran</label>
        <br>
        <input type="text" name="id_pendaftaran" value="<?php echo $data->id_pendaftaran ?>">
        <br>
        <label>NIS</label>
        <br>
        <input type="text" name="nis" value="<?php echo $data->nis ?>">
        <br>
        <label>Nama Siswa</label>
        <br>
        <input type="text" name="nama_siswa" value="<?php echo $data->nama_siswa ?>">
        <br>
        <label>Tanggal Pendaftaran</label>
        <br>
        <input type="date" name="tgl_pendaftaran" value="<?php echo $data->tgl_pendaftaran ?>">
        <br><br>
        <button type="submit" name="submit_edit_pendaftaran">Submit</button>
    </form>
</body>

</html>
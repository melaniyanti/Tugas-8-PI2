<?php
$id_pjm = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_siswa($id_siswa);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Siswa</title>
</head>

<body>
    <h1>Edit Data Siswa</h1>
    <a href="siswa.php">Kembali</a>
    <br><br>
    <form action="proses.php" method="post">
        <label>ID Siswa</label>
        <br>
        <input type="text" name="id_siswa" value="<?php echo $data->id_siswa ?>">
        <br>
        <label>NIS</label>
        <br>
        <input type="text" name="nis" value="<?php echo $data->nis ?>">
        <br>
        <label>Nama Siswa</label>
        <br>
        <input type="text" name="nama_siswa" value="<?php echo $data->nama_siswa ?>">
        <br>
        <label>Jenis Kelamin</label>
        <br>
        <input type="enum" name="jenis_kelamin" value="<?php echo $data->jenis_kelamin ?>">
        <br>
        <label>Alamat</label>
        <br>
        <input type="text" name="alamat" value="<?php echo $data->alamat ?>">
        <br>
        <label>Asal Sekolah</label>
        <br>
        <input type="text" name="asal_sekolah" value="<?php echo $data->asal_sekolah ?>">
        <br><br>
        <button type="submit" name="submit_edit_siswa">Submit</button>
    </form>
</body>

</html>
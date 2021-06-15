<?php
include 'model.php';
//tbl pendaftaran
if (isset($_POST['submit_simpan_pendaftaran'])) {
 $id_pendaftaran = $_POST['id_pendaftaran'];
 $nis = $_POST['nis'];
 $nama_siswa = $_POST['nama_siswa'];
 $tgl_pendaftaran = $_POST['tgl_pendaftaran'];
 $model = new Model();
 $model->insert_pendaftaran($id_pendaftaran, $nis, $nama_siswa, $tgl_pendaftaran);
 header('location:pendaftaran.php');
}
if (isset($_POST['submit_edit_pendaftaran'])) {
 $id_pendaftaran = $_POST['id_pendaftaran'];
 $nis = $_POST['nis'];
 $nama_siswa = $_POST['nama_siswa'];
 $tgl_pendaftaran = $_POST['tgl_pendaftaran'];
 $model = new Model();
 $model->update_pendaftaran($id_pendaftaran, $nis, $nama_siswa, $tgl_pendaftaran);
 header('location:pendaftaran.php');
}
if (isset($_GET['pendaftaran_id'])) {
 $id_pendaftaran = $_GET['pendaftaran_id'];
 $model = new Model();
 $model->delete_pendaftaran($id_pendaftaran);
 header('location:pendaftaran.php');
}

//tbl siswa
if (isset($_POST['submit_simpan_siswa'])) {
 $id_siswa = $_POST['id_siswa'];
 $id_pendaftaran = $_POST['id_pendaftaran'];
 $nama_siswa = $_POST['nama_siswa'];
 $jenis_kelamin = $_POST['jenis_kelamin'];
 $alamat = $_POST['alamat'];
 $asal_sekolah = $_POST['asal_sekolah'];
 $model = new Model();
 $model->insert_siswa($id_siswa, $id_pendaftaran, $nama_siswa, $jenis_kelamin, $alamat, $asal_sekolah);
 header('location:siswa.php');
}
if (isset($_POST['submit_edit_siswa'])) {
  $id_siswa = $_POST['id_siswa'];
  $id_pendaftaran = $_POST['id_pendaftaran'];
  $nama_siswa = $_POST['nama_siswa'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $alamat = $_POST['alamat'];
  $asal_sekolah = $_POST['asal_sekolah'];
 $model = new Model();
 $model->update_siswa($id_siswa, $id_pendaftaran, $nama_siswa, $jenis_kelamin, $alamat, $asal_sekolah);
 header('location:peminjaman.php');
}
if (isset($_GET['siswa_id'])) {
 $id_siswa = $_GET['siswa_id'];
 $model = new Model();
 $model->delete_siswa($id_siswa);
 header('location:siswa.php');
}


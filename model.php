<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();


// tabel pendaftaran
 }
 public function insert_pendaftaran($id_pendaftaran, $nis, $nama_siswa, $tgl_pendaftaran)
{
	$sql = "INSERT INTO tbl_pendaftaran (id_pendaftaran, nis, nama_siswa, tgl_pendaftaran) 
	VALUES ('$id_pendaftaran', '$nis', '$nama_siswa', '$tgl_pendaftaran')";
	$this->conn->query($sql);
}
public function tampil_data_pendaftaran()
{
	 $sql = "SELECT * FROM tbl_pendaftaran";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { 
	 	$baris[] = $obj;
	 }
	 if(!empty($baris)){
	 	return $baris;
	 }
}
public function edit_pendaftaran($id)
{
	 $sql = "SELECT * FROM tbl_pendaftaran WHERE id_pendaftaran='$id'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
		 $baris = $obj;
	 }
	 return $baris;
}
public function update_pendaftaran($id_pendaftaran, $nis, $nama_siswa, $tgl_pendaftaran)
{
	 $sql = "UPDATE tbl_pendaftaran SET nis='$nis', nama_siswa='$nama_siswa', tgl_pendaftaran='$tgl_pendaftaranphp' WHERE id_pendaftaran='$id_pendaftaran'";
	 $this->conn->query($sql);
}
public function delete_pendaftaran($pendaftaran_id)
{ 
	$sql = "DELETE FROM tbl_pendaftaran WHERE id_pendaftaran='$pendaftaran_id'";
	$this->conn->query($sql);
}

// tabel siswa
 public function insert_pjm($id_siswa, $id_pendaftaran, $nama_siswa, $jenis_kelamin, $alamat, $asal_sekolah)
{
  $sql = "INSERT INTO tbl_siswa (id_siswa, id_pendaftaran, nama_siswa, jenis_kelamin, alamat, asal_sekolah) 
  VALUES ('$id_siswa', '$id_pendaftaran', '$nama_siswa', '$jenis_kelamin', '$alamat', '$asal_sekolah')";
  $this->conn->query($sql);
}
public function tampil_data_siswa()
{
   $sql = "SELECT * FROM tbl_siswa";
   $bind = $this->conn->query($sql);
   while ($obj = $bind->fetch_object()) { 
    $baris[] = $obj;
   }
   if(!empty($baris)){
    return $baris;
   }
}
public function edit_siswa($id)
{
   $sql = "SELECT * FROM tbl_siswa WHERE id_siswa='$id'";
   $bind = $this->conn->query($sql);
   while ($obj = $bind->fetch_object()) {
     $baris = $obj;
   }
   return $baris;
}
public function update_siswa($id_siswa, $id_pendaftaran, $nama_siswa, $jenis_kelamin, $alamat, $asal_sekolah)
{
   $sql = "UPDATE tbl_siswa SET id_siswa='$id_siswa', id_pendaftaran='$id_pendaftaran', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin' WHERE id_siswa='$id_siswa'";
   $this->conn->query($sql);
}
public function delete_siswa($siswa_id)
{ 
  $sql = "DELETE FROM tbl_siswa WHERE id_siswa='$siswa_id'";
  $this->conn->query($sql);
}

// tabel pendaftaran siswa
public function tampil_data()
{
   $sql = "SELECT tbl_siswa.*, asal_sekolah FROM tbl_siswa INNER JOIN tbl_pendaftaran ON tbl_siswa.id_pendaftaran = tbl_pendaftaran.id_pendaftaran";
   $bind = $this->conn->query($sql);
   while ($obj = $bind->fetch_object()) { 
    $baris[] = $obj;
   }
   if(!empty($baris)){
    return $baris;
   }
}


}
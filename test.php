<?php
$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$tingkat = $_POST['tingkat'];
$jenis_kelamin = $_POST['gender'];
$hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : "Tidak ada";

// Menampilkan hasil
echo "NAMA SAYA ADALAH $nama_depan $nama_belakang. ";
echo "SAYA SEKOLAH TINGKAT $tingkat. ";
echo "JENIS KELAMIN SAYA $gender. ";
echo "DAN HOBI SAYA $hobi.";
?>
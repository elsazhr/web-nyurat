<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nama_database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

$judul = $_POST['judul'];
$paragraf1 = $_POST['paragraf1'];
$paragraf2 = $_POST['paragraf2'];

// Lakukan sanitasi atau validasi data input sebelum menyimpan ke database

$sql = "INSERT INTO dokumen (judul, paragraf1, paragraf2) VALUES ('$judul', '$paragraf1', '$paragraf2')";

if (mysqli_query($conn, $sql)) {
  echo "Data berhasil disimpan ke database.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

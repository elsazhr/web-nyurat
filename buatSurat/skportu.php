<?php
require_once '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai input dari halaman web
    $tempatSurat = isset($_POST['tempat_surat']) ? $_POST['tempat_surat'] : '';
    $tanggalSurat = isset($_POST['tanggal_surat']) ? $_POST['tanggal_surat'] : '';
    $namaLengkap = isset($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : '';
    $tempatTanggalLahir = isset($_POST['tempat_tgl_lahir']) ? $_POST['tempat_tgl_lahir'] : '';
    $jenisKelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
    $agama = isset($_POST['agama']) ? $_POST['agama'] : '';
    $pekerjaan = isset($_POST['pekerjaan']) ? $_POST['pekerjaan'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $namaLengkap2 = isset($_POST['nama_lengkap2']) ? $_POST['nama_lengkap2'] : '';
    $tempatTanggalLahir2 = isset($_POST['tempat_tgl_lahir2']) ? $_POST['tempat_tgl_lahir2'] : '';
    $jenisKelamin2 = isset($_POST['jenis_kelamin2']) ? $_POST['jenis_kelamin2'] : '';
    $agama2 = isset($_POST['agama2']) ? $_POST['agama2'] : '';
    $pekerjaan2 = isset($_POST['pekerjaan2']) ? $_POST['pekerjaan2'] : '';
    $alamat2 = isset($_POST['alamat2']) ? $_POST['alamat2'] : '';
    $penghasilan = isset($_POST['penghasilan']) ? $_POST['penghasilan'] : '';
    $ttdKades = isset($_POST['ttd_kades']) ? $_POST['ttd_kades'] : '';
    $yangMenyatakan = isset($_POST['yang_menyatakan']) ? $_POST['yang_menyatakan'] : '';

    // Query untuk menyimpan data ke tabel sktm
    $sql = "INSERT INTO skportu (tempat_surat, tanggal_surat, nama_lengkap, tempat_tgl_lahir, jenis_kelamin, agama, pekerjaan, alamat, nama_lengkap2, tempat_tgl_lahir2, jenis_kelamin2, agama2, pekerjaan2, alamat2, penghasilan, ttd_kades, yang_menyatakan)
            VALUES ('$tempatSurat', '$tanggalSurat', '$namaLengkap', '$tempatTanggalLahir', '$jenisKelamin', '$agama', '$pekerjaan', '$alamat', '$namaLengkap2', '$tempatTanggalLahir2', '$jenisKelamin2', '$agama2', '$pekerjaan2', '$alamat2', '$penghasilan', '$ttdKades', '$yangMenyatakan')";

    if (mysqli_query($conn, $sql)) {

        header("Location: SKPortuPreview.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

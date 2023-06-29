<?php
require_once '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai input dari halaman web
    $namaInstansi = isset($_POST['nama_instansi']) ? $_POST['nama_instansi'] : '';
    $jenisInstansi = isset($_POST['jenis_instansi']) ? $_POST['jenis_instansi'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $telp = isset($_POST['telp']) ? $_POST['telp'] : '';
    $tempatSurat = isset($_POST['tempat_surat']) ? $_POST['tempat_surat'] : '';
    $tanggalSurat = isset($_POST['tanggal_surat']) ? $_POST['tanggal_surat'] : '';
    $nomorSurat = isset($_POST['nomor_surat']) ? $_POST['nomor_surat'] : '';
    $paragraf1 = isset($_POST['paragraf1']) ? $_POST['paragraf1'] : '';
    $paragraf2 = isset($_POST['paragraf2']) ? $_POST['paragraf2'] : '';
    $paragraf3 = isset($_POST['paragraf3']) ? $_POST['paragraf3'] : '';
    $paragraf4 = isset($_POST['paragraf4']) ? $_POST['paragraf4'] : '';
    $paragraf5 = isset($_POST['paragraf5']) ? $_POST['paragraf5'] : '';
    $penutup = isset($_POST['penutup']) ? $_POST['penutup'] : '';
    $pengesahan = isset($_POST['pengesahan']) ? $_POST['pengesahan'] : '';

    // Query untuk menyimpan data ke tabel sktm
    $sql = "INSERT INTO sktm (nama_instansi, jenis_instansi, alamat, telp, tempat_surat, tanggal_surat, nomor_surat, paragraf1, paragraf2, paragraf3, paragraf4, paragraf5, penutup, pengesahan)
            VALUES ('$namaInstansi', '$jenisInstansi', '$alamat', '$telp', '$tempatSurat', '$tanggalSurat', '$nomorSurat', '$paragraf1', '$paragraf2', '$paragraf3', '$paragraf4', '$paragraf5', '$penutup', '$pengesahan')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil ditambahkan ke tabel sktm";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

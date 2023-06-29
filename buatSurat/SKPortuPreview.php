<?php
require_once '../koneksi.php';

// Query untuk mengambil data dari tabel skportu
$sql = "SELECT * FROM skportu";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $tempatSurat = $row['tempat_surat'];
    $tanggalSurat = $row['tanggal_surat'];
    $namaLengkap = $row['nama_lengkap'];
    $tempatTanggalLahir = $row['tempat_tgl_lahir'];
    $jenisKelamin = $row['jenis_kelamin'];
    $agama = $row['agama'];
    $pekerjaan = $row['pekerjaan'];
    $alamat = $row['alamat'];
    $namaLengkap2 = $row['nama_lengkap2'];
    $tempatTanggalLahir2 = $row['tempat_tgl_lahir2'];
    $jenisKelamin2 = $row['jenis_kelamin2'];
    $agama2 = $row['agama2'];
    $pekerjaan2 = $row['pekerjaan2'];
    $alamat2 = $row['alamat2'];
    $penghasilan = $row['penghasilan'];
    $ttdKades = $row['ttd_kades'];
    $yangMenyatakan = $row['yang_menyatakan'];
} else {
    echo "Data tidak ditemukan";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SKPortu Preview</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="print-hidden">
        <a href="../dashboard/dashBuat.html">Kembali</a>
    </div>
    <div class="paper">
        <div class="judul">
            <h1>SURAT KETERANGAN PENGHASILAN ORANG TUA</h1>
        </div>
                
        <div class="paragraf1">
            <br>
            <p>Yang bertanda tangan di bawah ini:</p>
        </div>

        <div>
            <div class="section-content">
                <p>Nama Lengkap</p>
                <p>:</p>
                <p><?php echo $namaLengkap; ?></p>
                <p>Tempat, Tanggal Lahir</p>
                <p>:</p>
                <p><?php echo $tempatTanggalLahir; ?></p>
                <p>Jenis Kelamin</p>
                <p>:</p>
                <p><?php echo $jenisKelamin; ?></p>
                <p>Agama</p>
                <p>:</p>
                <p><?php echo $agama; ?></p>
                <p>Pekerjaan</p>
                <p>:</p>
                <p><?php echo $pekerjaan; ?></p>
                <p>Alamat</p>
                <p>:</p>
                <p><?php echo $alamat; ?></p>
            </div>
        </div>
        
        <div class="paragraf2">
            <br>
            <p>Adalah Benar Orang Tua/Wali dari:</p>
        </div>

        <div class="section">
            <div class="section-content">
                <p>Nama Lengkap</p>
                <p>:</p>
                <p><?php echo $namaLengkap2; ?></p>
                <p>Tempat, Tanggal Lahir</p>
                <p>:</p>
                <p><?php echo $tempatTanggalLahir2; ?></p>
                <p>Jenis Kelamin</p>
                <p>:</p>
                <p><?php echo $jenisKelamin2; ?></p>
                <p>Agama</p>
                <p>:</p>
                <p><?php echo $agama2; ?></p>
                <p>Pekerjaan</p>
                <p>:</p>
                <p><?php echo $pekerjaan2; ?></p>
                <p>Alamat</p>
                <p>:</p>
                <p><?php echo $alamat2; ?></p>
            </div>
        </div>
        
        <div class="paragraf2">
            <p>Menerangkan bahwa saya selaku Orang Tua/Wali yang berpenghasilan sekitar <?php echo $penghasilan; ?> / Bulan.</p>
        </div>

        <div class="paragraf1">
            <p>Demikian surat Surat Keterangan Penghasilan Orang Tua ini saya buat dengan 
        sebenar-benarnya dan penuh kesadaran, tanpa paksaan dan tekanan dari pihak 
        manapun. Apabila dikemudian hari terdapat sesuatu yang tidak sesuai dengan 
        isi surat ini, maka saya bersedia mendapatkan sanksi sesuai hukum yang
        berlaku.</p>
        </div>

        <div class="tgl">
            <p><?php echo $tempatSurat; ?>, <?php echo $tanggalSurat; ?></p>
        </div>
        
        <div class="tertanda">
            <div class="formal">
                <p>Kepala Desa</p>
                <p>Yang Menyatakan</p>
            </div>
            <br><br><br>
            <div class="ket">
                <p>(<?php echo $ttdKades; ?>)</p>
                <p>(<?php echo $yangMenyatakan; ?>)</p>
            </div>
            
        </div>
    </div>
    <div class="print-hidden">
            <button onclick="window.print()">Cetak Surat</button>
    </div>
    <div class="print-hidden">
        
    </div>
</body>
</html>

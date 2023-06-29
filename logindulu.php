<?php
    // Cek status login
    $loggedIn = false; // Ganti dengan logika login sesuai dengan kebutuhan aplikasi Anda

    if ($loggedIn) {
        // Jika sudah login, tampilkan halaman dashboard
        include('dashboard/dashBuat.html');
    } else {
        // Jika belum login, tampilkan halaman login
        echo "<script>
            alert ('Anda belum login! Lakukan login terlebih dulu untuk mengakses fitur ini');
            window.location = 'otentikasi/masuk.html';
            </script>";
    }
?>
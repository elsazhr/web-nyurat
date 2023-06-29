<?php
require_once '../koneksi.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    $cek_user = mysqli_query($conn, "Select * FROM login WHERE username='$username' OR email='$email'");
    $cek_login = mysqli_num_rows($cek_user);

    if ($cek_login > 0) {
        echo "<script>
            alert ('Username atau email Anda telah terdaftar!'); 
            window.location = 'daftar.html';
            </script>";
    } else {
        if ($password1 != $password2) {
            echo "<script>
                alert ('Konfirmasi password tidak sesuai'); 
                window.location = 'daftar.html';
                </script>";
        } else {
            $password_skuy = md5($password1);
            mysqli_query($conn, "INSERT INTO login VALUES('$username', '$email', '$password_skuy')");
            echo "<script>
                alert ('Registrasi berhasil!');
                window.location = 'masuk.html';
                </script>";
        }
    }
}
?>

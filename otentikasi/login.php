<?php
session_start();
require_once '../koneksi.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['email'] = $email;
    header("Location: ../dashboard/dashProfile.php");
} else {
    echo "<script>
        alert('Username atau password yang Anda masukkan salah, silahkan coba lagi.');
        window.location = 'masuk.html';
        </script>";
}
mysqli_close($conn);
?>
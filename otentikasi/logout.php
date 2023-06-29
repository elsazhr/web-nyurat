<?php
// Menghapus session dan kembali ke halaman login
session_start();
session_unset();
session_destroy();
header('Location: ../index.html');
exit();
?>

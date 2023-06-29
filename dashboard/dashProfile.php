<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pa2_nyurat";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk mendapatkan data dari tabel login
$sql = "SELECT username, email, password FROM login";
$result = mysqli_query($conn, $sql);

// Cek apakah data ditemukan
if (mysqli_num_rows($result) > 0) {
    // Ambil data pertama (asumsi hanya ada satu baris data)
    $row = mysqli_fetch_assoc($result);

    // Assign data ke variabel
    $username = $row['username'];
    $email = $row['email'];
    $password = $row['password'];
} else {
    // Data tidak ditemukan, bisa menampilkan pesan atau melakukan tindakan lainnya
    $username = "Data tidak ditemukan";
    $email = "";
    $password = "";
}

mysqli_close($conn);
?>

<!-- HTML code untuk menampilkan data yang diambil dari database -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styleDash.css">
    <title>Dashboard</title>
</head>
<body>
    <div>
        <nav>
            <div class="logo">
                <a href="../index.html">
                    <img src="../assets/img/logologo-kuning.svg" alt="">
                </a>
            </div>
            <div class="border">
                <img src="../assets/img/Vector 2.svg" alt="">
            </div>
        </nav>
        <section class="hero">
            <div class="side-bar">
                <a href="dashBuat.html">Buat</a>
                <a href="dashRS.html">Riwayat Surat</a>
                <a href="dashRTd.html">Riwayat Tanda Tangan</a>
                <a href="dashProfile.php" class="select">Akun</a>
                <form action="../otentikasi/logout.php" >
                    <button class="btn-primary">
                        Logout
                        <img src="../assets/img/icon-logout.svg" alt="">
                    </button>
                </form>
                
            </div>
            <div class="profile">
                <img src="../assets/img/profile.svg" alt="">
                <form class="php" method="post" action="dashProfile.php">
                    <div class="info">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" value="<?php echo $username; ?>" disabled>
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" value="<?php echo $email; ?>" disabled>
                    </div>
                    <div class="btn">
                        <button id="editButton" onclick="enableInputs()">Edit</button>
                        <button id="saveButton" onclick="saveChanges()" disabled>Simpan</button>
                    </div>

                    <script>
                        function enableInputs() {
                            document.getElementById("username").disabled = false;
                            document.getElementById("email").disabled = false;
                            document.getElementById("editButton").disabled = true;
                            document.getElementById("saveButton").disabled = false;
                        }

                        function saveChanges() {

                            // Setelah menyimpan perubahan, kembalikan input ke kondisi semula
                            document.getElementById("username").disabled = true;
                            document.getElementById("email").disabled = true;
                            document.getElementById("editButton").disabled = false;
                            document.getElementById("saveButton").disabled = true;
                        }
                    </script>
                </form>
            </div>
        </section>
    </div>
</body>
</html>

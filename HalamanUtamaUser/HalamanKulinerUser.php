<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet" />

    <link rel="shortcut icon" href="../Logo/Logo.png"/>
    <link rel="stylesheet" href="HalamanKulinerUser/style_halamanUtama.css" />
    <title>Pilihan Kulineran</title>
</head>

<body>
<?php include 'isi/headerKuliner.php'; ?>


    <div id="kuliner">
        <div class="container">
        <?php
// Koneksi ke database
$servername = "localhost"; // Ganti dengan nama server Anda
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "projekpdi"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel kuliner
$sql = "SELECT * FROM kuliner";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data dari setiap baris
    while($row = $result->fetch_assoc()) {
        echo '
        <div id="kuliner">
            <div class="container">
                <div class="article-contener">
                    <ul class="groups">
                        <li>
                            <div class="card">
                                <div class="image-session">
                                    <img src="CRUDKUL/img/' . $row["Foto_Makanan"] . '" alt="" class="image">
                                </div>
                                <div class="meta-sission">
                                    <div class="head">
                                        <span class="flexone"></span>
                                        <span class="per"></span>
                                    </div>
                                    <div class="body">
                                        <h2 class="title">' . $row["Judul_Makanan"] . '</h2>
                                        <p class="desc">' . $row["Deskripsi_Makanan"] . '</p>
                                    </div>
                                    <div class="footer1">
                                        <div class="views">
                                            <span>' . $row["Kisaran_Harga"] . '</span>
                                            <span>/Porsi</span>
                                        </div>
                                        <a href="' . $row["Link_Google_Maps"] . '" class="button">View→</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>';
    }
} else {
    echo "0 hasil";
}
$conn->close();
?>
        </div>
    </div>


    <?php include 'isi/service.php'; ?>

    <!-- Footer -->
    <?php include 'isi/footerkuliner.php'; ?>
    <!-- Footer -->

    <script src="HalamanKulinerUser/rwd_halamanUtama.js"></script>
</body>

</html>
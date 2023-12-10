<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "projekpdi");

// Ambil data dari URL
$email = $_SESSION['login'];

// Periksa apakah $id sudah diset sebelum digunakan dalam query
if ($email !== null) {
    // Query data mahasiswa berdasarkan id
    $user = query("SELECT * FROM pengunjung WHERE email = '$email'")[0];
} else {
    // Tangani kasus ketika "id" tidak diset di dalam URL
    echo "ID tidak diberikan di dalam URL";
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);

    if (!$result) {
        // Tangani kesalahan SQL
        die("Kesalahan SQL: " . mysqli_error($conn));
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>info desa wisata</title>
    <link rel="stylesheet" href="tampilan/style_desaWisata.css" />
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .star {
            color: gold;
            /* Adjust the color as needed */
            font-size: 20px;
            /* Adjust the font size as needed */
        }
    </style>
</head>

<body>

    <?php
    include 'connect_user.php';
    // Query untuk mengambil data desa wisata dari tabel
    $desaID = $_GET["id"];

    $sql = "SELECT * FROM `desa_wisata` where id = $desaID";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    ?>
    <div class="container">
        <div class="header">
            <h1><?php include 'connect_user.php';
                echo $data['Judul_Desawisata']; ?></h1>
        </div>

        <div class="main">
            <div class="kiri">
                <img src="CRUD/img/<?php echo $data['Foto_Desawisata']; ?>" alt="">
                <div class="but"><br>
                    <h2>Deskripsi </h2>
                    <p><?php echo $data['Deskripsi_Desawisata']; ?></p>
                </div><br>
                <div>
                    <h2>Lokasi</h2>
                    <div class="card">
                        <img src="CRUD/img/<?php echo $data['Foto_Lokasi_maps']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><?php echo $data['Alamat_Desawisata']; ?></p>
                            <a href="<?php echo $data['Link_Google_Maps']; ?>" class="btn btn-primary">Lihat di Maps</a>
                        </div>
                    </div>
                </div><br>
            </div>
            <div class="kanan">
                <div class="highlight">
                    <h2>Ringkasan</h2>
                    <p><?php echo $data['Ringkasan_Desawisata']; ?></p>
                </div><br>
                <div class="fitur">
                    <h2>Fasilitas</h2>
                    <p><?php echo $data['Fasilitas_Desawisata']; ?></p>
                </div>
                <div><br>
                    <h2>Info Lainnya</h2>
                    <details>
                        <summary>Syarat & Ketentuan</summary>
                        <p><?php echo $data['Syarat_dan_Ketentuan']; ?></p>
                    </details>
                    <details>
                        <summary>Informasi Tambahan</summary>
                        <p><?php echo $data['Informasi_Tambahan']; ?></p>
                    </details>
                </div><br>
                <div class="wrapper">
                    <h3>Ulasan</h3>
                    <form action="isi/proses_ulasan.php" method="POST">
                        <div class="rating">
                            <input type="number" name="rating" hidden>
                            <i class='bx bx-star star' style="--i: 0;"></i>
                            <i class='bx bx-star star' style="--i: 1;"></i>
                            <i class='bx bx-star star' style="--i: 2;"></i>
                            <i class='bx bx-star star' style="--i: 3;"></i>
                            <i class='bx bx-star star' style="--i: 4;"></i>
                        </div>
                        <textarea name="opinion" cols="30" rows="5" placeholder="Masukan Kritik dan Saran"></textarea>
                        <input type="hidden" name="Id_DesaWisata" value="<?php echo $desaID ?>">
                        <div class="btn-group">
                            <button type="submit" class="btn submit">Submit</button>
                            <button class="btn cancel">Cancel</button>
                        </div>
                    </form>
                </div><br>
                <div class="ulasan">
                    <?php
                    // Koneksi ke database (sesuaikan dengan koneksi Anda)

                    include 'connect_user.php';
                    // Query untuk mengambil ulasan dari database
                    $query = "SELECT * FROM ulasan WHERE Id_Desawisata = $desaID";


                    // Menjalankan query
                    $result = mysqli_query($conn, $query);

                    // Memeriksa apakah ada hasil dari query
                    if (mysqli_num_rows($result) > 0) {
                        // Menampilkan hasil ulasan
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<p>Email: " . $row['email'] . "</p>";
                            echo "<p>Penilaian: " ;
                            for ($i = 1; $i <= $row['Penilaian']; $i++) {
                                echo "<span class='star'>&#9733;</span>"; // Unicode character for a solid star
                            }
                            echo "<p>Ulasan: " . $row['Ulasan'] . "</p>";
                            echo "<hr>"; // Garis pemisah antara ulasan
                        }
                    } else {
                        echo "Belum ada ulasan.";
                    }

                    // Tutup koneksi ke database
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="box-footer">
                    <div class="box">
                        <h2>Story</h2>
                        <p>Menyajikan cerita tak terlupakan, melalui destinasi yang
                            memikat hati dan petualangan yang menginspirasi.</p>
                    </div>
                    <div class="box">
                        <h3>Menu</h3>
                        <a href="halamanUtama_user.php">Home</a>
                    </div>
                    <div class="box">
                        <p>&copy; Copyright by <span>Progammer Dream Innovator</span> All Rights Reserved 2023, Sleman</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
    </div>

    <script src="tampilan/rwd_desaWisata.js"></script>
</body>

</html>
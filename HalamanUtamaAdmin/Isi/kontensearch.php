<div class="container">
<div class="box">
    <div class="kategori"> <!-- Dropdown untuk filter kategori -->
        <form action="kategori.php" method="GET">
            <label for="kategori"></label><br>
            <select name="kategori" id="kategori">
                <option value="edukasi-dan-kesenian">Edukasi dan Kesenian</option>
                <option value="agrowisata">Agrowisata</option>
                <option value="alam">Alam</option>
                <option value="sejarah-dan-budaya">Sejarah dan Budaya</option>
                <!-- Tambahkan opsi lainnya sesuai dengan kategori yang Anda miliki -->
            </select>
            <button type="submit"><i class="ri-equalizer-line"></i></button>
        </form>
        </div>
    </div>
</div>

<div class="desa" id="desa">
        <div class="container">
            <div class="box-desa">
                <?php
                include 'connect_admin.php';

                // Menampilkan hasil pencarian jika ada keyword yang dicari
                if (isset($_GET['keyword'])) {
                    $keyword = $_GET['keyword'];

                    // Query untuk mencari data berdasarkan keyword
                    $sql = "SELECT * FROM `desa_wisata` WHERE `Judul_Desawisata` LIKE '%$keyword%'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // Tampilkan hasil pencarian di dalam box desa
                            echo '<div class="box">';
                            echo '<img src="CRUD/img/' . $row["Foto_Desawisata"] . '" alt="' . $row["Judul_Desawisata"] . '" />';
                            echo '<h3 class="favorite-icon">' . $row["Judul_Desawisata"] . '</h3>';
                            echo '<p class="short-description">' . $row["Deskripsi_Singkat"] . '</p>';
                            echo '<a href="DesaWisata_admin.php?id=' . $row["ID"] . '"><button>View</button></a>';
                            echo '</div>';
                        }
                    } else {
                        echo "Tidak ada hasil untuk pencarian ini.";
                    }
                }
                $conn->close();
                ?>
            </div>
        </div>
    </div>
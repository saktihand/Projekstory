
<?php
include 'connect_user.php';

// Menampilkan hasil pencarian jika ada keyword yang dicari
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];

    // Query untuk mencari data berdasarkan keyword
    $sql = "SELECT * FROM `kuliner` WHERE `Judul_Makanan` LIKE '%$keyword%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div id="kuliner">
                <div class="container">
                    <div class="article-contener">
                        <ul class="groups">';
        
        while ($row = $result->fetch_assoc()) {
            echo '<li>
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
                </li>';
        }

        echo '</ul>
            </div>
        </div>
    </div>';
    } else {
        echo "Tidak ada hasil untuk kata kunci ini.";
    }
} else {
    echo "Kata kunci belum dimasukkan.";
}
?>

<?php
include 'connect_user.php';

// Memeriksa jika kategori dipilih dari URL
if (isset($_POST['Kategori'])) {
    $selected_category = $_POST['Kategori'];

    // Query untuk menampilkan data kuliner berdasarkan kategori
    $sql = "SELECT * FROM kuliner WHERE Kategori = '$selected_category'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data dari setiap baris
        while ($row = $result->fetch_assoc()) {
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
        echo "Tidak ada hasil untuk kategori ini.";
    }
} else {
    echo "Kategori belum dipilih.";
    var_dump($selected_category) ;
}

$conn->close();
?>

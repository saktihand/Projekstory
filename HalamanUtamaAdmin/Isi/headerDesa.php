<div class="header">
    <div class="navbar">
        <div class="container">
            <div class="box-navbar">
                <div class="logo">
                    <h1>STORY</h1>
                </div>
                <ul class="menu">
                    <li><a href="../HalamanUtamaAdmin/halamanUtama_admin.php">Home</a></li>
                    <li><a href="../Profile/Profile/Profile_Admin.php">Profile</a></li>
                    <li><a href="HalamanKulinerAdmin.php">Kuliner</a></li>
                    <li><a href="#desa">Desa Wisata</a></li>
                    <li><a href="CRUD/tambahdesa.php">Tambah</a></li>
                    <li><a href="CRUD/crud.php">Edit</a></li>
                    <form action="search.php" method="GET">
                        <input type="text" name="keyword" placeholder="Cari Desa Wisata">
                        <button type="submit"><i class="ri-search-line" background="transparant"></i></button>
                    </form>
                    <li><a href="../index.php"><i class="ri-logout-box-r-line"></i></a></li>
                    <?php
                    include 'connect_admin.php';

                    if (isset($_GET['keyword'])) {
                        $keyword = $_GET['keyword'];

                        // Query untuk mencari data berdasarkan keyword
                        $sql = "SELECT * FROM `desa_wisata` WHERE `Judul_Desawisata` LIKE '%$keyword%'";
                        $result = $conn->query($sql);
                        $conn->close();
                    }
                    ?>
                </ul>
                <i class="fa-solid fa-bars menu-bar"></i>
            </div>
        </div>
    </div>

    <div class="judul">
        <div class="container">
            <div class="box-judul">
                <div class="box">
                    
                    <h1>
                        Desa Wisata Pilihan Terbaik Di Yogyakarta<br />
                        Liburan Bersama Keluarga
                    </h1>
                    <p>Dengan pesona alamnya yang memesona dan kekayaan budayanya yang memikat, setiap sudut menawarkan petualangan yang menggugah hati.</p>
                </div>
                <div class="box">
                    <img src="http://localhost/projekstory/HalamanUtamaUser/isi/Gambar/gambarjudul.png" alt="" />
                </div>
            </div>
        </div>
    </div>
        </div>
</div>
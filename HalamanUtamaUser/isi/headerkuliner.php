<div class="header">
    <div class="navbar">
        <div class="container">
            <div class="box-navbar">
                <div class="logo">
                    <h1>STORY</h1>
                </div>
                <ul class="menu">
                    <li><a href="../HalamanUtamaUser/halamanUtama_user.php">Home</a></li>
                    <li><a href="../Profile/Profile/Profile_Anggota.php">Profile</a></li>
                    <li><a href="halamanUtama_user.php">Desa Wisata</a></li>
                    <li><a href="#kuliner">Kuliner</a></li>
                    <li><a href="#services">Services</a></li>
                    <form action="searchkul.php" method="GET">
                        <input type="text" name="keyword" placeholder="Cari Kuliner">
                        <button type="submit"><i class="ri-search-line" background="transparant"></i></button>
                    </form>
                    <?php
                    include 'connect_user.php';

                    if (isset($_GET['keyword'])) {
                        $keyword = $_GET['keyword'];

                        // Query untuk mencari data berdasarkan keyword
                        $sql = "SELECT * FROM `kuliner` WHERE `Judul_Makanan` LIKE '%$keyword%'";
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
                        Kulineran Terbaik Di Yogyakarta<br />
                        Makan Enak Bersama Keluarga
                    </h1>
                    <p>Rasakan sensasi kuliner terbaik di Yogyakarta, mempersembahkan pengalaman menggugah selera yang tak terlupakan</p>
                </div>
                <div class="box">
                    <img src="http://localhost/projekstory/HalamanUtamaUser/isi/gambarkuliner.png" alt="" />
                </div>
                <div class="container">
                <div class="box-navbar">
                
                    <!-- Dropdown untuk filter kategori -->
                    <form action="kategorikul.php" method="POST">
                        <label for="Kategori"></label><br>
                        <select name="Kategori" id="Kategori">
                            <option value="Gudeg">Gudeg</option>
                            <option value="Sate-Klathak">Sate Klathak</option>
                            <option value="Bakmi-Jawa">Bakmi Jawa</option>
                            <option value="Mungut-Lele">Mungut Lele</option>
                            <option value="Lainnya">Lainnya</option>
                            <!-- Tambahkan opsi lainnya sesuai dengan kategori yang Anda miliki -->
                        </select>
                        <button type="submit"><i class="ri-equalizer-line"></i></button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
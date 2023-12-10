<?php
    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){

            $Judul_Desawisata = $_POST['Judul_Desawisata'];
            $kategori = $_POST['kategori'];
            $Foto_Desawisata = $_FILES['Foto_Desawisata']['name'];
            $Deskripsi_Singkat = $_POST['Deskripsi_Singkat'];
            $Deskripsi_Desawisata = $_POST['Deskripsi_Desawisata'];
            $Foto_Lokasi_maps = $_FILES['Foto_Lokasi_maps']['name'];
            $Alamat_Desawisata = $_POST['Alamat_Desawisata'];
            $Link_Google_Maps = $_POST['Link_Google_Maps'];
            $Ringkasan_Desawisata = $_POST['Ringkasan_Desawisata'];
            $Fasilitas_Desawisata = $_POST['Fasilitas_Desawisata'];
            $Syarat_dan_Ketentuan = $_POST['Syarat_dan_Ketentuan'];
            $Informasi_Tambahan = $_POST['Informasi_Tambahan'];

            $dir = "img/";
            $tmpFile1 = $_FILES['Foto_Desawisata']['tmp_name'];
            $tmpFile2 = $_FILES['Foto_Lokasi_maps']['tmp_name'];

            move_uploaded_file($tmpFile1, $dir.$Foto_Desawisata);
            move_uploaded_file($tmpFile2, $dir.$Foto_Lokasi_maps);

            //die();

            $query = "INSERT INTO desa_wisata VALUES(null, '$Judul_Desawisata', '$kategori', '$Foto_Desawisata', '$Deskripsi_Singkat', '$Deskripsi_Desawisata', '$Foto_Lokasi_maps', '$Alamat_Desawisata', '$Link_Google_Maps', '$Ringkasan_Desawisata', '$Fasilitas_Desawisata', '$Syarat_dan_Ketentuan', '$Informasi_Tambahan' )";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location:crud.php");
                //echo "Data Berhasil Ditambahkan <a href='crud.php'>[Home]</a>";
            } else {
                echo $query;
            }

            //echo $Judul_Desawisata." | ".$kategori." | ".$Foto_Desawisata." | ".$Deskripsi_Desawisata." | ".$Foto_Lokasi_maps." | ".$Alamat_Desawisata." | ".$Link_Google_maps." | ".$Ringkasan_Desawisata." | ".$Ringkasan_Desawisata." | ".$Fasilitas_Desawisata." | ".$Syarat_dan_Ketentuan." | ".$Informasi_Tambahan;
            
            //echo "<br>Tambah Data <a href='crud.php'>[Home]</a>";

        } else if($_POST['aksi'] == "edit"){
            //echo "Edit Data <a href='crud.php'>[Home]</a>";

            $ID = $_POST['ID'];
            $Judul_Desawisata = $_POST['Judul_Desawisata'];
            $kategori = $_POST['kategori'];
            $Deskripsi_Singkat = $_POST['Deskripsi_Singkat'];
            $Deskripsi_Desawisata = $_POST['Deskripsi_Desawisata'];
            $Alamat_Desawisata = $_POST['Alamat_Desawisata'];
            $Link_Google_Maps = $_POST['Link_Google_Maps'];
            $Ringkasan_Desawisata = $_POST['Ringkasan_Desawisata'];
            $Fasilitas_Desawisata = $_POST['Fasilitas_Desawisata'];
            $Syarat_dan_Ketentuan = $_POST['Syarat_dan_Ketentuan'];
            $Informasi_Tambahan = $_POST['Informasi_Tambahan'];


        $queryShow = "SELECT * FROM desa_wisata WHERE ID = '$ID';";
        $sqlShow = mysqli_query($conn, $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        if($_FILES['Foto_Desawisata']['name'] == ""){
            $Foto_Desawisata = $result['Foto_Desawisata'];
            //$Foto_Lokasi_Maps = $result['Foto_Lokasi_Maps'];
        } else {
            $Foto_Desawisata = $_FILES['Foto_Desawisata']['name'];
            unlink("img/".$result['Foto_Desawisata']);
            move_uploaded_file($_FILES['Foto_Desawisata']['tmp_name'], 'img/'.$_FILES['Foto_Desawisata']['name']);

        }
            $query = "UPDATE desa_wisata SET Judul_Desawisata='$Judul_Desawisata', kategori='$kategori', Deskripsi_Singkat='$Deskripsi_Singkat', Deskripsi_Desawisata='$Deskripsi_Desawisata',  Alamat_Desawisata='$Alamat_Desawisata', Link_Google_Maps='$Link_Google_Maps', Ringkasan_Desawisata='$Ringkasan_Desawisata', Fasilitas_Desawisata='$Fasilitas_Desawisata', Syarat_dan_Ketentuan='$Syarat_dan_Ketentuan', Informasi_Tambahan='$Informasi_Tambahan', Foto_Desawisata ='$Foto_Desawisata' WHERE ID = '$ID';";
            $sql = mysqli_query($conn, $query);
            header("location: crud.php");
        }
    }

    if(isset($_GET['hapus'])){
        $ID = $_GET['hapus'];

        $queryShow = "SELECT * FROM desa_wisata WHERE ID = '$ID';";
        $sqlShow = mysqli_query($conn, $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        //var_dump($result);

        unlink("img/".$result['Foto_Desawisata']);
        unlink("img/".$result['Foto_Lokasi_Maps']);
        //die();

        $query = "DELETE FROM desa_wisata WHERE ID = '$ID';";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: crud.php");
            //echo "Data Berhasil Ditambahkan <a href='crud.php'>[Home]</a>";
        } else {
            echo $query;
        }
        //echo "Hapus Data <a href='crud.php'>[Home]</a>";
    }
?>
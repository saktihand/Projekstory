<?php
    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){

            $Judul_Makanan = $_POST['Judul_Makanan'];
            $kategori = $_POST['kategori'];
            $Foto_Makanan = $_FILES['Foto_Makanan']['name'];
            $Deskripsi_Makanan = $_POST['Deskripsi_Makanan'];;
            $alamat = $_POST['alamat'];
            $Link_Google_Maps = $_POST['Link_Google_Maps'];
            $Kisaran_Harga = $_POST['Kisaran_Harga'];
            $dir = "img/";
            $tmpFile1 = $_FILES['Foto_Makanan']['tmp_name'];

            move_uploaded_file($tmpFile1, $dir.$Foto_Makanan);

            //die();

            $query = "INSERT INTO kuliner VALUES(null, '$Judul_Makanan', '$kategori', '$Foto_Makanan', '$Deskripsi_Makanan', '$alamat', '$Link_Google_Maps', '$Kisaran_Harga')";
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

            $ID_Kuliner = $_POST['ID_Kuliner'];
            $Judul_Makanan = $_POST['Judul_Makanan'];
            $kategori = $_POST['kategori'];
            $Foto_Makanan = $_FILES['Foto_Makanan']['name'];
            $Deskripsi_Makanan = $_POST['Deskripsi_Makanan'];;
            $alamat = $_POST['alamat'];
            $Link_Google_Maps = $_POST['Link_Google_Maps'];
            $Kisaran_Harga = $_POST['Kisaran_Harga'];


        $queryShow = "SELECT * FROM kuliner WHERE ID_Kuliner = '$ID_Kuliner';";
        $sqlShow = mysqli_query($conn, $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        if($_FILES['Foto_Makanan']['name'] == ""){
            $Foto_Makanan = $result['Foto_Makanan'];
            //$Foto_Lokasi_Maps = $result['Foto_Lokasi_Maps'];
        } else {
            $Foto_Makanan = $_FILES['Foto_Makanan']['name'];
            unlink("img/".$result['Foto_Makanan']);
            move_uploaded_file($_FILES['Foto_Makanan']['tmp_name'], 'img/'.$_FILES['Foto_Makanan']['name']);

        }
            $query = "UPDATE kuliner SET Judul_Makanan='$Judul_Makanan', kategori='$kategori', Deskripsi_Makanan='$Deskripsi_Makanan', alamat='$alamat', Link_Google_Maps='$Link_Google_Maps', Kisaran_Harga='$Kisaran_Harga', Foto_Makanan ='$Foto_Makanan' WHERE ID_Kuliner = '$ID_Kuliner';";
            $sql = mysqli_query($conn, $query);
            header("location: crud.php");
        }
    }

    if(isset($_GET['hapus'])){
        $ID_Kuliner = $_GET['hapus'];

        $queryShow = "SELECT * FROM kuliner WHERE ID_Kuliner = '$ID_Kuliner';";
        $sqlShow = mysqli_query($conn, $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        //var_dump($result);

        unlink("img/".$result['Foto_Makanan']);
        //die();

        $query = "DELETE FROM kuliner WHERE ID_Kuliner = '$ID_Kuliner';";
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
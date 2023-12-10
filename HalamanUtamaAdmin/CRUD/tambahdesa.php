<!DOCTYPE html>

<?php
  include 'koneksi.php';
      $ID = '';
      $Judul_Desawisata = '';
      $kategori = '';
      $Deskripsi_Singkat = '';
      $Deskripsi_Desawisata = '';
      $Alamat_Desawisata = '';
      $Link_Google_Maps = '';
      $Ringkasan_Desawisata = '';
      $Fasilitas_Desawisata = '';
      $Syarat_dan_Ketentuan = '';
      $Informasi_Tambahan = '';

    if(isset($_GET['ubah'])){
      $ID = $_GET['ubah'];
      
      $query = "SELECT * FROM desa_wisata WHERE ID = '$ID';";
      $sql = mysqli_query($conn, $query);
      //var_dump($result);

      $result = mysqli_fetch_assoc ($sql);

      $Judul_Desawisata = $result['Judul_Desawisata'];
      $kategori = $result['kategori'];
      $Deskripsi_Singkat = $result['Deskripsi_Singkat'];
      $Deskripsi_Desawisata = $result['Deskripsi_Desawisata'];
      $Alamat_Desawisata = $result['Alamat_Desawisata'];
      $Link_Google_Maps = $result['Link_Google_Maps'];
      $Ringkasan_Desawisata = $result['Ringkasan_Desawisata'];
      $Fasilitas_Desawisata = $result['Fasilitas_Desawisata'];
      $Syarat_dan_Ketentuan = $result['Syarat_dan_Ketentuan'];
      $Informasi_Tambahan = $result['Informasi_Tambahan'];

      //var_dump($result);

      //die();
    }
?>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="C:\xampp\htdocs\Projekstory\HalamanUtamaAdmin\CRUD\fontawesome\font-awesome-4.7.0\css\font-awesome.css">
    <title>CRUD</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light mb-3">
      <div class="container">
        <a class="navbar-brand" href="../../HalamanUtamaAdmin/halamanUtama_admin.php">
          STORY
        </a>
      </div>
    </nav>
    <div class="container">
        <form method="POST" action="proses.php" enctype="multipart/form-data">
          <input type="hidden" value="<?php echo $ID; ?>" name="ID">
        <div class="mb-3 row">
            <label for="nama_wisata" class="col-sm-2 col-form-label">Nama Desa Wisata</label>
            <div class="col-sm-10">
              <input required type="text" name="Judul_Desawisata" class="form-control" id="nama_wisata" placeholder="Nama Desa Wisata"  value="<?php echo $Judul_Desawisata;?>">
            </div>
          </div>
        <div class="mb-3 row">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <select required id="kategori" name="kategori" class="form-select">
                    <option <?php if($kategori == 'Edukasi-dan-Kesenian'){ echo "selected";} ?> value="Edukasi-dan-Kesenian">Edukasi dan Kesenian</option>
                    <option <?php if($kategori == 'Agrowisata'){ echo "selected";} ?> value="Agrowisata">Agrowisata</option>
                    <option <?php if($kategori == 'Alam'){ echo "selected";} ?> value="Alam">Alam</option>
                    <option <?php if($kategori == 'Sejarah-dan-Budaya'){ echo "selected";} ?> value="Sejarah-dan-Budaya">Sejarah dan Budaya</option>
                  </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="foto" class="col-sm-2 col-form-label">Foto Desa Wisata</label>
            <div class="col-sm-10">
                <input <?php if(!isset($_GET['ubah'])){ echo "required";} ?> class="form-control" type="file" name="Foto_Desawisata" id="foto" accept="image/*">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="deskripsisingkat" class="col-sm-2 col-form-label">Deskripsi Singkat</label>
            <div class="col-sm-10">
                <textarea required class="form-control" id="deskripsisingkat" name="Deskripsi_Singkat" rows="3"><?php echo $Deskripsi_Singkat;?></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <textarea required class="form-control" id="deskripsi" name="Deskripsi_Desawisata" rows="3"><?php echo $Deskripsi_Desawisata;?></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="foto-lokasi" class="col-sm-2 col-form-label">Foto Alamat Desa</label>
            <div class="col-sm-10">
                <input <?php if(!isset($_GET['ubah'])){ echo "required";} ?> class="form-control" type="file" name="Foto_Lokasi_maps" id="foto-lokasi" accept="image/*">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat Desa</label>
            <div class="col-sm-10">
              <input required type="text" class="form-control" id="alamat" name="Alamat_Desawisata" placeholder="Alamat Desa Wisata" value="<?php echo $Alamat_Desawisata; ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="link" class="col-sm-2 col-form-label">Link Alamat</label>
            <div class="col-sm-10">
              <input required type="text" class="form-control" id="link" name="Link_Google_Maps" placeholder="Link Alamat Desa Wisata" value="<?php echo $Link_Google_Maps; ?>" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="ringkasan" class="col-sm-2 col-form-label">Ringkasan</label>
            <div class="col-sm-10">
                <textarea required class="form-control" id="ringkasan" name="Ringkasan_Desawisata" rows="3"><?php echo $Ringkasan_Desawisata; ?></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="fasilitas" class="col-sm-2 col-form-label">Fasilitas</label>
            <div class="col-sm-10">
              <input required type="text" class="form-control" id="fasilitas" name="Fasilitas_Desawisata" placeholder="Fasilitas Desa Wisata" value="<?php echo $Fasilitas_Desawisata; ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="syarat" class="col-sm-2 col-form-label">Syarat & Ketentuan</label>
            <div class="col-sm-10">
              <input required type="text" class="form-control" id="syarat" name="Syarat_dan_Ketentuan" placeholder="" value="<?php echo $Syarat_dan_Ketentuan; ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="informasi" class="col-sm-2 col-form-label">Informasi Tambahan</label>
            <div class="col-sm-10">
              <input required type="text" class="form-control" id="informasi" name="Informasi_Tambahan" placeholder="Informasi Tambahan" value="<?php echo $Informasi_Tambahan; ?>">
            </div>
          </div>

          <div class="mb-3 row mt-4">
            <div class="col">
              <?php
                    if(isset($_GET['ubah'])){
              ?>
                <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i>
                    Simpan Perubahan
                </button>
                <?php
                    } else {
                      ?>
                <button type="submit" name="aksi" value="add" class="btn btn-primary">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i>
                    Tambahkan
                </button>
                <?php
                    }
                ?>
                <a href="crud.php" class="btn btn-danger">
                    <i class="fa fa-reply" aria-hidden="true"></i>
                    Batal
                </a>
            </div>
        </form>
            
          </div>
    </div>
  </body>
</html>
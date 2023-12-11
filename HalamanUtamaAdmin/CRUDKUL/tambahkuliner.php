<!DOCTYPE html>

<?php
  include 'koneksi.php';
      $ID_Kuliner = '';
      $Judul_Makanan = '';
      $Kategori = '';
      $Deskripsi_Makanan = '';
      $alamat = '';
      $Link_Google_Maps = '';
      $Kisaran_Harga = '';

    if(isset($_GET['ubah'])){
      $ID_Kuliner = $_GET['ubah'];
      
      $query = "SELECT * FROM kuliner WHERE ID_Kuliner = '$ID_Kuliner';";
      $sql = mysqli_query($conn, $query);
      //var_dump($result);

      $result = mysqli_fetch_assoc ($sql);

      $Judul_Makanan = $result['Judul_Makanan'];
      $Kategori = $result['Kategori'];
      $Deskripsi_Makanan = $result['Deskripsi_Makanan'];
      $alamat = $result['alamat'];
      $Link_Google_Maps = $result['Link_Google_Maps'];
      $Kisaran_Harga = $result['Kisaran_Harga'];

      //var_dump($result);

      //die();
    }
?>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="C:\xampp\htdocs\Projekstory\HalamanUtamaAdmin\CRUDKUL\fontawesome\font-awesome-4.7.0\css\font-awesome.css">
    <title>CRUD</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light mb-3">
      <div class="container">
        <a class="navbar-brand" href="../../HalamanUtamaAdmin/halamanKulinerAdmin.php">
          STORY
        </a>
      </div>
    </nav>
    <div class="container">
        <form method="POST" action="proses.php" enctype="multipart/form-data">
          <input type="hidden" value="<?php echo $ID_Kuliner; ?>" name="ID_Kuliner">
        <div class="mb-3 row">
            <label for="nama_kuliner" class="col-sm-2 col-form-label">Nama Kuliner</label>
            <div class="col-sm-10">
              <input required type="text" name="Judul_Makanan" class="form-control" id="nama_Makanan" placeholder="Nama Kuliner"  value="<?php echo $Judul_Makanan;?>">
            </div>
          </div>
        <div class="mb-3 row">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <select required id="kategori" name="kategori" class="form-select">
                    <option <?php if($Kategori == 'Gudeg'){ echo "selected";} ?> value="Gudeg">Gudeg</option>
                    <option <?php if($Kategori == 'Sate-Klathak'){ echo "selected";} ?> value="Sate-Klathak">Sate Klathak</option>
                    <option <?php if($Kategori == 'Bakmi-Jawa'){ echo "selected";} ?> value="Bakmi-Jawa">Bakmi Jawa</option>
                    <option <?php if($Kategori == 'Mungut-Lele'){ echo "selected";} ?> value="Mungut-Lele">Mungut Lele</option>
                    <option <?php if($Kategori == 'Lainnya'){ echo "selected";} ?> value="Lainnya">Lainnya</option>
                  </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="foto" class="col-sm-2 col-form-label">Foto Makanan</label>
            <div class="col-sm-10">
                <input <?php if(!isset($_GET['ubah'])){ echo "required";} ?> class="form-control" type="file" name="Foto_Makanan" id="foto" accept="image/*">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="deskripsiMakanan" class="col-sm-2 col-form-label">Deskripsi Makanan</label>
            <div class="col-sm-10">
                <textarea required class="form-control" id="deskripsiMakanan" name="Deskripsi_Makanan" rows="3"><?php echo $Deskripsi_Makanan;?></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input required type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="link" class="col-sm-2 col-form-label">Link Alamat</label>
            <div class="col-sm-10">
              <input required type="text" class="form-control" id="link" name="Link_Google_Maps" placeholder="Link Alamat Makanan" value="<?php echo $Link_Google_Maps; ?>" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="KisaranHarga" class="col-sm-2 col-form-label">Kisaran Harga</label>
            <div class="col-sm-10">
                <textarea required class="form-control" id="KisaranHarga" name="Kisaran_Harga" rows="3"><?php echo $Kisaran_Harga; ?></textarea>
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
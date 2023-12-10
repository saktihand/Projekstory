<?php
  include 'koneksi.php';

  $query = "SELECT * FROM desa_wisata;";
  $sql = mysqli_query($conn, $query);
  $no = 0;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="font-awesome.min.css">
    <title>CRUD</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          STORY
        </a>
      </div>
    </nav>

    <!--Judul-->
    <div class="container-fluid">
      <h1 class="mt-4">Data Desa Wisata</h1>
    <figure>
      <blockquote class="blockquote">
        <p>Berisi data yang telah disimpan di Database</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        CRUD <cite title="Source Title">Create Update Delete</cite>
      </figcaption>
    </figure>
    <a href="tambahdesa.php" type="button" class="btn btn-primary mb-3">
      <i class="fa fa-plus"></i>
      Tambah Data
    </a>
    <div class="table-responsive">
      <table class="table align-middle table-bordered table-hover">
        <thead>
          <tr>
            <th><center>ID</center></th>
            <th>Judul Desa Wisata</th>
            <th>Kategori</th>
            <th>Foto Desa Wisata</th>
            <th>Deskripsi</th>
            <th>Gambar Lokasi</th>
            <th>Alamat Lokasi</th>
            <th><center>Link</center></th>
            <th>Ringkasan</th>
            <th>Fasilitas</th>
            <th>Syarat</th>
            <th>Informasi Tambahan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
        while($result = mysqli_fetch_assoc($sql)){
        ?>
          <tr>
            <td><center>
              <?php echo ++$no; ?>.
            </center></td>
            <td>
            <?php echo $result['Judul_Desawisata']; ?>
          </td>
            <td><?php echo $result['kategori']; ?></td>
            <td>
              <img src="img/<?php echo $result['Foto_Desawisata']; ?>" style="width: 200px;">
            </td>
            <td><?php echo $result['Deskripsi_Singkat']; ?><td>
            <td><?php echo $result['Deskripsi_Desawisata']; ?><td>
              <img src="img/<?php echo $result['Foto_Lokasi_maps']; ?>" style="width: 200px;">
            </td>
            <td><?php echo $result['Alamat_Desawisata']; ?></td>
            <td><?php echo $result['Link_Google_Maps']; ?></td>
            <td><?php echo $result['Ringkasan_Desawisata']; ?></td>
            <td><?php echo $result['Fasilitas_Desawisata']; ?></td>
            <td><?php echo $result['Syarat_dan_Ketentuan']; ?></td>
            <td><?php echo $result['Informasi_Tambahan']; ?></td>
            <td>
              <a href="tambahdesa.php?ubah=<?php echo $result['ID']; ?>" type="button" class="btn btn-success btn-sm mb-3">
                <i class="fa fa-pencil"></i>
              </a>
              <a href="proses.php?hapus=<?php echo $result['ID']; ?>" type="button" class="btn btn-danger btn-sm mb-3" onClick= "return confirm('Apakah anda yakin ingin menghapus data tersebut?')">
                <i class="fa fa-trash"></i>
              </a>
            </td>
          </tr>
          <?php
        }
        ?>
          <tr class="align-bottom">
            ...
          </tr>
    </div>
  </body>
</html>
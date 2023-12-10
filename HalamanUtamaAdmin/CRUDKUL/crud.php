<?php
  include 'koneksi.php';

  $query = "SELECT * FROM kuliner;";
  $sql = mysqli_query($conn, $query);
  $no = 0;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="fontawesome\font-awesome-4.7.0\css\font-awesome.min.css">
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
      <h1 class="mt-4">Data Kuliner</h1>
    <figure>
      <blockquote class="blockquote">
        <p>Berisi data yang telah disimpan di Database</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        CRUD <cite title="Source Title">Create Update Delete</cite>
      </figcaption>
    </figure>
    <a href="tambahkuliner.php" type="button" class="btn btn-primary mb-3">
      <i class="fa fa-plus"></i>
      Tambah Data
    </a>
    <div class="table-responsive">
      <table class="table align-middle table-bordered table-hover">
        <thead>
          <tr>
            <th><center>ID</center></th>
            <th>Judul Makanan</th>
            <th>Kategori</th>
            <th>Foto Makanan</th>
            <th>Deskripsi</th>
            <th>Alamat Lokasi</th>
            <th>Link Google Maps</th>
            <th>Kisaran Harga</th>
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
            <?php echo $result['Judul_Makanan']; ?>
          </td>
            <td><?php echo $result['Kategori']; ?></td>
            <td>
              <img src="img/<?php echo $result['Foto_Makanan']; ?>" style="width: 200px;">
            </td>
            <td><?php echo $result['Deskripsi_Makanan']; ?></td>
            <td><?php echo $result['alamat']; ?></td>
            <td><?php echo $result['Link_Google_Maps']; ?></td>
            <td><?php echo $result['Kisaran_Harga']; ?></td>
            <td>
              <a href="tambahkuliner.php?ubah=<?php echo $result['ID_Kuliner']; ?>" type="button" class="btn btn-success btn-sm mb-3">
                <i class="fa fa-pencil"></i>
              </a>
              <a href="proses.php?hapus=<?php echo $result['ID_Kuliner']; ?>" type="button" class="btn btn-danger btn-sm mb-3" onClick= "return confirm('Apakah anda yakin ingin menghapus data tersebut?')">
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
<?php



function ubah($data) {
  global $conn;
  
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "UPDATE mahasiswa SET
              nama = '$nama',
              email = '$email',
              gambar = '$gambar'
          WHERE id = $id
          ";
  
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

//ambil data di url
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$user = query("SELECT * FROM pegunjung Where id = $id")[0]; 


// cek apakah tombol submit sudah ditekan
if ( isset($_POST["submit"]) ) {
 
    //cek apakah data berhasil diubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Anggota</title>
    <link rel="stylesheet" href="Profile_Anggota.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  </head>

  <body>
    <div class="container light-style flex-grow-1 container-p-y">
    <a href="halamanUtama_user.php"><i class="ri-arrow-left-line"></i></a>
      <h4 class="font-weight-bold py-3 mb-4">Pengaturan Akun</h4>
      <div class="card overflow-hidden">
        <div class="row no-gutters row-bordered row-border-light">
          <div class="col-md-3 pt-0">
            <div class="list-group list-group-flush account-settings-links">
              <a
                class="list-group-item list-group-item-action active"
                data-toggle="list"
                href="#account-general"
                >Umum</a
              >
              <a
                class="list-group-item list-group-item-action"
                data-toggle="list"
                href="#account-change-password"
                >Ganti Kata Sandi</a
              >
            </div>
          </div>
          <div class="col-md-9">
            <div class="tab-content">
              <div class="tab-pane fade active show" id="account-general">
                <div class="card-body media align-items-center">
                  <img
                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                    alt
                    class="d-block ui-w-80"
                  />
                  <div class="media-body ml-4">
                    <label class="btn btn-outline-primary">
                      Unggah foto baru
                      <input type="file" class="account-settings-fileinput" />
                    </label>
                    &nbsp;
                    <button type="button" class="btn btn-default md-btn-flat">
                      Reset
                    </button>
                  </div>
                </div>
                <hr class="border-light m-0" />
                <div class="card-body">
                  <div class="form-group">
                    <label class="form-label">Nama</label>
                    <input
                      type="text"
                      class="form-control"
                      value="<?= $user["nama"]; ?>"
                    />
                  </div>
                  <div class="form-group">
                    <label class="form-label">E-mail</label>
                    <input
                      type="text"
                      class="form-control mb-1"
                      value="<?= $user["email"]; ?>"
                    />
                  </div>
                  <div class="form-group">
                    <label class="form-label">Tanggal lahir</label>
                    <input
                      type="text"
                      class="form-control"
                      value="<?= $user["tanggal"]; ?>"
                    />
                  </div>

                </div>
              </div>
              <div class="tab-pane fade" id="account-change-password">
                <div class="card-body pb-2">
                  <div class="form-group">
                    <label class="form-label">Kata Sandi saat ini</label>
                    <input type="password" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label class="form-label">Kata Sandi Baru</label>
                    <input type="password" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label class="form-label">Ulangi kata sandi Baru</label>
                    <input type="password" class="form-control" />
                  </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-right mt-3">
        <button type="submit" class="btn btn-primary" name="submit">Simpan perubahan</button
        >&nbsp;
        <button type="submit" class="btn btn-default" name="submit">Batal</button>
      </div>
    </div>
    <script
      data-cfasync="false"
      src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
  </body>
</html>

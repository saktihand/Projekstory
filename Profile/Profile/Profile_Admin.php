<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "projekpdi");

// Ambil data dari URL
$email = $_SESSION['login'];

// Periksa apakah $id sudah diset sebelum digunakan dalam query
if ($email!== null) {
    // Query data mahasiswa berdasarkan id
    $user = query("SELECT * FROM admin WHERE email = '$email'")[0];
} else {
    // Tangani kasus ketika "id" tidak diset di dalam URL
    echo "ID tidak diberikan di dalam URL";
}


function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);

  if (!$result) {
      // Tangani kesalahan SQL
      die("Kesalahan SQL: " . mysqli_error($conn));
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
  }
  return $rows;
}




?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Admin</title>
    <link rel="stylesheet" href="Profile_Admin.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="container light-style flex-grow-1 container-p-y">
    <a href="../../HalamanUtamaAdmin/halamanUtama_admin.php"><i class="ri-arrow-left-line"></i></a>
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
                  
                </div>
                <hr class="border-light m-0" />
                <div class="card-body">
                  <div class="form-group">
                    <label class="form-label">Username</label>
                    <input
                      type="text"
                      class="form-control"
                      value="<?= $user["username"] ?>"
                    />
                  </div>
                  <div class="form-group">
                    <label class="form-label">E-mail</label>
                    <input
                      type="text"
                      class="form-control mb-1"
                      value="<?= $user["email"] ?>"
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

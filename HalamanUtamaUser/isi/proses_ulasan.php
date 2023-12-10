<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "projekpdi");

// Ambil data dari URL
$email = $_SESSION['login'];


// Periksa apakah $id sudah diset sebelum digunakan dalam query
if ($email!== null) {
    // Query data mahasiswa berdasarkan id
    $user = query("SELECT * FROM pengunjung WHERE email = '$email'")[0];
    // $user = query ("SELECT * id_pengunjung FROM pengunjung WHERE email = '$email'");

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

// Lakukan validasi data yang diterima
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan koneksi ke database sudah tersedia
    include 'connect_user.php';

    // Ambil data dari form
    $rating = $_POST['rating'];
    $opinion = $_POST['opinion'];
    $Id_DesaWisata = $_POST['Id_DesaWisata'];
    $id = $user['id_pengunjung'];

    $query = "INSERT INTO ulasan (ID_Pengunjung, ID_Desawisata, Ulasan, Penilaian, email) 
    VALUES (?, ?, ?, ?, ?)";
    
    $statement = mysqli_prepare($conn, $query);
    
    if ($statement) {
        mysqli_stmt_bind_param($statement, "iisis", $id, $Id_DesaWisata, $opinion, $rating, $email);
    
        $success = mysqli_stmt_execute($statement);
    
        if ($success) {
            header("Location: ../desaWisata_user.php?id=$Id_DesaWisata");
            exit();
        } else {
            echo "Gagal menyimpan ulasan ke database";
        }
    } else {
        echo "Kesalahan dalam menyiapkan statement SQL";
    }
    

    // Tutup statement
    mysqli_stmt_close($statement);

    // Tutup koneksi ke database
    mysqli_close($koneksi);
} else {
    // Tangani jika ada akses yang tidak sah atau tidak sesuai metode
    echo "Akses tidak sah ke halaman ini";
}
?>

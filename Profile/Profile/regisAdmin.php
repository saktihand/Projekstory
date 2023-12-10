<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "projekpdi");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    // ambil data dari tiap elemen form
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $pass = password_hash(htmlspecialchars($data["pass"]), PASSWORD_DEFAULT); // Hash the password

    // query insert data
    $query = "INSERT INTO admin
                VALUES
                ('', '$username', '$email', '$pass')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {

    // cek apakah data berhasil ditambah atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambah!');
                document.location.href = 'Profile_Admin.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal ditambah!');
            document.location.href = 'Registrasi_Admin.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrasi Admin</title>
</head>

<body>
    <h1>Registrasi Admin</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </li>
            <li>
                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="pass">Password:</label>
                <input type="password" name="pass" id="pass" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>

        </ul>
    </form>
</body>

</html>

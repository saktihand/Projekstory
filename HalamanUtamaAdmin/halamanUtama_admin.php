<!DOCTYPE html>
<html lang="en" id="home">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="../Logo/Logo.png"/>

  <link rel="stylesheet" href="tampilan/style_halamanUtama.css" />
  <title>dashboard admin</title>
</head>

<body>

<?php include 'isi/headerDesa.php'; ?>

<?php include 'isi/session.php'; ?>

  <!-- Konten desa wisata yang diambil dari database -->
  <?php include 'isi/konten.php'; ?>

  <?php include 'isi/service.php'; ?>

  <!-- Footer -->
  <?php include 'isi/footer.php'; ?>
  <!-- Footer -->

  <script src="tampilan/rwd_halamanUtama.js"></script>
</body>

</html>
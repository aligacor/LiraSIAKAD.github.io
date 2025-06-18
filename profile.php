<?php
include 'db.php';
$id = 1; // Static nanti ganti pas udah otomatis
$result = $conn->query("SELECT * FROM student WHERE id = $id");
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profil Siswa</title>
  <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div class="loader"></div>
    <div class="navbar">
        <a href="javascript:history.back()">
        <img src="asset/back.png" alt="Back" />
        </a>
        <a href="index.html">
        <img src="asset/home.png" alt="Home" />
        </a>
    </div>
  <div class="container">
    <div class="logo-container">
        <img src="asset/tutwuri.png" alt="Logo 1">
        <img src="asset/ht1.png" alt="Logo 2">
        <img src="asset/osis.png" alt="Logo 3">
    </div>
    
  <div class="container">
    <header>
      
      <h1>SMK Hang Tuah 1 Jakarta</h1>
      <p>Centre of excellence</p>
    </header>

    <div class="profile-card">
      <h2>Profil siswa</h2>
      <div class="content">
        <div class="left">
          <img src="asset/<?= $data['photo'] ?>" alt="Photo" class="profile-pic">
          <a href="edit_profil.php" class="edit-link">Edit Profile</a>
          <p><strong>Nama:</strong> <?= $data['name'] ?></p>
          <p><strong>NIK:</strong> <?= $data['nik'] ?></p>
          <p><strong>Kelas:</strong> <?= $data['class'] ?></p>
          <p><strong>Tanggal Lahir:</strong> <?= date('d/m/Y', strtotime($data['birth_date'])) ?></p>
          <p><strong>Alamat:</strong> <?= $data['address'] ?></p>
        </div>
        <div class="right">
          <h3>Kehadiran</h3>
          <p>Alfa: <?= $data['alfa'] ?></p>
          <p>Izin: <?= $data['izin'] ?></p>
          <p>Sakit: <?= $data['sakit'] ?></p>
        </div>
      </div>
    </div>
  </div>
  <script>
     window.addEventListener("load", () => {
      const loader = document.querySelector(".loader");

      loader.classList.add("loader-hidden");

      loader.addEventListener("transitionend", () => {
        document.body.removeChild(loader);
      })
    })

    
</script>
</body>
</html>

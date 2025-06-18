<?php
include 'db.php';
$id = 1;
$result = $conn->query("SELECT * FROM student WHERE id = $id");
$data = $result->fetch_assoc();
?>
<link rel="stylesheet" href="edit_profile.css">
<body>
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
    <h1>SMK Hang Tuah 1 Jakarta</h1>
    <p>Centre of Excellence</p>
    </div>
<div class="form-tambah">
<form action="update_profil.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $id ?>">
  <label>Nama:</label>
  <input type="text" name="name" value="<?= $data['name'] ?>" required>
  <label>NIK:</label>
  <input type="text" name="nik" value="<?= $data['nik'] ?>" required>
  <label>Kelas:</label>
  <input type="text" name="class" value="<?= $data['class'] ?>" required>
  <label>Tanggal Lahir:</label>
  <input type="date" name="birth_date" value="<?= $data['birth_date'] ?>" required>
  <label>Alamat:</label>
  <br>
  <textarea name="address"><?= $data['address'] ?></textarea>
  <br>
  <label>Ganti Foto:</label>
  <input type="file" name="photo">
  <button type="submit">Simpan</button>
</form>
</div>
<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM grades WHERE id = $id");
$row = $result->fetch_assoc();
?>
<link rel="stylesheet" href="edit.css">
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
      <h1>EDIT DATA</h1>
<form action="update.php" method="POST">
  <input type="hidden" name="id" value="<?= $row['id'] ?>">
  <input type="text" name="name" value="<?= $row['name'] ?>" required>
  <input type="number" name="tugas1" value="<?= $row['tugas1'] ?>" required>
  <input type="number" name="tugas2" value="<?= $row['tugas2'] ?>" required>
  <input type="number" name="tugas3" value="<?= $row['tugas3'] ?>" required>
  <input type="text" name="class" value="<?= $row['class'] ?>" required>
  <button type="submit">Update</button>
</form>
</div>
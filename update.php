<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$t1 = $_POST['tugas1'];
$t2 = $_POST['tugas2'];
$t3 = $_POST['tugas3'];
$class = $_POST['class'];

$avg = ($t1 + $t2 + $t3) / 3;

$sql = "UPDATE grades SET name=?, tugas1=?, tugas2=?, tugas3=?, average=?, class=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("siiiisi", $name, $t1, $t2, $t3, $avg, $class, $id);
$stmt->execute();

header("Location: admin.html");

<?php
include 'db.php';

$name = $_POST['name'];
$t1 = $_POST['tugas1'];
$t2 = $_POST['tugas2'];
$t3 = $_POST['tugas3'];
$class = $_POST['class'];

$avg = ($t1 + $t2 + $t3) / 3;

$sql = "INSERT INTO grades (name, tugas1, tugas2, tugas3, average, class)
        VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("siiiis", $name, $t1, $t2, $t3, $avg, $class);
$stmt->execute();

header("Location: admin.html");

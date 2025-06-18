<?php
include 'db.php';

$id         = $_POST['id'];
$name       = $_POST['name'];
$nik        = $_POST['nik'];
$class      = $_POST['class'];
$birth_date = $_POST['birth_date'];
$address    = $_POST['address'];

$photo = '';
if ($_FILES['photo']['name']) {
    $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
    $photo = uniqid() . '.' . $ext;
    move_uploaded_file($_FILES['photo']['tmp_name'], "asset/" . $photo);

    $conn->query("UPDATE student SET photo='$photo' WHERE id=$id");
}

$conn->query("UPDATE student SET name='$name', nik='$nik', class='$class', birth_date='$birth_date', address='$address' WHERE id=$id");

header("Location: profile.php");

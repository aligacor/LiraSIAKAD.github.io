<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM grades WHERE id = $id");
header("Location: admin.html");

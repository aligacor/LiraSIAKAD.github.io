<?php
session_start();
include 'db.php';

$name = $_POST['name'];
$password = $_POST['password'];
$role = $_POST['role'];

// Query user from DB
$sql = "SELECT * FROM users WHERE name = ? AND password = ? AND role = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $password, $role);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Login success
    $_SESSION['name'] = $name;
    $_SESSION['role'] = $role;

    // Redirect based on role
    if ($role === "admin") {
        header("Location: loading.html?to=admin.html");
    } elseif ($role === "teacher") {
        header("Location: loading.html?to=teacher.html");
    } elseif ($role === "student") {
        header("Location: loading.html?to=student.html");
    } else {
        echo "❌ Invalid role.";
    }
} else {
    echo "<script>alert('Login failed!'); window.location.href='login.html';</script>";
}
?>

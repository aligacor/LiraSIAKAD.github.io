<?php
include 'db.php';

$class = $_GET['class'] ?? 'XI RPL';

$sql = "SELECT * FROM grades WHERE class = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $class);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['name']}</td>
        <td>{$row['tugas1']}</td>
        <td>{$row['tugas2']}</td>
        <td>{$row['tugas3']}</td>
        <td>{$row['average']}</td>
        
    </tr>";
}
?>

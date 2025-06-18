<?php
$conn = new mysqli("localhost", "root", "", "school");

$result = $conn->query("SELECT * FROM grades WHERE class='XI AKL 2'");

while ($row = $result->fetch_assoc()) {
  echo "<tr>
    <td>{$row['name']}</td>
    <td>{$row['tugas1']}</td>
    <td>{$row['tugas2']}</td>
    <td>{$row['tugas3']}</td>
    <td>{$row['average']}</td>
  </tr>";
}

$conn->close();
?>

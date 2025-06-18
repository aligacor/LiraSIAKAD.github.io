<?php
session_start();
echo "Welcome " . $_SESSION['user'] . " (" . $_SESSION['role'] . ")";
?>

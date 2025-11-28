<?php
$conn = new mysqli("localhost", "DB_USERNAME", "DB_PASSWORD", "DB_NAME");
$id = intval($_GET['id']);
$conn->query("DELETE FROM comments WHERE id=$id");
header("Location: admin.php");
exit;
?>
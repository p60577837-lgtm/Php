<?php
$conn = new mysqli("localhost", "DB_USERNAME", "DB_PASSWORD", "DB_NAME");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$username = $conn->real_escape_string($_POST['username']);
$comment = $conn->real_escape_string($_POST['comment']);
$conn->query("INSERT INTO comments (username, comment) VALUES ('$username','$comment')");
header("Location: index.php");
exit;
}
?>
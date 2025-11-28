<?php
$conn = new mysqli("localhost", "DB_USERNAME", "DB_PASSWORD", "DB_NAME");
?>
<!DOCTYPE html>
<html>
<head><meta charset='UTF-8'><title>Admin Panel</title><link rel='stylesheet' href='style.css'></head>
<body>
<h1>Admin Panel - Manage Comments</h1>
<table border="1" cellpadding="10">
<tr><th>ID</th><th>User</th><th>Comment</th><th>Action</th></tr>
<?php
$get = $conn->query("SELECT * FROM comments ORDER BY id DESC");
while($row = $get->fetch_assoc()):
?>
<tr>
<td><?= $row['id']; ?></td>
<td><?= htmlspecialchars($row['username']); ?></td>
<td><?= htmlspecialchars($row['comment']); ?></td>
<td><a href="delete_comment.php?id=<?= $row['id']; ?>">Delete</a></td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>

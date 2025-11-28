<?php
$conn = new mysqli("localhost", "DB_USERNAME", "DB_PASSWORD", "DB_NAME");
?>
<!DOCTYPE html>
<html>
<head><meta charset='UTF-8'><title>My Website</title><link rel='stylesheet' href='style.css'></head>
<body>
<header><h1>Welcome to My Website</h1></header>

<section>
<h2>Contact Me</h2>
<form action="contact.php" method="POST">
<input type="text" name="name" placeholder="Your Name" required>
<input type="email" name="email" placeholder="Your Email" required>
<textarea name="message" placeholder="Your Message" required></textarea>
<button type="submit">Send Message</button>
</form>
</section>

<section>
<h2>Leave a Comment</h2>
<form action="save_comment.php" method="POST">
<input type="text" name="username" placeholder="Your Name" required>
<textarea name="comment" placeholder="Your Comment" required></textarea>
<button type="submit">Post Comment</button>
</form>

<h3>Recent Comments</h3>
<div>
<?php
$get = $conn->query("SELECT id, username, comment FROM comments ORDER BY id DESC LIMIT 20");
while($row = $get->fetch_assoc()):
?>
<div>
<strong><?= htmlspecialchars($row['username']); ?></strong>
<p><?= htmlspecialchars($row['comment']); ?></p>
</div>
<?php endwhile; ?>
</div>
</section>
</body>
</html>

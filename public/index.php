<?php
$host = 'db';
$user = 'root';
$pass = 'password';
$db = 'php';

echo "It actually works!!!!";

// Connect to DB
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert item (example: static user/item)
$conn->query("INSERT INTO orders (user, item) VALUES ('Alice', 'Pizza')");

// Display table
$result = $conn->query("SELECT * FROM orders");
echo "<table border='1'><tr><th>ID</th><th>User</th><th>Item</th><th>Time</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['user']}</td><td>{$row['item']}</td><td>{$row['created_at']}</td></tr>";
}
echo "</table>";

$conn->close();
?>

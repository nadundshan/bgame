<?php
$servername = "localhost";
$username = "root";
$password = "root@123"; // පස්වර්ඩ් තියෙන්නේ නම් ඒක දාන්න
$dbname = "banana_game"; // ඔයා හදපු database එකේ නම

// MySQL connection එක හදන්න
$conn = new mysqli($servername, $username, $password, $dbname);

// Connection එක check කරන්න
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
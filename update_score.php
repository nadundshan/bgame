<?php /* 
session_start();
include 'db.php'; // Include database connection

if (!isset($_SESSION['username'])) {
    echo 0; // Return 0 if no username is set
    exit();
}

$username = $_SESSION['username'];

// Fetch the user's current score from the database
$sql = "SELECT score FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("MySQL Error: " . $conn->error);
}

$stmt->bind_param("s", $username); // Bind the username
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    echo $user['score']; // Return the score to update on the page
} else {
    echo 0; // Default score if user is not found
}  */
?>
 
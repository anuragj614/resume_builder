<?php
include 'includes/auth.php';
include 'includes/db.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$resume_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

$sql = "DELETE FROM resumes WHERE id = $resume_id AND user_id = $user_id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


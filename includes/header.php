<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Resume Builder</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
    <h1>Resume Builder</h1>
    <nav>
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="index.php">Home</a>
            <a href="submit_resume.php">Build Resume</a>
            <a class="logout" href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        <?php endif; ?>
    </nav>
</header>

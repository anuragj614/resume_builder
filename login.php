<?php
include 'includes/db.php';
?>

<?php include 'includes/header.php'; ?>
<div class="container">
    <h2>Login</h2>
    <form action="login_process.php" method="POST">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>

    <p>Not registered yet? <a href="register.php">Register here</a>.</p>
</div>
<?php include 'includes/footer.php'; ?>

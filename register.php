<?php include 'includes/header.php'; ?>
<div class="container">
    <h2>Register</h2>
    <form action="register_process.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Register">
    </form>
</div>
<?php include 'includes/footer.php'; ?>

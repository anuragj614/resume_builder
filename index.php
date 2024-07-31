<?php
include 'includes/auth.php';
include 'includes/db.php';

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM resumes WHERE user_id = $user_id";
$result = $conn->query($sql);

include 'includes/header.php';
?>
<div class="container">
    <h2>Welcome to Resume Builder</h2>

    <?php if ($result->num_rows > 0): ?>
        <table class="resume-table">
            <thead>
                <tr>
                    <th>Resume</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td>
                            <a href="view_resume.php?id=<?php echo $row['id']; ?>" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="edit_resume.php?id=<?php echo $row['id']; ?>" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="delete_resume.php?id=<?php echo $row['id']; ?>" title="Delete">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No resumes found.</p>
    <?php endif; ?>
</div>
<?php
include 'includes/footer.php';
$conn->close();
?>

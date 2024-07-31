<?php
include 'includes/auth.php';
include 'includes/db.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$resume_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM resumes WHERE id = $resume_id AND user_id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "Resume not found.";
    exit();
}

$resume = $result->fetch_assoc();
?>

<?php include 'includes/header.php'; ?>
<h2>Edit Resume</h2>
<form action="update_resume.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $resume['id']; ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $resume['name']; ?>" required><br>
    
    <label for="job_title">Job Title:</label>
        <input type="text" id="job_title" name="job_title" value="<?php echo htmlspecialchars($resume['job_title']); ?>" required><br>

        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact" value="<?php echo htmlspecialchars($resume['contact']); ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($resume['email']); ?>" required><br>

        <label for="linkedin">LinkedIn:</label>
        <input type="text" id="linkedin" name="linkedin" value="<?php echo htmlspecialchars($resume['linkedin']); ?>" required><br>

        <label for="summary">Summary:</label>
        <textarea id="summary" name="summary" required><?php echo htmlspecialchars($resume['summary']); ?></textarea><br>

        <label for="experience">Experience:</label>
        <textarea id="experience" name="experience" required><?php echo htmlspecialchars($resume['experience']); ?></textarea><br>

        <label for="projects">Projects:</label>
        <textarea id="projects" name="projects" required><?php echo htmlspecialchars($resume['projects']); ?></textarea><br>

        <label for="achievements">Achievements:</label>
        <textarea id="achievements" name="achievements" required><?php echo htmlspecialchars($resume['achievements']); ?></textarea><br>

        <label for="skills">Skills:</label>
        <textarea id="skills" name="skills" required><?php echo htmlspecialchars($resume['skills']); ?></textarea><br>

        <label for="education">Education:</label>
        <textarea id="education" name="education" required><?php echo htmlspecialchars($resume['education']); ?></textarea><br>

        <label for="courses">Courses:</label>
        <textarea id="courses" name="courses" required><?php echo htmlspecialchars($resume['courses']); ?></textarea><br>

        <label for="passions">Passions:</label>
        <textarea id="passions" name="passions" required><?php echo htmlspecialchars($resume['passions']); ?></textarea><br>

    <input type="submit" value="Update">
</form>


<?php
include 'includes/auth.php';
include 'includes/db.php';
include 'includes/functions.php';

$resume_id = $_GET['id'];
$sql = "SELECT * FROM resumes WHERE id = $resume_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $resume = $result->fetch_assoc();
} else {
    echo "No resume found.";
    exit();
}

include 'includes/header.php';
?>
<div class="resume-container">
    <div class="resume-header">
        <h1><?php echo $resume['name']; ?></h1>
        <h2><?php echo $resume['job_title']; ?></h2>
        <p><?php echo $resume['contact']; ?></p>
        <p><?php echo $resume['email']; ?></p>
        <p><a href="<?php echo $resume['linkedin']; ?>">LinkedIn</a></p>
    </div>

    <div class="resume-content">
        <div class="resume-summary">
            <h3>SUMMARY</h3>
            <p><?php echo nl2br($resume['summary']); ?></p>
        </div>
        <div class="resume-section">
            <h3>EXPERIENCE</h3>
            <p><?php echo nl2br($resume['experience']); ?></p>
        </div>
        <div class="resume-section">
            <h3>EDUCATION</h3>
            <p><?php echo nl2br($resume['education']); ?></p>
        </div>
    </div>

    <div class="resume-sidebar">
        <div class="resume-sidebar-section">
            <h3>PROJECTS</h3>
            <p><?php echo nl2br($resume['projects']); ?></p>
        </div>
        <div class="resume-sidebar-section">
            <h3>ACHIEVEMENTS</h3>
            <p><?php echo nl2br($resume['achievements']); ?></p>
        </div>
        <div class="resume-sidebar-section">
            <h3>SKILLS</h3>
            <p><?php echo nl2br($resume['skills']); ?></p>
        </div>
        <div class="resume-sidebar-section">
            <h3>COURSES</h3>
            <p><?php echo nl2br($resume['courses']); ?></p>
        </div>
        <div class="resume-sidebar-section">
            <h3>PASSIONS</h3>
            <p><?php echo nl2br($resume['passions']); ?></p>
        </div>
    </div>
</div>

<?php $conn->close(); ?>

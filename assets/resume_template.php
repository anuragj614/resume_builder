<?php
function display_resume($resume) {
?>
    <div class="resume">
        <h2><?php echo $resume['name']; ?></h2>
        <p><strong>Job Title:</strong> <?php echo $resume['job_title']; ?></p>
        <p><strong>Contact:</strong> <?php echo $resume['contact']; ?></p>
        <p><strong>Email:</strong> <?php echo $resume['email']; ?></p>
        <p><strong>LinkedIn:</strong> <?php echo $resume['linkedin']; ?></p>
        <h3>Summary</h3>
        <p><?php echo $resume['summary']; ?></p>
        <h3>Experience</h3>
        <p><?php echo nl2br($resume['experience']); ?></p>
        <h3>Projects</h3>
        <p><?php echo nl2br($resume['projects']); ?></p>
        <h3>Achievements</h3>
        <p><?php echo nl2br($resume['achievements']); ?></p>
        <h3>Skills</h3>
        <p><?php echo $resume['skills']; ?></p>
        <h3>Education</h3>
        <p><?php echo nl2br($resume['education']); ?></p>
        <h3>Courses</h3>
        <p><?php echo nl2br($resume['courses']); ?></p>
        <h3>Passions</h3>
        <p><?php echo nl2br($resume['passions']); ?></p>
    </div>
<?php
}
?>

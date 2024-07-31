<?php
function display_resume($resume) {
    echo "<div class='resume'>";
    echo "<h2>{$resume['name']}</h2>";
    echo "<p><strong>Job Title:</strong> {$resume['job_title']}</p>";
    echo "<p><strong>Contact:</strong> {$resume['contact']}</p>";
    echo "<p><strong>Email:</strong> {$resume['email']}</p>";
    echo "<p><strong>LinkedIn:</strong> {$resume['linkedin']}</p>";
    echo "<p><strong>Summary:</strong> {$resume['summary']}</p>";
    echo "<p><strong>Experience:</strong> {$resume['experience']}</p>";
    echo "<p><strong>Projects:</strong> {$resume['projects']}</p>";
    echo "<p><strong>Achievements:</strong> {$resume['achievements']}</p>";
    echo "<p><strong>Skills:</strong> {$resume['skills']}</p>";
    echo "<p><strong>Education:</strong> {$resume['education']}</p>";
    echo "<p><strong>Courses:</strong> {$resume['courses']}</p>";
    echo "<p><strong>Passions:</strong> {$resume['passions']}</p>";
    echo "</div>";
}


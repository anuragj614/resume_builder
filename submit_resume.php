<?php
include 'includes/auth.php';
include 'includes/db.php';

include 'includes/header.php';
?>
<div class="container">
    <h2>Submit Resume</h2>
    <form action="submit_resume_process.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="job_title">Job Title:</label>
        <input type="text" id="job_title" name="job_title" required><br>

        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="linkedin">LinkedIn:</label>
        <input type="text" id="linkedin" name="linkedin" required><br>

        <label for="summary">Summary:</label>
        <textarea id="summary" name="summary" required></textarea><br>

        <label for="experience">Experience:</label>
        <textarea id="experience" name="experience" required></textarea><br>

        <label for="projects">Projects:</label>
        <textarea id="projects" name="projects" required></textarea><br>

        <label for="achievements">Achievements:</label>
        <textarea id="achievements" name="achievements" required></textarea><br>

        <label for="skills">Skills:</label>
        <textarea id="skills" name="skills" required></textarea><br>

        <label for="education">Education:</label>
        <textarea id="education" name="education" required></textarea><br>

        <label for="courses">Courses:</label>
        <textarea id="courses" name="courses" required></textarea><br>

        <label for="passions">Passions:</label>
        <textarea id="passions" name="passions" required></textarea><br>

        <input type="submit" value="Submit">
    </form>
</div>

<script>
function validateForm() {
    let requiredFields = ['name', 'job_title', 'contact', 'email', 'linkedin', 'summary', 'experience', 'projects', 'achievements', 'skills', 'education', 'courses', 'passions'];
    for (let i = 0; i < requiredFields.length; i++) {
        let field = document.getElementById(requiredFields[i]);
        if (field && field.value.trim() === '') {
            alert('Please fill out the ' + field.previousElementSibling.innerText.replace(':', '') + ' field.');
            field.focus();
            return false;
        }
    }

    // Validate email format
    let emailField = document.getElementById('email');
    let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(emailField.value)) {
        alert('Please enter a valid email address.');
        emailField.focus();
        return false;
    }

    // Additional custom validations can be added here

    return true; // Return true if validation passes
}
</script>


<?php
include 'includes/auth.php';
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resume_id = $_POST['id'];
    $name = $conn->real_escape_string($_POST['name']);
    $job_title = $conn->real_escape_string($_POST['job_title']);
    $contact = $conn->real_escape_string($_POST['contact']);
    $email = $conn->real_escape_string($_POST['email']);
    $linkedin = $conn->real_escape_string($_POST['linkedin']);
    $summary = $conn->real_escape_string($_POST['summary']);
    $experience = $conn->real_escape_string($_POST['experience']);
    $projects = $conn->real_escape_string($_POST['projects']);
    $achievements = $conn->real_escape_string($_POST['achievements']);
    $skills = $conn->real_escape_string($_POST['skills']);
    $education = $conn->real_escape_string($_POST['education']);
    $courses = $conn->real_escape_string($_POST['courses']);
    $passions = $conn->real_escape_string($_POST['passions']);
    $user_id = $_SESSION['user_id'];

    $sql = "UPDATE resumes SET name='$name', job_title='$job_title', contact='$contact', email='$email', linkedin='$linkedin', summary='$summary', experience='$experience', projects='$projects', achievements='$achievements', skills='$skills', education='$education', courses='$courses', passions='$passions' WHERE id=$resume_id AND user_id=$user_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: view_resume.php?id=$resume_id");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

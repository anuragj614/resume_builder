<?php
include 'includes/auth.php';
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
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

    $sql = "INSERT INTO resumes (user_id, name, job_title, contact, email, linkedin, summary, experience, projects, achievements, skills, education, courses, passions)
            VALUES ('$user_id', '$name', '$job_title', '$contact', '$email', '$linkedin', '$summary', '$experience', '$projects', '$achievements', '$skills', '$education', '$courses', '$passions')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();


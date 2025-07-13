<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = $conn->real_escape_string($_POST['name']);
    $email   = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $details = $conn->real_escape_string($_POST['details']);

    $sql = "INSERT INTO complaints (name, email, subject, details) VALUES ('$name', '$email', '$subject', '$details')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Complaint submitted successfully!'); window.location.href='homepage.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>

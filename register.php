<?php 
session_start();
include 'connect.php';

// Signup logic
if (isset($_POST['signUp'])) {
    $firstName = trim($_POST['fName']);
    $lastName = trim($_POST['lName']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid Email Format!";
        exit();
    }

    // No hashing, store password as plain text (visible)
    $visiblePassword = $password;

    // Check if email already exists
    $checkQuery = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($checkQuery);
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        // Insert user
        $insertQuery = "INSERT INTO users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }
        $stmt->bind_param("ssss", $firstName, $lastName, $email, $visiblePassword);
        if ($stmt->execute()) {
            header("Location: homepage.php");
            exit();
        } else {
            echo "Error inserting data: " . $stmt->error;
        }
    }
    $stmt->close();
}

// Signin logic (visible password check)
if (isset($_POST['signIn'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Compare plain passwords directly (NOT SECURE for real use)
        if ($password === $row['password']) {
            $_SESSION['email'] = $row['email'];
            header("Location: homepage.php");
            exit();
        } else {
            echo "Incorrect Password!";
        }
    } else {
        echo "Email Not Found!";
    }

    $stmt->close();
}

// Admin login logic (static)
define("ADMIN_USER", "admin");
define("ADMIN_PASS", "admin123"); // Plain text for demo

if (isset($_POST['login'])) {
    $user = trim($_POST['username']);
    $pass = trim($_POST['password']);

    if ($user === ADMIN_USER && $pass === ADMIN_PASS) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_user'] = ADMIN_USER;
        header("Location: adminhome.php");
        exit();
    } else {
        echo "Invalid Admin ID or Password!";
    }
}

$conn->close();
?>

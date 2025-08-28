<?php 
session_start();
require_once 'connection.php';

// Sign Up
if (isset($_POST['signUp'])) {
    $Firstname = $_POST['fName'];
    $Lastname = $_POST['lName'];
    $Email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if email already exists
    $stmt = $conn->prepare("SELECT Email FROM users WHERE Email = ?");
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['register_error'] = 'Email is already registered!';
        $_SESSION['active_form'] = 'register';
    } else {
        $stmt = $conn->prepare("INSERT INTO users (Firstname, Lastname, Email, Password, Role) VALUES (?, ?, ?, ?, 'user')");
        $stmt->bind_param("ssss", $Firstname, $Lastname, $Email, $password);
        $stmt->execute();
    }

    $stmt->close();
    header("Location: index.php");
    exit();
}

// Sign In
if (isset($_POST['signIn'])) {
    $Email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE Email = ?");
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['Password'])) {
            $_SESSION['Email'] = $user['Email'];
            $_SESSION['user_role'] = $user['Role']; // optional
            header("Location: dashboard.php"); // Redirect to a secure area
            exit();
        }
    }

    // Incorrect credentials
    $_SESSION['signIn_error'] = 'Incorrect email or password';
    $_SESSION['active_form'] = 'signIn';
    header("Location: index.php");
    exit();
}
?>

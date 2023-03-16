<?php

if (isset($_POST['register_btn'])) {
   // Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['cpassword'];

// Validate input
if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
    // Required fields were not filled in - display error message
    echo 'Please fill in all required fields.';
} else {
    // Check if username or email are already taken (assuming you have a database with user accounts)
    $db_host = 'localhost';
    $db_username = '';
    $db_password = '';
    $db_name = '';
    
    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
    
    $query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        // Username or email already exists - display error message
        echo 'Username or email already taken. Please choose a different one.';
    } else {
        // Add new user to database (after hashing password for security)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email','$hashed_password')";
        
        if(mysqli_query($conn,$query)){
            echo("Account created");

        }else {
            echo("error in registering account");
        }

        header("Location: index.php");

    }

}

}

?>
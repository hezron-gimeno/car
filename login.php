<?php
// Start the session
session_start();

if(isset($_POST["login_btn"])){

// Validate the login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=car', '', '');

    // Prepare the SQL statement
    $stmt = $db->prepare('SELECT id, username, password FROM users WHERE username = :username');

    // Bind parameters
    $stmt->bindParam(':username', $username);

    // Execute the query
    $stmt->execute();

    // Fetch the user
    $user = $stmt->fetch();

    // Verify the password
    if ($user && password_verify($password, $user['password'])) {
        // Password is correct, start the session
        $_SESSION['user_id'] = $user['id'];
        header('Location: dash.php');
        exit;
    } else {
        // Password is incorrect
        echo 'Incorrect username or password';
    }
}
}
?>

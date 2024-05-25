<?php
session_start();

// Check if the admin password is correct
if (isset($_POST['admin_pass']) && $_POST['admin_pass'] === 'jacobbatman') {
    // Get the user's IP address
    $user_ip = $_SERVER['REMOTE_ADDR'];

    // Get the number of active users on the site
    $active_users = count($_SESSION);

    // Display the admin panel
    echo "<h1>Admin Panel</h1>";
    echo "User IP: " . $user_ip . "<br>";
    echo "Active Users: " . $active_users . "<br>";
} else {
    // Display the login form
    echo "<h1>Admin Login</h1>";
    echo "<form method='post'>";
    echo "Password: <input type='password' name='admin_pass'><br>";
    echo "<input type='submit' value='Login'>";
    echo "</form>";
}
?>

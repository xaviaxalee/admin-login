<?php
// Database connection details
include ('../connect.php');


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST["admin_email"];
    $password = $_POST["admin_password"];
// Hash the provided password using MD5
    $hashedPassword = md5($password);
    // Query to check if the user exists
    $sql = "SELECT * FROM users WHERE admin_email = '$username' AND admin_password = '$hashedPassword'";
    $result = $conn->query($sql);

    // Check if the query returns any row
    if ($result->num_rows > 0) {
        // Successful login, redirect to index page or any other page
        header("Location: index.php");
        exit();
    } else {
        // Invalid credentials, you might want to handle this differently
        echo "Invalid username or password";
    }
}

// Close the database connection
$conn->close();
?>

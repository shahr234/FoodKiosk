<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "kiosk";

// Establishing a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming form data is submitted via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get email and password from the login form
    $email = $_POST['uname'];
    $password = $_POST['psw'];

    // Prepare SQL statement to retrieve user data
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, fetch user data
        $user = $result->fetch_assoc();
        
        // Retrieve the user's usertype
        $usertype = $user['userType'];

        // Redirect based on usertype
        switch ($usertype) {
            case 'Manager':
                header("Location: manager.php");
                break;
            case 'Student':
               header("Location: student.php");
                break;
            default:
                echo "Unknown usertype";
        }
    } else {
        echo "Invalid email or password.";
    }
}

// Close the database connection
$conn->close();
?>
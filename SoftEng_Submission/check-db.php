<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "kiosk";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get email and password from the login form
    $email = $_POST['uname'];
    $password = $_POST['psw'];

    
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $usertype = $user['userType'];
        
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

$conn->close();
?>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $confirmPassword = $_POST['con_psw'];

    // Validate form data (you can add more validation as needed)
    if ($password !== $confirmPassword) {
        echo "Passwords do not match!";
    } else {
        // Connect to database (replace with your actual database credentials)
        $servername = "localhost";
        $dbUsername = "root"; // Renamed to avoid conflict
        $dbPassword = "";     // Renamed to avoid conflict
        $dbname = "user";

        // Create connection
        $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute SQL query to insert user data into database
        $sql = "INSERT INTO student2 (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close database connection
        $conn->close();
    }
}
?>

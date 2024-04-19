<?php
// Start session
session_start();

$name = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['psw'];
$cpassword = $_POST['con_psw'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'user');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {

    $stmt = $conn->prepare("INSERT INTO `student2` (`sno`, `sname`, `email`, `password`, `c_password`) VALUES (?, ?, ?, ?, ?)");


    $stmt->bind_param("sssss", $sno, $name, $email, $password, $cpassword);
    $stmt->execute();
   

  
    $stmt->close();
    $conn->close();

    
    $_SESSION['login_success'] = true;

  
    header("Location: index.php");
    exit();
}
?>

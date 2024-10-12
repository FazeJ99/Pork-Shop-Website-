<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL); 

include 'connect.php';

// Start the session at the beginning of the script
session_start();

if(isset($_POST['signUp'])){
    $email = strtolower($_POST['email']);  // Normalize email case
    $password = $_POST['password'];
    $hashedpassword = password_hash($password , PASSWORD_DEFAULT);

    // Use prepared statement for checking existing email
    $checkEmail = $conn->prepare("SELECT * FROM porkshop WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if($result->num_rows > 0){
        echo "Email address already exists!";
    } else {
        $stmt = $conn->prepare("INSERT INTO porkshop (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $hashedpassword);
        if($stmt->execute()){
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}
if(isset($_POST['signIn'])){
    $email = strtolower($_POST['email']);  // Normalize email case
    $password = $_POST['password'];

    // Prepare the SQL statement for login
    $stmt = $conn->prepare("SELECT email, password FROM porkshop WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    // Bind result variables
    $stmt->bind_result($db_email, $db_password);
    
    // Fetch the results
    if($stmt->fetch()){
        // Verify the password
        if(password_verify($password, $db_password)){
            $_SESSION['email'] = $db_email;  // Set session
            header("Location: pork.php");
            exit();
        } else {
            echo "Incorrect Email or Password";
        }
    } else {
        echo "Not Found, Incorrect Email or Password";
    }

    // Close the statement
    $stmt->close();
}

?>

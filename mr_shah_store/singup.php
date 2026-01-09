<?php
include 'db_connect.php';

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$contact = $_POST['contact_no'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$password = $_POST['password'];

// Check duplicate email or phone
$check = $conn->prepare("SELECT * FROM users WHERE email=? OR contact_no=?");
$check->bind_param("ss", $email, $contact);
$check->execute();
$result = $check->get_result();

if ($result->num_rows > 0) {
    echo "Email or Contact already exists!";
    exit();
}

// Encrypt password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert data
$stmt = $conn->prepare("INSERT INTO users (full_name,email,contact_no,dob,gender,password) VALUES (?,?,?,?,?,?)");
$stmt->bind_param("ssssss", $full_name, $email, $contact, $dob, $gender, $hashed_password);

if ($stmt->execute()) {
    echo "Signup successful! <a href='login.html'>Login</a>";
} else {
    echo "Error occurred!";
}
?>

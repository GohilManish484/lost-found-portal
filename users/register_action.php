<?php
include '../config/db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

// ✅ Check if email already exists
$check = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $check);

if (mysqli_num_rows($result) > 0) {
    echo "❗ Email already registered. Try logging in.";
} else {
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "✅ Registration successful.";
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }
}
?>

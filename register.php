<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Register</h2>
    <form action="users/Register_action.php" method="POST">
        <label>Full Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        
        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Register">

    </form>
    <p>Already have an account? <a href="login.php">Login here</a></p>
    <a href="index.php">Back to Home</a>
</body>
</html>
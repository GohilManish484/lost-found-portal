<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
    <link rel="stylesheet" href="/lost_found_portal/assets/css/style.css">

</head>
<body>

    <div class="container">
            <h2>User Registration</h2>
       <form action="users/register_action.php" method="POST">
           <input type="text" name="name" placeholder="Full Name" required>
           <input type="email" name="email" placeholder="Email Address" required>
           <input type="password" name="password" placeholder="Password" required>
           <button type="submit">Register</button>
       </form>
    </div>

    <p>Already have an account? <a href="login.php">Login here</a></p>
    <a href="index.php">Back to Home</a>
</body>
</html>
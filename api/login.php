<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION['user'])) {
    header('Location: search.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Dummy login credentials
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'johndoe123' && $password == 'password') {
        // Store the user in session
        $_SESSION['user'] = $username;
        header('Location: search.php');
        exit();
    } else {
        echo "<script>alert('Invalid credentials!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - E-Commerce</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #333;
            color: white;
            padding: 1em;
            text-align: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 1em;
            font-size: 1.2em;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: white;
            padding: 20px;  /* Add this */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;  /* Add this to ensure padding is included in width */
        }

        input[type="text"], input[type="password"] {
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;  /* Add this to ensure padding is included in width */
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .btn {
            background-color: #28a745;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: block;
            border-radius: 4px;
            margin-top: 15px;
        }

        .error-message, .welcome-message {
            text-align: center;
            color: red;
            margin-bottom: 10px;
        }

        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">Shop</a>
        <a href="#">Contact</a>
        <a href="#">Login</a>
    </div>

    <div class="container">
        <h2>Login</h2>
        <form method="post" action="">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login" class="btn">
        </form>
    </div>

</body>
</html>
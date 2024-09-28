<?php
session_start();

if (!isset($_SESSION['user'])) {
    die("You must be logged in to access this page. <a href='login.php'>Login here</a>");
}

// Get the username from the session
$username = $_SESSION['user'];

// Simulate a search form
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Products</title>
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
            max-width: 800px;
            margin: 2em auto;
            padding: 2em;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="text"] {
            padding: 0.5em;
            margin-bottom: 1em;
            width: 100%;
            max-width: 400px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 0.5em 1em;
            border: none;
            background-color: #333;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        .welcome-message {
            text-align: center;
            margin-bottom: 1.5em;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="#">Home</a>
    <a href="#">Shop</a>
    <a href="#">Contact</a>
    <a href="logout.php">Logout</a>
</div>

<div class="container">
    <div class="welcome-message">
        <h3>Welcome, <?php echo $username; ?>!</h3>
    </div>

    <h2>Search Products</h2>
    <form method="get" action="">
        <input type="text" name="query" placeholder="Enter product name...">
        <input type="submit" value="Search">
    </form>

    <?php
    if (isset($_GET['query'])) {
        // Allowing XSS for demonstration
        $query = $_GET['query'];
        echo "<p>You searched for: <strong>" . $query . "</strong></p>";
    }
    ?>
</div>

</body>
</html>
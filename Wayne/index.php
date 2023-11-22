<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form id="loginForm" action="your_php_file.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <span class="icon">✉</span>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <span class="icon">🔑</span>

            <button type="submit">Login</button>
        </form>
        <p id="errorMessage"></p>
    </div>
    <script src="script.js"></script>
</body>
</html>
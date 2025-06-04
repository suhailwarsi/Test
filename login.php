<?php
session_start();
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $valid_users = [
        'admin' => 'password123',
        'user' => 'secret'
    ];
    if (isset($valid_users[$username]) && $valid_users[$username] === $password) {
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
        exit;
    } else {
        $error = 'Invalid username or password.';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if ($error): ?>
    <p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

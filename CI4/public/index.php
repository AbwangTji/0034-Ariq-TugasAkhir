<?php
/*
 *---------------------------------------------------------------
 * CHECK PHP VERSION
 *---------------------------------------------------------------
 */

$minPhpVersion = '8.1'; // If you update this, don't forget to update `spark`.
if (version_compare(PHP_VERSION, $minPhpVersion, '<')) {
    $message = sprintf(
        'Your PHP version must be %s or higher to run CodeIgniter. Current version: %s',
        $minPhpVersion,
        PHP_VERSION
    );

    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo $message;

    exit(1);
}

/*
 *---------------------------------------------------------------
 * LOGIN FUNCTIONALITY
 *---------------------------------------------------------------
 */

// Check if the login form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Simulated user data (replace with a database lookup in production)
    $validUsers = [
        'admin' => 'posyandu123', // Username => Password
        'petugas' => 'petugaspos456',
    ];

    // Validate credentials
    if (isset($validUsers[$username]) && $validUsers[$username] === $password) {
        session_start();
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;

        // Redirect to a dashboard or home page
        header('Location: dashboard.php');
        exit();
    } else {
        $error = 'Username atau password salah.';
    }
}

/*
 *---------------------------------------------------------------
 * SHOW THE LOGIN FORM
 *---------------------------------------------------------------
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Posyandu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-container img {
            width: 80px;
            margin-bottom: 15px;
        }
        .login-container h1 {
            margin-bottom: 15px;
            color: #007bff;
            font-size: 24px;
        }
        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            transition: background 0.3s;
        }
        button:hover {
            background: #218838;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="logo.png" alt="Posyandu Logo">
        <h1>Sistem Informasi Posyandu</h1>
        <?php if (!empty($error)) : ?>
            <p class="error"><?= $error ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div class="footer">
            © <?= date('Y') ?> Posyandu. All rights reserved.
        </div>
    </div>
</body>
</html>

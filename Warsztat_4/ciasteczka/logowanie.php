<?php
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

if ($username === 'admin' && $password === 'admin123') {
    setcookie('loggedIn', $username, time() + 3600);
    header('Location: zad2.2a.php');
    exit;
} else {
    $error = 'Nieprawidłowa nazwa użytkownika lub hasło';
}}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formularz logowania</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <h2>Logowanie</h2>
        <?php if(isset($error)): ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
        <input type="text" name="username" placeholder="Nazwa użytkownika" required><br><br>
        <input type="password" name="password" placeholder="Hasło" required><br><br>
        <input type="submit" name="submit" value="Zaloguj">
    </form>
</body>
</html>
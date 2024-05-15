<?php
session_start();

// Перевіряємо, чи користувач вже авторизований
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    echo "Добрий день, {$_SESSION['username']}! <a href='logout.php'>Вийти</a>";
    exit; // Завершуємо виконання скрипта, оскільки користувач вже авторизований
}

// Перевіряємо, чи була відправлена форма
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Перевіряємо, чи введені дані співпадають з логіном та паролем
    if($_POST['login'] === 'Admin' && $_POST['password'] === 'password') {
        // Якщо дані співпадають, зберігаємо інформацію про авторизацію у сесії
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = 'Admin'; // Зберігаємо ім'я користувача
        header('Location: ' . $_SERVER['PHP_SELF']); // Перенаправляємо користувача на ту саму сторінку
        exit;
    } else {
        $error_message = "Невірний логін або пароль";
    }
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма авторизації</title>
</head>
<body>

<?php if(isset($error_message)) { ?>
    <p><?php echo $error_message; ?></p>
<?php } ?>

<form method="POST">
    <label for="login">Логін:</label><br>
    <input type="text" id="login" name="login"><br>
    <label for="password">Пароль:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Увійти">
 

</form>

</body>
</html>

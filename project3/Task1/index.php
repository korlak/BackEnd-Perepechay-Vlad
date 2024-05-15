<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3.1</title>
</head>

<?php
    session_start();

    // Функція для встановлення розміру шрифту
    function setFontSize($size)
    {
        $_SESSION['fontSize'] = $size;
    }

    // Перевірка, чи встановлений розмір шрифту у сесії
    if (isset($_SESSION['fontSize'])) {
        $fontSize = $_SESSION['fontSize'];
    } else {
        // Розмір шрифту за замовчуванням2
        $fontSize = '16px';
    }

    // Перевірка, чи було натиснуте посилання для встановлення розміру шрифту
    if (isset($_GET['size'])) {
        $size = $_GET['size'];
        // Встановлення розміру шрифту
        setFontSize($size);
        // Перенаправлення на поточну сторінку, щоб оновити розмір шрифту
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
    ?>

<body style="font-size: <?php echo $fontSize; ?>">
    
    <h1>Виберіть розмір шрифту:</h1>
    <ul>
        <li><a href="?size=20px">Великий шрифт</a></li>
        <li><a href="?size=16px">Середній шрифт</a></li>
        <li><a href="?size=12px">Маленький шрифт</a></li>
        <p>1234567890</p>
    </ul>
</body>

</html>
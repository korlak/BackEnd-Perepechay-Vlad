<?php
session_start();

// Перевіряємо, чи користувач вже авторизований
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Знищуємо сесію
    session_unset(); // Видаляємо всі змінні сесії
    session_destroy(); // Знищуємо сесію
}

// Перенаправляємо користувача на головну сторінку
header('Location: index.php');
exit;

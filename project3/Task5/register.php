<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    if (!empty($login) && !empty($password)) {
        $baseDir = 'users/';
        $userDir = $baseDir . $login;

        if (!file_exists($userDir)) {
            mkdir($userDir, 0777, true);
            mkdir($userDir . '/video');
            mkdir($userDir . '/music');
            mkdir($userDir . '/photo');

            // Створення декількох файлів всередині цих папок
            file_put_contents($userDir . '/video/sample_video.txt', 'Це зразок відеофайлу.');
            file_put_contents($userDir . '/music/sample_music.txt', 'Це зразок музичного файлу.');
            file_put_contents($userDir . '/photo/sample_photo.txt', 'Це зразок фотофайлу.');

            echo "Користувач '$login' був успішно зареєстрований!";
        } else {
            echo "Помилка: Папка для користувача '$login' вже існує.";
        }
    } else {
        echo "Будь ласка, введіть логін та пароль.";
    }
}
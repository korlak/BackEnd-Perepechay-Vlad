<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Видалення користувача</title>
</head>
<body>
    <form action="delete.php" method="post">
        <label for="login">Логін:</label>
        <input type="text" id="login" name="login" required><br><br>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Видалити</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = trim($_POST['login']);
        $password = trim($_POST['password']);

        if (!empty($login) && !empty($password)) {
            $baseDir = 'users/';
            $userDir = $baseDir . $login;

            if (file_exists($userDir)) {
                function deleteDir($dirPath) {
                    if (!is_dir($dirPath)) {
                        throw new InvalidArgumentException("$dirPath must be a directory");
                    }
                    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
                        $dirPath .= '/';
                    }
                    $files = glob($dirPath . '*', GLOB_MARK);
                    foreach ($files as $file) {
                        if (is_dir($file)) {
                            deleteDir($file);
                        } else {
                            unlink($file);
                        }
                    }
                    rmdir($dirPath);
                }

                deleteDir($userDir);
                echo "Користувач '$login' був успішно видалений.";
            } else {
                echo "Помилка: Папка для користувача '$login' не існує.";
            }
        } else {
            echo "Будь ласка, введіть логін та пароль.";
        }
    }
    ?>
</body>
</html>

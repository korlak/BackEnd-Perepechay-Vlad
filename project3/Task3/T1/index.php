<?php
// Функція для збереження коментарів у файл
function saveComment($name, $comment) {
    $filename = "comments.txt";
    $fp = fopen($filename, 'a'); // Відкриваємо файл для запису в кінець
    fwrite($fp, "$name|$comment\n"); // Записуємо коментар у форматі "ім'я|коментар"
    fclose($fp); // Закриваємо файл
}

// Опрацювання введених даних з форми
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $comment = $_POST['comment'] ?? '';

    if (!empty($name) && !empty($comment)) {
        saveComment($name, $comment);
        // Перенаправляємо користувача на ту ж сторінку, щоб уникнути повторного надсилання форми
        header("Location: {$_SERVER['PHP_SELF']}");
        exit;
    }
}

// Виведення всіх коментарів
$filename = "comments.txt";
if (file_exists($filename)) {
    $fp = fopen($filename, 'r'); // Відкриваємо файл для читання
    echo "<h2>Коментарі:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Ім’я</th><th>Коментар</th></tr>";
    while (!feof($fp)) { // Поки не досягнемо кінця файлу
        $line = fgets($fp); // Читаємо рядок з файлу
        if ($line !== false) {
            list($name, $comment) = explode('|', $line); // Розділяємо рядок на ім'я та коментар
            echo "<tr><td>$name</td><td>$comment</td></tr>"; // Виводимо коментар у таблицю
        }
    }
    echo "</table>";
    fclose($fp); // Закриваємо файл
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Книга відгуків</title>
</head>
<body>

<h2>Додати коментар</h2>
<form method="post" action="">
    <label for="name">Ім’я:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="comment">Коментар:</label><br>
    <textarea id="comment" name="comment"></textarea><br><br>
    <input type="submit" value="Додати">
</form>

</body>
</html>
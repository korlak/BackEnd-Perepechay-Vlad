<?php

function getWordsFromFile($filename)
{
    $content = file_get_contents($filename);
    $words = preg_split('/\s+/', trim($content));
    return array_filter($words);
}

// Обробка файлів
$file1Words = getWordsFromFile('file1.txt');
$file2Words = getWordsFromFile('file2.txt');

$fileOnlyInFirst = 'only_in_first.txt';
$fileInBoth = 'in_both.txt';
$fileMoreThanTwice = 'more_than_twice.txt';

$onlyInFirst = array_diff($file1Words, $file2Words);
file_put_contents($fileOnlyInFirst, implode(PHP_EOL, $onlyInFirst));

$inBoth = array_intersect($file1Words, $file2Words);
file_put_contents($fileInBoth, implode(PHP_EOL, $inBoth));

function getWordsMoreThanTwice($words)
{
    $wordCounts = array_count_values($words);
    return array_keys(array_filter($wordCounts, function ($count) {
        return $count > 2;
    }));
}

$wordsMoreThanTwice = array_unique(
    array_merge(
        getWordsMoreThanTwice($file1Words),
        getWordsMoreThanTwice($file2Words)
    )
);
file_put_contents($fileMoreThanTwice, implode(PHP_EOL, $wordsMoreThanTwice));

// Впорядкування слів за алфавітом
function sortWordsInFile($filename)
{
    $words = getWordsFromFile($filename);
    sort($words);
    file_put_contents($filename, implode(PHP_EOL, $words));
}

sortWordsInFile('file1.txt');
sortWordsInFile('file2.txt');

echo "Файли оброблено та впорядковано успішно!";

?>
<!DOCTYPE html>
<html>

<head>
    <title>Видалення файлу</title>
</head>

<body>
    <form method="post">
        <label for="filename">Введіть ім'я файлу для видалення:</label>
        <input type="text" id="filename" name="filename" required>
        <button type="submit">Видалити файл</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $filename = $_POST['filename'];
        if (file_exists($filename)) {
            unlink($filename);
            echo "Файл '$filename' був успішно видалений.";
        } else {
            echo "Файл '$filename' не знайдено.";
        }
    }
    ?>
</body>

</html>
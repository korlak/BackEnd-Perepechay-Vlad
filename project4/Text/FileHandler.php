<?php
namespace Text;
class FileHandler {
    public static $dir = "text";

    public static function readFromFile($filename) {
        $filePath = self::$dir . "/" . $filename;
        if (file_exists($filePath)) {
            return file_get_contents($filePath);
        } else {
            return "Файл '$filename' не існує";
        }
    }

    public static function writeToFile($filename, $content) {
        $filePath = self::$dir . "/" . $filename;
        file_put_contents($filePath, $content, FILE_APPEND);
        return "Записано до файлу '$filename'";
    }

    public static function clearFile($filename) {
        $filePath = self::$dir . "/" . $filename;
        file_put_contents($filePath, "");
        return "Вміст файлу '$filename' очищено";
    }
}


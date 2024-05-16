<?php
use Controllers\UserController;
use Models\UserModel;
use Views\UserView;
use Circle\UserCircle;
use Text\FileHandler;
use Human\Human;
use Human\Programmer;
use Human\Student;

function autoload($class) : void{
    // Перетворюємо простір імен на шлях до файлу
    $path = str_replace('\\', '/', $class) . '.php';

    // Логування для діагностики
    error_log("Autoloading class: $class, path: $path");

    if (is_file($path)) {
        require_once($path);
    } else {
        error_log("File not found: $path");
    }
  }
spl_autoload_register("autoload");

$contr1 = new UserModel("123");
$contr2 = new UserView("456");
$contr3 = new UserController("784");
$contr1->stringLenght("123");
$contr2->stringReverse("456");
$contr3->stringShuffle("789");

echo "<br>" . "-------------" . "<br>";

$circle = new UserCircle(3, 4, 5);

echo $circle . "\n" . "<br>";

$circle->setX(6);
$circle->setY(8);
$circle->setRadius(10);

echo "X: " . $circle->getX() . "\n" . "<br>";
echo "Y: " . $circle->getY() . "\n" . "<br>";
echo "Радіус: " . $circle->getRadius() . "\n" . "<br>";

echo "<br>" . "-------------" . "<br>";

$circle1 = new UserCircle(3, 4, 5);
$circle2 = new UserCircle(6, 8, 10);

// Перевірка перетину кол
if ($circle1->intersects($circle2)) {
  echo "Кола перетинаються\n";
} else {
  echo "Кола не перетинаються\n";
}

echo "<br>" . "-------------" . "<br>";

// Перевірка роботи методу на читання з файлу
echo FileHandler::readFromFile("text1.txt") . "\n";

// Перевірка роботи методу на запис до файлу
echo FileHandler::writeToFile("text2.txt", "Це новий рядок\n");

// Перевірка роботи методу на очищення файлу
echo FileHandler::clearFile("text3.txt") . "\n";

echo "<br>" . "-------------" . "<br>";

// Приклад використання класів
$student = new Student();
$student->setHeight(175);
$student->setWeight(70);
$student->setAge(20);
$student->setUniversity("Житомирська Політехніка");
$student->setCourse(1);
$student->birthMessage();
echo "<br>";
$student->cleanRoom(); 
$student->cleanKitchen(); 
echo "Студент університету " . $student->getUniversity() . ". Курс " . $student->getCourse() . "\n". "<br>";
echo "Зріст: " . $student->getHeight() . " см, Вага: " . $student->getWeight() . " кг, Вік: " . $student->getAge() . " років\n". "<br>";

$student->moveToNextCourse();
echo "<br>" ."Студент переведений на наступний курс. Новий курс: " . $student->getCourse() . "\n". "<br>";

$programmer = new Programmer();
$programmer->setHeight(180);
$programmer->setWeight(75);
$programmer->setAge(25);
$programmer->setProgrammingLanguages(["PHP", "JavaScript"]);
$programmer->setExperience("3 роки");
$programmer->birthMessage();

echo "<br>";
$programmer->cleanRoom(); 
$programmer->cleanKitchen(); 

echo "Програміст з досвідом роботи " . $programmer->getExperience() . "\n" . "<br>";
echo "Зріст: " . $programmer->getHeight() . " см, Вага: " . $programmer->getWeight() . " кг, Вік: " . $programmer->getAge() . " років\n". "<br>";
echo "Володіння мовами програмування: " . implode(", ", $programmer->getProgrammingLanguages()) . "\n". "<br>";
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Task2</title>
    <style>
        body {
            font-size: 12px;
            color: #383838;
            font-family: "Lucida Console", "Courier New", monospace;
            line-height: 1.5;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
    function sortArray($arr)
    {
        $sameElements = array();

        $counter = array_count_values($arr);

        foreach ($counter as $element => $count) {
            if ($count > 1) {
                $sameElements[] = $element;
            }
        }

        if (empty($sameElements)) {
            echo "Немає повторюючихся елементів у масиві";
        } else {
            echo "Повторюючіся елементи: " . implode(', ', $sameElements);
        }
    }
    function generate_animal_name($animalType)
    {

        $cats = ['Снікерс', 'Маруся', 'Сандаль', 'Марк\'ян', 'Бочонок'];
        $dogs = ['Барон', 'Бобік', 'Вольт', 'Магнум', 'Лорд', 'Пушок'];
        $hamsters = ['Горошок', 'Ваня', 'Олег', 'Квіточка', 'Яблочко'];
        switch ($animalType) {
            case "Кішка":
                $animalNames = $cats;
                break;
            case "Собака":
                $animalNames = $dogs;
                break;
            case "Хомячок":
                $animalNames = $hamsters;
                break;
            default:
                return "Невірний тип тварини!";
        }

        $randomIndex = array_rand($animalNames);
        return $animalNames[$randomIndex];
    }
    function createArray()
    {
        $length = rand(3, 7);

        $array = [];
        for ($i = 0; $i < $length; $i++) {
            $array[] = rand(10, 20);
        }

        return $array;
    }
    function mergeAndSortArrays($array1, $array2)
    {
        $mergedArray = array_merge($array1, $array2);

        $uniqueArray = array_unique($mergedArray);

        sort($uniqueArray);

        return $uniqueArray;
    }
    $users = array(
        "Іван" => 25,
        "Марія" => 30,
        "Петро" => 20,
        "Олена" => 35
    );

    function sortUsersArray($array, $sortBy)
    {
        if ($sortBy == 'age') {
            asort($array);
        } elseif ($sortBy == 'name') {
            ksort($array);
        } else {
            return "Неправильний параметр сортування!";
        }

        return $array;
    }


    ?>

    <hr>
    <h3>Task 2.1</h3>
    <?php
    echo "[ 1, 2, 3, 4, 2, 5, 6, 3, 7, 7 ]" . "<br>";
    $array = array(1, 2, 3, 4, 2, 5, 6, 3, 7, 7);
    sortArray($array);
    ?>
    <hr>
    <h3>Task 2.2</h3>
    <?php echo "Рандомне ім'я тварини: " . generate_animal_name("Кішка"); ?>
    <hr>
    <h3>Task 2.3</h3>
    <?php
    $randomArray1 = createArray();
    $randomArray2 = createArray();
    $resultArray = mergeAndSortArrays($randomArray1, $randomArray2);
    echo "<br>" . "Результат з'єднання та сортування масивів: " . "<br>";
    print_r($resultArray);
    ?>
    <hr>
    <h3>Task 2.4</h3>
    <?php
    $sortedByAge = sortUsersArray($users, 'age');
    echo "<br>" . "Сортування за віком: ";
    print_r($sortedByAge);

    $sortedByName = sortUsersArray($users, 'name');
    echo "<br>" . "Сортування за ім'ям: ";
    print_r($sortedByName);
    ?>
    <hr>
</body>

</html>
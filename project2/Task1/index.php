<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Task1</title>
    <style>
        body {
            font-size: 12px;
            color: #383838;
            font-family: "Lucida Console", "Courier New", monospace;
            line-height: 1.5;
            padding: 20px;

        }

        p {
            margin: 5px;
        }

        form {}

        .textareaChangeText {
            width: 325px;
            height: 70px;
            margin: 5px;

        }

        .inputChangeText {
            width: 150px;
            margin: 5px;
        }

        .buttonSubmit {
            width: 200px;
            margin: 5px;
        }

        td {
            border: 2px dotted red;

        }

        table {
            margin: 0 auto;
            width: fit-content;
        }
    </style>
</head>

<body>
    <form action="index.php" method="POST">
        <?php
        function textChange()
        {
            if (!isset($_POST["text"]) or !isset($_POST["search"]) or !isset($_POST["replace"])) {
                return;
            }
            $newArr = str_split($_POST["text"]);
            for ($i = 0; $i < count($newArr); $i++) {
                if ($newArr[$i] == $_POST["search"]) {
                    $newArr[$i] = $_POST["replace"];
                }
            }
            $result = implode("", $newArr);
            echo $result;
        }
        function sortCity()
        {
            if (!isset($_POST["cityList"])) {
                return;
            }
            //DDD AAA ГГГ VVV БББ
            $cityArray = explode(" ", $_POST["cityList"]);
            sort($cityArray);
            $result = implode("", $cityArray);
            echo $result;
        }
        function deleteFileExtension()
        {
            $string = "D:\\WebServers\\home\\testsite\\www\\arasra.txt;";
            $newArr = str_split($string);
            foreach ($newArr as $key => $value) {
                if ($value == "\\") {
                    $keyLastEntry = $key;
                }
                if ($value == ".") {
                    $keyExtension = $key;
                }
            }
            $arraySlice = array_splice($newArr, $keyLastEntry + 1, ($keyExtension - $keyLastEntry - 1));
            $result = implode("", $arraySlice);
            echo $result;
        }
        function dateCalculate()
        {
            $first_date = $_POST["first_date"];
            $second_date = $_POST["second_date"];
            $date1 = new DateTime($first_date);
            $date2 = new DateTime($second_date);

            $diff = $date2->diff($date1);

            $date3 = date('Y-m-d', strtotime($first_date . $second_date));
            $date1->format("Y-m-d");
            $result = $diff->format('%R%a днів');
            echo $result;

        }
        function randomPassword($length, $characters)
        {
            $symbols = array();
            $passwords = array();
            $used_symbols = '';
            $pass = '';

            $symbols["lower_case"] = 'abcdefghijklmnopqrstuvwxyz';
            $symbols["upper_case"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $symbols["numbers"] = '1234567890';
            $symbols["special_symbols"] = '!?~@#-_+<>[]{}';

            $characters = explode(",", $characters);
            foreach ($characters as $key => $value) {
                $used_symbols .= $symbols[$value];
            }
            $symbols_length = strlen($used_symbols) - 1;

            $pass = '';
            for ($i = 0; $i < $length; $i++) {
                $n = rand(0, $symbols_length);
                $pass .= $used_symbols[$n];
            }
            $password = $pass;
            return $password;
        }

        ?>
        <button class="buttonSubmit" type="submit">Результат</button>
        
        <h3>Task 1.1</h3>
        <textarea class="textareaChangeText" placeholder="Текст" type="text" name="text"></textarea><br>
        <input class="inputChangeText" placeholder="Знайти" type="text" name="search">
        <input class="inputChangeText" placeholder="Замінити" type="text" name="replace"><br>
        <textarea class="textareaChangeText" placeholder="Результат" type="text"
            name="result"><?php textChange() ?></textarea><br>
        <hr>
        <h3>Task 1.2</h3>

        <textarea class="textareaChangeText" placeholder="Текст" type="text" name="cityList"></textarea><br>
        <textarea class="textareaChangeText" placeholder="Результат" type="text"
            name="resultCity"><?php sortCity() ?></textarea><br>
        <hr>
        <h3>Task 1.3</h3>

        <p>Назва файлу без розширення: <?php deleteFileExtension() ?></p>
        <hr>
        <h3>Task 1.4</h3>
        
        <input class="inputChangeText" type="date" name="first_date">
        <input class="inputChangeText" type="date" name="second_date"><br>
        <textarea class="textareaChangeText" type="text"><?php dateCalculate() ?></textarea>
        <hr>
        <h3>Task 1.5</h3>

        <p>
            Рандомний пароль:
            <?php
            $password = randomPassword(10, "lower_case,upper_case,numbers,special_symbols");
            echo $password;
            ?>
        </p>
        <hr>
    </form>
</body>

</html>
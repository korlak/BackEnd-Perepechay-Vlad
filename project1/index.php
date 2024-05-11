<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>ЛР1</title>
    <style>
        table {

            border: 2px solid #505050;
        }

        td {
            border: 2px solid #505050;
            background-color: white;
        }

        form {
            border-color: black;
            border-radius: 55px;
            background-color: #C79BE7;
            padding: 5%;
        }

        * {
            box-sizing: border-box;
        }

        body {
            color: #383838;
            font-family: "Lucida Console", "Courier New", monospace;
            padding: 15px;
            line-height: 1.5;
            margin: 20px;
            background-color: white;
        }

        .p {
            font-family: "Times New Roman", Times, serif;
            font-size: 24px;
        }

        input {
            width: 20%;
            height: 30px;
            resize: vertical;
            padding: 15px;
            border-radius: 5px;
            border: 0;
            color: #757575;
            font-family: Arial, Helvetica, sans-serif;
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.06);
        }

        button {
            width: 30%;
            height: 30px;
            color: #757575;
            border: 0;
            border-radius: 15px;
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.06);

        }
    </style>
</head>

<body>
    <p>Полину в мріях в купель океану, </p>
    <p>Відчую <b>шовковистість</b> глибини,</p>
    <p>Чарівні мушлі з дна собі дістану,</p>
    <p>&emsp;Щоб <b><i>взимку</b></i></p>
    <p>&emsp;тішили</p>
    <p>&emsp;&emsp;мене</p>
    <p>&emsp;&emsp;&emsp;вони…</p>

    <?php
    function blockRand()
    {
        $style = "width:40px;height:40px;position:absolute;background-color:red;";
        for ($i = 0; $i < mt_rand(1,10); $i++) {
        $margin =
            "margin-top:" . mt_rand(100, 1000) . "px;" .
            "margin-bottom:" . mt_rand(100, 1000) . "px;" .
            "margin-left:" . mt_rand(100, 1000) . "px;" .
            "margin-right:" . mt_rand(100, 1000) . "px; ";

        echo "<div style=" . $style . $margin . "></div>";
        }


    }
    blockRand();
    ?>
    <form action="index.php" method="POST">
        <input placeholder="Введіть кількість гривень" name="money" /> <br><br>
        <input placeholder="Введіть номер місяця" name="mounth" /> <br><br>
        <input placeholder="Введіть букву" name="letter" /> <br><br>
        <input placeholder="Введіть трьохзначне число" name="number" /> <br><br>
        <input placeholder="Кількість рядків" style="width:13%" name="ROW" /> 
        <input placeholder="Кількість стовпців" style="width:13%" name="COL" /> <br><br>
        
        <button type="submit">Обрахувати</button><br><br>
        <?php
        function money()
        {
            if (!isset($_POST['money']))
                return;
            if ($_POST['money'] <= 0) {
                return;
            }
            $dollar = 39.00;
            $result = $_POST['money'] / $dollar;
            echo $_POST['money'] . "₴ = " . round($result, 2) . "$<br>";

        }
        function mounths()
        {
            if (!isset($_POST['mounth']))
                return;
            if ($_POST['mounth'] <= 0 or $_POST['mounth'] >= 13) {
                return;
            }
            if ($_POST["mounth"] == 1) {
                return "січень";

            } else if ($_POST["mounth"] == 2) {
                return "лютий";

            } else if ($_POST["mounth"] == 3) {
                return "березень";

            } else if ($_POST["mounth"] == 4) {
                return "квітень";

            } else if ($_POST["mounth"] == 5) {
                return "травень";

            } else if ($_POST["mounth"] == 6) {
                return "червень";

            } else if ($_POST["mounth"] == 7) {
                return "липень";

            } else if ($_POST["mounth"] == 8) {
                return "серпень";

            } else if ($_POST["mounth"] == 9) {
                return "вересень";

            } else if ($_POST["mounth"] == 10) {
                return "жовтень";

            } else if ($_POST["mounth"] == 11) {
                return "листопад";

            } else if ($_POST["mounth"] == 12) {
                return "грудень";

            }
        }
        function letter()
        {
            if (!isset($_POST['letter']))
                return;
            if (iconv_strlen($_POST['letter']) > 1 or is_numeric($_POST['letter'])) {
                return;
            }
            switch ($_POST["letter"]) {
                case "а" or "о" or "у"  or  "и" or "і" or "ї" or "й" or "ю" or "я" or "е":
                    echo "Буква голосна";
                    break;
                default:
                    echo "Буква приголосна";
                    break;
            }

        }
        function number()
        {
            if (!isset($_POST['number']))
                return;
            if (iconv_strlen($_POST['number']) != 3 or !is_numeric($_POST['number'])) {
                echo "Error";
                return;
            }
            $array = str_split($_POST["number"]);
            $reverse = array_reverse($array);
            $sum = $array[0] + $array[1] + $array[2];
            echo "Сума цифр = " . $sum . "," . "Перше число перевернутого массива = " . $reverse[0];

        }
        function tableRand()
        {

            if (!isset($_POST['ROW']) or !isset($_POST['COL'])) {
                return;
            }

            $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');


            if ($_POST['ROW'] >= 1 and $_POST['COL'] >= 1) {
                echo "<table>";
                for ($i = 0; $i < $_POST['ROW']; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $_POST['COL']; $j++) {
                        $color = '#' . $rand[mt_rand(0, 15)] . $rand[mt_rand(0, 15)] . $rand[mt_rand(0, 15)] . $rand[mt_rand(0, 15)] . $rand[mt_rand(0, 15)] . $rand[mt_rand(0, 15)];
                        echo "<td style=" . "background-color:" . $color . ";width:50px;height:50px;>" . "</td>";
                    }
                    echo "<tr>";
                }
                echo "</table><br>";
            }
        }

        money();
        echo "Місяць - " . mounths() . "<br>";
        echo letter() . "<br>";
        number();
        tableRand();
        ?>

    </form>
  
</body>

</html>
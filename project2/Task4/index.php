<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-size: 12px;
            color: #383838;
            font-family: "Lucida Console", "Courier New", monospace;
            line-height: 1.5;
            padding: 20px;
        }
        td{
            text-align: center;
        }
    </style>
    <title>Task4</title>
</head>

<body>
    <form action="calculate.php">
        <table>
            <tr>
                <td>x</td>
                <td>y</td>
            </tr>
            <tr>
                <td><input type="text" name="xInp"></td>
                <td><input type="text" name="yInp"></td>
                <td><button type="submit">=</button></td>
            </tr>
            <tr>
                <td>
                    <button type="reset">Заповнити форму спочатку</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
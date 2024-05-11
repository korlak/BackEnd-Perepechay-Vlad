<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;

        }

        tr {
            border: 1px solid black;
        }

        td {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php include 'Function/func.php'; ?>
    <table>
        <tr>
            <td style="background-color:yellow">x^y</td>
            <td style="background-color:yellow">x!</td>
            <td style="background-color:yellow">sin(x)</td>
            <td style="background-color:yellow">cos(x)</td>
            <td style="background-color:yellow">tg(x)</td>
        </tr>
        <tr>
            <td><?php echo myPow($_GET['xInp'], $_GET['yInp']); ?></td>
            <td><?php echo myFactorial($_GET['xInp']); ?></td>
            <td><?php echo mySin($_GET['xInp']); ?></td>
            <td><?php echo myCos($_GET['xInp']); ?></td>
            <td><?php echo myTan($_GET['xInp']); ?></td>
        </tr>
    </table>
</body>

</html>
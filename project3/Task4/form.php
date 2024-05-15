<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourForm</title>
</head>

<body>
    <?php
    $target_file = basename($_FILES["picture"]["name"]);
    move_uploaded_file($_FILES["picture"]["tmp_name"], "images/" . $target_file)

        ?>
    <img src="images/<?= $_FILES['picture']['name'] ?>" alt="img" style="border: 2px solid black; width: 250px; height:250px">
    <br>
    <a href="index.php">Повернутися на головну сторінку</a>
</body>

</html>
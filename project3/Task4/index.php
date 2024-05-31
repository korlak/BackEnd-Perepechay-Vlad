<!DOCTYPE html>
<html lang="en">

<head>
    <title>Task3</title>
    <style>
        body {
            font-size: 12px;
            color: #383838;
            font-family: "Lucida Console", "Courier New", monospace;
            line-height: 1.5;
            padding: 20px;
        }
        input{
            margin:5px;

        }
    </style>
</head>

<body>
    <form enctype="multipart/form-data" method="post" action="form.php">
        <legend>Завантажте фотографію</legend>
        <input type="file" accept="image" name="picture"><br>
        <input type="submit" value="SEND"><br>

        <input type="checkbox" name="aaa" value="123">
        <input type="checkbox" name="aaa" value="124">
        <input type="checkbox" name="aaa" value="125">
        <input type="checkbox" name="aaa" value="126">

    </form>

</body>

</html>
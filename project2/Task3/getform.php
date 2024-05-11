<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YourForm</title>
</head>

<body>
  <table>
    <tr>
      <td>
        <div class="leveling">
          Логін:
        </div>
      </td>
      <td>
        <div class="leveling">
          <?= $_POST['login'] ?>
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <div class="leveling">
          Пароль:
        </div>
      </td>
      <td>
        <div class="leveling">

          <?php
          if ($_POST['password'] !== $_POST['password2']): ?>
            <p>Паролі неспівпадають</p>
          <?php else: ?>
            <p>Паролі співпадають</p>
          <?php endif; ?>

        </div>
      </td>
    </tr>

    <tr>
      <td>Стать:</td>
      <td><?= $_POST['gender'] ?></td>
    </tr>

    <tr>
      <td>Місто</td>
      <td><?= $_POST['city'] ?></td>
    </tr>

    <tr>
      <td>Улюблені ігри:</td>
      <td>
        <?php
        $game = $_POST['games'];
        foreach ($game as $i) {
          echo $i . ", ";
        }
        ?>
      </td>
    </tr>

    <tr>
      <td> Про себе:</td>
      <td><?= $_POST['about'] ?></td>
    </tr>

    <tr>
      <td> Картинка:</td>
      <td>
        <?php
        $target_file = basename($_FILES["picture"]["name"]);
        move_uploaded_file($_FILES["picture"]["tmp_name"], "images/" . $target_file)
      
        ?>
        <img src="<?=$_FILES['picture']['name']?>" alt="img" style="border: 2px solid black; width: 250px; height:250px">
      </td>
    </tr>
    <tr>
      <td>
        <a href="index.php">Повернутися на головну сторінку</a>
      </td>
    </tr>
  </table>
</body>

</html>
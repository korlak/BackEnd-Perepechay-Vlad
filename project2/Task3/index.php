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

    table {
      width: fit-content;
    }
    .imgLang{
      width:100px;
      height: 50px;
    }
    td {
      width: 250px;
    }
  </style>
</head>

<body>

  <a href="index.php?lang=ukr"><img class="imgLang" src="lang/ua.svg" alt="Українська"></a>
  <a href="index.php?lang=eng"><img class="imgLang" src="lang/uk.svg" alt="English"></a><br>

  <?php
  if (isset($_GET['lang']) && ($_GET['lang'] == 'ukr' || $_GET['lang'] == 'eng')) {
    $lang = $_GET['lang'];
    setcookie('lang', $lang, time() + (6 * 30 * 24 * 60 * 60)); 
  } else {
    $lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'eng';
  }

  if ($lang == 'ukr') {
    echo "Вибрано українську мову.";
  } else {
    echo "English language selected.";
  }
  ?>
  <br>
  <form enctype="multipart/form-data" method="post" action="getform.php">
    <table>
      <tr>
        <td>Логін:</td>
        <td><input type="text" name="login"></td>
      </tr>

      <tr>
        <td>Пароль:</td>
        <td><input type="password" name="password"></td>
      </tr>

      <tr>
        <td>Пароль(ще раз):</td>
        <td><input type="password" name="password2"></td>
      </tr>

      <tr>
        <td>Стать:</td>
        <td>
          <input type="radio" value="male" name="gender"><label for="male">Чоловіча</label>
          <input type="radio" value="female" name="gender"><label for="female">Жіноча</label>
        </td>
      </tr>

      <tr>
        <td>Місто:</td>
        <td>
          <select name="city">
            <option value="Житомир">Житомир</option>
            <option value="Київ">Київ</option>
            <option value="Одеса">Одеса</option>
            <option value="Львів">Львів</option>
            <option value="Чернігів">Чернігів</option>
          </select>
        </td>
      </tr>


      <tr>
        <td> Улюблені ігри:</td>
        <td>
          <input type="checkbox" value="football" name="games[]"><label for="football">Футбол</label><br>
          <input type="checkbox" value="basketball" name="games[]"><label for="basketball">Баскетбол</label><br>
          <input type="checkbox" value="skyrim" name="games[]"><label for="skyrim">TES 5: Skyrim</label><br>
          <input type="checkbox" value="dmc" name="games[]"><label for="dmc">Devil May Cry</label><br>
        </td>
      </tr>

      <tr>
        <td>Про себе:</td>
        <td><textarea name="about" id="about"></textarea></td>
      </tr>

      <tr>
        <td>Фотографія:</td>
        <td><input type="file" name="picture"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Зареєструватись"></td>
      </tr>
    </table>
  </form>

</body>

</html>
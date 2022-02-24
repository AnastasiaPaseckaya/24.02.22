<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ГрумРум</title>
    <link rel="stylesheet" href="qwe/style.css">
</head>
<body>
  <?php
  include 'nav.php';
  nav(2);
  ?>
  <div class="register">
    <form action="registeraction.php" class="form" method="POST">
      <input type="text" placeholder="ФИО" name="fio">
      <input type="text" placeholder="логин" name="login">
      <input type="email" placeholder="email" name="email">  
      <input type="password" placeholder="пароль" name="password">
      <input type="password" placeholder="еще раз пароль" name="confirm">
      <label><input type="checkbox">Согласие на обработку ПД</label>
      <button>Зарегистрироваться</button>
    </form>
  </div>
</body>
</html>